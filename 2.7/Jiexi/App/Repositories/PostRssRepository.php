<?php

namespace Jiexi\App\Repositories;

use stdClass;

/**
 * The post repository that fetches posts from an RSS feed
 */
class PostRssRepository implements PostRepositoryInterface {
    
    protected $posts = array();
    
    public function __construct() {
        $xml = simplexml_load_file(dirname(__FILE__) . '/posts.xml');
        $posts = $xml->xpath('channel/item');
        foreach ($posts as $key => $post){
            $post = json_decode(json_encode($post));
            $post->body = $post->description;
            unset($post->description);
            $this->posts[$key + 1] = $post;
        }
    }
    
    /**
     * @see \Jiexi\App\Repositories\PostRepositoryInterface::All()
     */
    public function All ()
    {
        return $this->posts;
    }
    
    /**
     * @see \Jiexi\App\Repositories\PostRepositoryInterface::Find()
     */
    public function Find ($id,\Jiexi\App\Address $address)
    {
        return isset($this->posts[$id]) ? $this->posts[$id] : new stdClass;
    }
}