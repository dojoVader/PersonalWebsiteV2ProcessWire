<?php

/* layout/ui.twig */
class __TwigTemplate_6155b4e856f21202e0c3c7243b305c10873fc7582c0ccb3b4dd0a486f32ee660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        ";
        // line 5
        echo twig_include($this->env, $context, "layout/elements/header.twig");
        echo "
    </head>

    <body id=\"newui\">
        <header class=\"nav-menu\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#homepage-ui\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#about-page-ui\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#projects-page-ui\">Projects</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#projects-page-ui\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#projects-page-ui\">Personal Research / Topics</a>
                </li>
            </ul>
        </header>

        <div class=\"container-fluid nopadding\" id=\"main-page\">
            <section class=\"row full-view\" id=\"homepage-ui\">
                <header class=\"col-md-2 col-sm-2 col-lg-2 col-xs-12\" id=\"page-header\">
                    <div class=\"logo\">
                        <a class=\"logo_link\" href=\"\">
                            <img src=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/images/logo.png\" alt=\"Okeowo Aderemi\">
                        </a>
                    </div>
                </header>
                <div class=\"pane\">
                    <small>Hi, my name is
                    </small>
                    <h1>Okeowo Aderemi
                    </h1>
                    <h3>";
        // line 43
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
        echo "</h3>
                    <div class=\"about-me col-md-12 col-lg-12 col-xs-12 nopadding\">
                        ";
        // line 45
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array());
        echo "
                    </div>
                </div>

            </section>
            <section class=\"row full-view\" id=\"about-page-ui\">
                <div class=\"col-lg-12 col-xs-12 col-sm-12\">
                    <div class=\"title\">
                        <h3>Okeowo Aderemi</h3>
                        <h4>Software Engineer</h4>
                    </div>
                    <div class=\"content col-lg-8 col-md-8 col-xs-12 col-sm-12 nopadding\">
                        <p>";
        // line 57
        echo $this->getAttribute((isset($context["aboutNode"]) ? $context["aboutNode"] : null), "body", array());
        echo "</p>

                    </div>
                    <div class=\"user_logo col-lg-3 col-md-3 pull-right\">
                        <img src=\"";
        // line 61
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/images/author.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Skills</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">
                                        Fullstack Development
                                    </span>
                                </li>
                                <li></li>
                                <li>
                                    <span class=\"black-text\">Mobile Applications Development</span>
                                </li>

                                <li>
                                    <span class=\"black-text\">CMS Dev</span>
                                    /WordPress /Proceswire
                                </li>
                                <li>
                                    <span class=\"black-text\">Moodle Development</span>
                                    /Themes /Plugins
                                </li>
                                <li>
                                    <span class=\"black-text\">Consulting Services</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Content Writing</span>
                                    /Tutorials /Documentations /Articles</li>

                            </ul>
                        </div>
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Frontend</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">JavaScript
                                    </span>(TypeScript)</li>
                                <li>
                                    <span class=\"black-text\">Angular 7/8</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Vue</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">DojoToolkit</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">SCSS/LESS</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Others
                                    </span>
                                    /JS Frameworks
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Others</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">Java</span>
                                    /Spring Boot MVC /Processing
                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        Node
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        .NET Frameworks /C# 
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">PHP
                                    </span>/Yii2 /Symfony /Processwire /WordPress
                                </li>

                            </ul>
                        </div>
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Tools</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">Adobe XD</span>

                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        Linux /GNU /Bash
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        Jira / TFS / Git
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Whatever catches my fancy</span>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"footer-design\"></div>
            </section>

            <section class=\"row full-view\" id=\"project-page\">

                <div class=\"pane\">
                    <div id=\"project-list\">
                        <div class=\"project_counter\">
                            <p class=\"current-count\">01</p>
                            <small>/ 10</small>

                        </div>
                        <div class=\"title\">
                            /Featured Projects
                        </div>
                        <div class=\"project-details col-md-12 col-lg-12 col-xs-12 col-sm-12\">
                            <h4>Java Spring Boot Application</h4>
                            <p class=\"project_description\">Description of the project can also go here into the detail of the applications</p>
                            <br>
                            <button class=\"btn btn-outline-primary\">View More</button>
                            <br><br><br>
                            <div class=\"meta-info\">
                                <h5>/Meta</h5>
                                <p>
                                    <span class=\"label-meta\">Platform</span>: [ Java ]</p>
                                <p>
                                    <span class=\"label-meta\">Stacks Used</span>: [ SpringBoot MVC, Themeleaf, Quartz ]</p>
                            </div>
                        </div>
                    </div>
                    <div id=\"project-image-viewer\">
                        <div class=\"image-holder\">
                            <img alt=\"\" src=\"https://i.github-camo.com/59f4bdf8cb56f54a110c5730af97a66bdb3daf8d/68747470733a2f2f757365722d696d616765732e67697468756275736572636f6e74656e742e636f6d2f3131383935312f33303239313233332d30623665303461632d393665372d313165372d396161382d3363633631343335333763312e706e67\">
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"project-controls\">
                        <div class=\"col-lg-3 col-md-3 pull-left\">
                            <a href=\"#\">/Previous</a>
                        </div>
                        <div class=\"col-lg-3 col-md-3 pull-right\">
                            <a href=\"#\">/Next</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"row full-view\" id=\"concept-page-ui\">
                <div class=\"col-lg-12 col-xs-12 col-sm-12\">
                    <div class=\"title\">
                        <h2>Project Labs</h2>
                        <h4>Experimental Projects and /localhost codes</h4>
                    </div>
                    <div class=\"content col-lg-8 col-md-8 col-xs-12 col-sm-12 nopadding\">
                        <p>";
        // line 224
        echo $this->getAttribute((isset($context["aboutNode"]) ? $context["aboutNode"] : null), "body", array());
        echo "</p>

                    </div>
                    <div class=\"user_logo col-lg-3 col-md-3 pull-right\">
                        <img src=\"";
        // line 228
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/images/author.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Skills</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">
                                        Fullstack Development
                                    </span>
                                </li>
                                <li></li>
                                <li>
                                    <span class=\"black-text\">Mobile Applications Development</span>
                                </li>

                                <li>
                                    <span class=\"black-text\">CMS Dev</span>
                                    /WordPress /Proceswire
                                </li>
                                <li>
                                    <span class=\"black-text\">Moodle Development</span>
                                    /Themes /Plugins
                                </li>
                                <li>
                                    <span class=\"black-text\">Consulting Services</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Content Writing</span>
                                    /Tutorials /Documentations /Articles</li>

                            </ul>
                        </div>
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Frontend</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">JavaScript
                                    </span>(TypeScript)</li>
                                <li>
                                    <span class=\"black-text\">Angular 7/8</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Vue</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">DojoToolkit</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">SCSS/LESS</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Others
                                    </span>
                                    /JS Frameworks
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Others</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">Java</span>
                                    /Spring Boot MVC /Processing
                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        Node
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        .NET Frameworks /C# 
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">PHP
                                    </span>/Yii2 /Symfony /Processwire /WordPress
                                </li>

                            </ul>
                        </div>
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Tools</h4>
                            <ul>
                                <li>
                                    <span class=\"black-text\">Adobe XD</span>

                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        Linux /GNU /Bash
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">
                                        Jira / TFS / Git
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">Whatever catches my fancy</span>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"footer-design\"></div>
            </section>
        </div>
        <footer>
            <div class=\"header-container headroom headroom--not-top headroom--pinned\" id=\"header-container\">
                ";
        // line 342
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "
            </div>
        </footer>
    </body>
    <script src=\"";
        // line 346
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "/scripts/run.js\"></script>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout/ui.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 346,  386 => 342,  269 => 228,  262 => 224,  96 => 61,  89 => 57,  74 => 45,  69 => 43,  57 => 34,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         {{include("layout/elements/header.twig")}}*/
/*     </head>*/
/* */
/*     <body id="newui">*/
/*         <header class="nav-menu">*/
/*             <ul class="nav">*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#homepage-ui">Home</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#about-page-ui">About</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#projects-page-ui">Projects</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#projects-page-ui">Articles</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#projects-page-ui">Personal Research / Topics</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </header>*/
/* */
/*         <div class="container-fluid nopadding" id="main-page">*/
/*             <section class="row full-view" id="homepage-ui">*/
/*                 <header class="col-md-2 col-sm-2 col-lg-2 col-xs-12" id="page-header">*/
/*                     <div class="logo">*/
/*                         <a class="logo_link" href="">*/
/*                             <img src="{{config.urls.templates }}assets/images/logo.png" alt="Okeowo Aderemi">*/
/*                         </a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="pane">*/
/*                     <small>Hi, my name is*/
/*                     </small>*/
/*                     <h1>Okeowo Aderemi*/
/*                     </h1>*/
/*                     <h3>{{page.summary}}</h3>*/
/*                     <div class="about-me col-md-12 col-lg-12 col-xs-12 nopadding">*/
/*                         {{page.body}}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </section>*/
/*             <section class="row full-view" id="about-page-ui">*/
/*                 <div class="col-lg-12 col-xs-12 col-sm-12">*/
/*                     <div class="title">*/
/*                         <h3>Okeowo Aderemi</h3>*/
/*                         <h4>Software Engineer</h4>*/
/*                     </div>*/
/*                     <div class="content col-lg-8 col-md-8 col-xs-12 col-sm-12 nopadding">*/
/*                         <p>{{aboutNode.body}}</p>*/
/* */
/*                     </div>*/
/*                     <div class="user_logo col-lg-3 col-md-3 pull-right">*/
/*                         <img src="{{config.urls.templates }}assets/images/author.jpg" alt="">*/
/*                     </div>*/
/*                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Skills</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Fullstack Development*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li></li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Mobile Applications Development</span>*/
/*                                 </li>*/
/* */
/*                                 <li>*/
/*                                     <span class="black-text">CMS Dev</span>*/
/*                                     /WordPress /Proceswire*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Moodle Development</span>*/
/*                                     /Themes /Plugins*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Consulting Services</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Content Writing</span>*/
/*                                     /Tutorials /Documentations /Articles</li>*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Frontend</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">JavaScript*/
/*                                     </span>(TypeScript)</li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Angular 7/8</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Vue</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">DojoToolkit</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">SCSS/LESS</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Others*/
/*                                     </span>*/
/*                                     /JS Frameworks*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Others</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">Java</span>*/
/*                                     /Spring Boot MVC /Processing*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Node*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         .NET Frameworks /C# */
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">PHP*/
/*                                     </span>/Yii2 /Symfony /Processwire /WordPress*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Tools</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">Adobe XD</span>*/
/* */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Linux /GNU /Bash*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Jira / TFS / Git*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Whatever catches my fancy</span>*/
/*                                 </li>*/
/* */
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="footer-design"></div>*/
/*             </section>*/
/* */
/*             <section class="row full-view" id="project-page">*/
/* */
/*                 <div class="pane">*/
/*                     <div id="project-list">*/
/*                         <div class="project_counter">*/
/*                             <p class="current-count">01</p>*/
/*                             <small>/ 10</small>*/
/* */
/*                         </div>*/
/*                         <div class="title">*/
/*                             /Featured Projects*/
/*                         </div>*/
/*                         <div class="project-details col-md-12 col-lg-12 col-xs-12 col-sm-12">*/
/*                             <h4>Java Spring Boot Application</h4>*/
/*                             <p class="project_description">Description of the project can also go here into the detail of the applications</p>*/
/*                             <br>*/
/*                             <button class="btn btn-outline-primary">View More</button>*/
/*                             <br><br><br>*/
/*                             <div class="meta-info">*/
/*                                 <h5>/Meta</h5>*/
/*                                 <p>*/
/*                                     <span class="label-meta">Platform</span>: [ Java ]</p>*/
/*                                 <p>*/
/*                                     <span class="label-meta">Stacks Used</span>: [ SpringBoot MVC, Themeleaf, Quartz ]</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="project-image-viewer">*/
/*                         <div class="image-holder">*/
/*                             <img alt="" src="https://i.github-camo.com/59f4bdf8cb56f54a110c5730af97a66bdb3daf8d/68747470733a2f2f757365722d696d616765732e67697468756275736572636f6e74656e742e636f6d2f3131383935312f33303239313233332d30623665303461632d393665372d313165372d396161382d3363633631343335333763312e706e67">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <div class="project-controls">*/
/*                         <div class="col-lg-3 col-md-3 pull-left">*/
/*                             <a href="#">/Previous</a>*/
/*                         </div>*/
/*                         <div class="col-lg-3 col-md-3 pull-right">*/
/*                             <a href="#">/Next</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/*             <section class="row full-view" id="concept-page-ui">*/
/*                 <div class="col-lg-12 col-xs-12 col-sm-12">*/
/*                     <div class="title">*/
/*                         <h2>Project Labs</h2>*/
/*                         <h4>Experimental Projects and /localhost codes</h4>*/
/*                     </div>*/
/*                     <div class="content col-lg-8 col-md-8 col-xs-12 col-sm-12 nopadding">*/
/*                         <p>{{aboutNode.body}}</p>*/
/* */
/*                     </div>*/
/*                     <div class="user_logo col-lg-3 col-md-3 pull-right">*/
/*                         <img src="{{config.urls.templates }}assets/images/author.jpg" alt="">*/
/*                     </div>*/
/*                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Skills</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Fullstack Development*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li></li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Mobile Applications Development</span>*/
/*                                 </li>*/
/* */
/*                                 <li>*/
/*                                     <span class="black-text">CMS Dev</span>*/
/*                                     /WordPress /Proceswire*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Moodle Development</span>*/
/*                                     /Themes /Plugins*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Consulting Services</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Content Writing</span>*/
/*                                     /Tutorials /Documentations /Articles</li>*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Frontend</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">JavaScript*/
/*                                     </span>(TypeScript)</li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Angular 7/8</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Vue</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">DojoToolkit</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">SCSS/LESS</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Others*/
/*                                     </span>*/
/*                                     /JS Frameworks*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Others</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">Java</span>*/
/*                                     /Spring Boot MVC /Processing*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Node*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         .NET Frameworks /C# */
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">PHP*/
/*                                     </span>/Yii2 /Symfony /Processwire /WordPress*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Tools</h4>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <span class="black-text">Adobe XD</span>*/
/* */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Linux /GNU /Bash*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">*/
/*                                         Jira / TFS / Git*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">Whatever catches my fancy</span>*/
/*                                 </li>*/
/* */
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="footer-design"></div>*/
/*             </section>*/
/*         </div>*/
/*         <footer>*/
/*             <div class="header-container headroom headroom--not-top headroom--pinned" id="header-container">*/
/*                 {{include("layout/elements/footer.twig")}}*/
/*             </div>*/
/*         </footer>*/
/*     </body>*/
/*     <script src="{{config.urls.templates}}/scripts/run.js"></script>*/
/* </html>*/
/* */
