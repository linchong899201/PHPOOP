<?php 

$post = new PostModel();

$posts = $post->fetchAll();


foreach ($posts as $post) {
	echo '<h1>' . $post->title . '</h1>';
}

?>