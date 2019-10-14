<?php 

// Get the Categories for the blog pages

$categories = $pages->get('/articles/categories/');
$view->set('categories',$categories->children);

$blogPosts = $pages->find("limit=20,include=hidden,template=blog-post,sort=-blog_date");
$view->set('posts',$blogPosts);



