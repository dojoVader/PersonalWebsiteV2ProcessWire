<?php
//main content
$posts = $pages->find("template=blog-post, blog_categories=$page");

//grab some posts
$view->set("posts", $posts);
