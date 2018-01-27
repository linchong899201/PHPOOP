<?php 

/**
 * psd-0 autoloader
 */
require 'autoload.php';


/**
 * 实例化PostJsonRepository
 */

$postRepository = new Jiexi\App\Repositories\PostRssRepository();

$posts = $postRepository->All();

echo '<ul>';
foreach ($posts as $post) {
	echo '<li>' . $post->title . '</li>';
}
echo '</ul>';

$post = $postRepository->Find(2);
echo '<h1>' . $post->title . '</h1>';
echo '<p>' . $post->body . '</p>';
 ?>