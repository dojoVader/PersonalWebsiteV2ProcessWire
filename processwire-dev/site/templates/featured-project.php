<?php
// We will be using this code section to send JSON data to VueJS for the Featured Project Page
if ($config->ajax) {
    //Get the Featured Projects
    $projects_data = null; 
    $featuredProjects = $pages->get('/featured-projects/')->children;
    foreach ($featuredProjects as $projects) {
        $projects_data[] = [
            'title' => $projects->title,
            'id' => $projects->id,
            'blog_href' => $projects->blog_href,
            'images' => $projects->blog_images->url,
            'platforms' => $projects->project_platform,
            'stackUsed' => $projects->stackUsed,
            'headline'=> $projects->blog_headline
        ];
    }
    header('Content-type:application/json');
    echo json_encode($projects_data);
}
