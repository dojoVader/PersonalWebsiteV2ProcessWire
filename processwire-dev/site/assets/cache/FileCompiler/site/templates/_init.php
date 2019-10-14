<?php
class ProcessUtil
{
	public function resizeImage($page, $w, $h)
	{
		$image = $page->size($w, $h, array('quality' => 100));
		return $image->url;
	}
}

$pwinstance = new ProcessUtil();

$title = $page->get('headline|title'); // headline if available, otherwise title

$content = $page->body;

$sidebar = $page->sidebar;

$homepage = $pages->get('/');

$childrenMenu = $homepage->children;

$description = $page->description;

$view->set("appName", "Okeowo Aderemi");

$view->set("aboutNode", $pages->get('/about'));

$posts = $pages->find("template=blog-post, sort=-blog_date,limit=5");

$view->set("recentposts", $posts);

$tags = $pages->get("/articles/tags/")->children;

$view->set("pwutil", $pwinstance);

$view->set("homepage", $homepage);

$labNote = $pages->get("/labs");

$view->set('labNote', $labNote);

$view->set('labProjects',$labNote->children);



