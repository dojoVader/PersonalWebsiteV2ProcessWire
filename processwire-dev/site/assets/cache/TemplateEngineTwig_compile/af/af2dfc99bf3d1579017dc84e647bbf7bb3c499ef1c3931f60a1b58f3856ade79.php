<?php

/* layout/ui-home.twig */
class __TwigTemplate_48333c55737abd2bbf481307670c2b4e0bfd331720cd51b5ddb0812501f8e04c extends Twig_Template
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
        ";
        // line 9
        echo twig_include($this->env, $context, "layout/elements/menu.twig");
        echo "

        <div class=\"container-fluid nopadding\" id=\"main-page\">
            <section class=\"row full-view\" id=\"homepage-ui\">
                <header class=\"col-md-2 col-sm-2 col-lg-2 col-xs-12\" id=\"page-header\">
                    <div class=\"logo\">
                        <a class=\"logo_link\" href=\"\">
                            <img src=\"";
        // line 16
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
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
        echo "</h3>
                    <div class=\"about-me col-md-12 col-lg-12 col-xs-12 nopadding\">
                        ";
        // line 27
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
        // line 39
        echo $this->getAttribute((isset($context["aboutNode"]) ? $context["aboutNode"] : null), "body", array());
        echo "</p>

                    </div>
                    <div class=\"user_logo col-lg-3 col-md-3 pull-right\">
                        <img src=\"";
        // line 43
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

                <div class=\"pane\" v-if=\"projects.data.length\">

                    <div id=\"project-list\">

                        <div class=\"project_counter\">
                            <p class=\"current-count\">\${ (projects.currentIndex < 9) ? '0'+ (projects.currentIndex + 1) : projects.currentIndex }</p>
                            <small>/ \${projects.data.length}</small>

                        </div>
                        <div class=\"title\">
                            /\${projects.currentProject.title}
                        </div>
                        <div class=\"project-details col-md-12 col-lg-12 col-xs-12 col-sm-12\">
                            <h4>\${projects.currentProject.title}</h4>
                            <p class=\"project_description\">\${projects.currentProject.headline}</p>
                            <br>
                            <a :href=\"projects.currentProject.blog_href\" target=\"_blank\" class=\"btn btn-outline-primary\">View More</a>
                            <br><br><br>
                            <div class=\"meta-info\">
                                <h5>/Meta</h5>
                                <p>
                                    <span class=\"label-meta\">Platform</span>: [ \${projects.currentProject.platforms} ]</p>
                                <p>
                                    <span class=\"label-meta\">Stacks Used</span>: [ \${projects.currentProject.stackUsed}]</p>
                            </div>
                        </div>
                    </div>
                    <div id=\"project-image-viewer\">
                        <div class=\"image-holder\">
                            <img :alt=\"projects.currentProject.title\" :src = \"projects.currentProject.images\">
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"project-controls\">
                        <div class=\"col-lg-3 col-md-3 pull-left\">
                            <a v-on:click=\"prev(\$event)\" href=\"#\">/Previous</a>
                        </div>
                        <div class=\"col-lg-3 col-md-3 pull-right\">
                            <a v-on:click=\"next(\$event)\" href=\"#\">/Next</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"row full-view\" id=\"concept-page-ui\">
                <div class=\"col-lg-12 col-xs-12 col-sm-12\">
                    <div class=\"title\">
                        <h2>Project Labs</h2>
                        <h4>Experimental Projects and /localhost codes, these are codes for Research purposes or tinkering with concepts</h4>
                    </div>
                    <div class=\"content col-lg-8 col-md-8 col-xs-12 col-sm-12 nopadding\">
                    <br>
                        <p>";
        // line 209
        echo $this->getAttribute((isset($context["labNote"]) ? $context["labNote"] : null), "summary", array());
        echo "</p>

                    </div>
                    <div class=\"user_logo col-lg-3 col-md-3 pull-right\">
                        <img src=\"";
        // line 213
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/images/code.svg\" alt=\"\">
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding\">
                        <div class=\"col-md-4 col-lg-4 nopadding skillsets\">
                            <h4>Lab Projects</h4>
                            <ul>
                                ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labProjects"]) ? $context["labProjects"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["projects"]) {
            // line 220
            echo "                                <li>
                                    <span class=\"black-text\">";
            // line 221
            echo $this->getAttribute($context["projects"], "title", array());
            echo "</span>
                                    /";
            // line 222
            echo $this->getAttribute($context["projects"], "summary", array());
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projects'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                            </ul>
                        </div>
     
                    </div>

                </div>
                <div class=\"footer-design\"></div>
            </section>
        </div>
        <footer>
            <div class=\"header-container headroom headroom--not-top headroom--pinned\" id=\"header-container\">
                ";
        // line 235
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "
            </div>
        </footer>
    </body>
    <script src=\"";
        // line 239
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "/scripts/run.js\"></script>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout/ui-home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 239,  298 => 235,  285 => 224,  277 => 222,  273 => 221,  270 => 220,  266 => 219,  257 => 213,  250 => 209,  81 => 43,  74 => 39,  59 => 27,  54 => 25,  42 => 16,  32 => 9,  25 => 5,  19 => 1,);
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
/*         {{include("layout/elements/menu.twig")}}*/
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
/*                                         .NET Frameworks /C#*/
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
/*                 <div class="pane" v-if="projects.data.length">*/
/* */
/*                     <div id="project-list">*/
/* */
/*                         <div class="project_counter">*/
/*                             <p class="current-count">${ (projects.currentIndex < 9) ? '0'+ (projects.currentIndex + 1) : projects.currentIndex }</p>*/
/*                             <small>/ ${projects.data.length}</small>*/
/* */
/*                         </div>*/
/*                         <div class="title">*/
/*                             /${projects.currentProject.title}*/
/*                         </div>*/
/*                         <div class="project-details col-md-12 col-lg-12 col-xs-12 col-sm-12">*/
/*                             <h4>${projects.currentProject.title}</h4>*/
/*                             <p class="project_description">${projects.currentProject.headline}</p>*/
/*                             <br>*/
/*                             <a :href="projects.currentProject.blog_href" target="_blank" class="btn btn-outline-primary">View More</a>*/
/*                             <br><br><br>*/
/*                             <div class="meta-info">*/
/*                                 <h5>/Meta</h5>*/
/*                                 <p>*/
/*                                     <span class="label-meta">Platform</span>: [ ${projects.currentProject.platforms} ]</p>*/
/*                                 <p>*/
/*                                     <span class="label-meta">Stacks Used</span>: [ ${projects.currentProject.stackUsed}]</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="project-image-viewer">*/
/*                         <div class="image-holder">*/
/*                             <img :alt="projects.currentProject.title" :src = "projects.currentProject.images">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <div class="project-controls">*/
/*                         <div class="col-lg-3 col-md-3 pull-left">*/
/*                             <a v-on:click="prev($event)" href="#">/Previous</a>*/
/*                         </div>*/
/*                         <div class="col-lg-3 col-md-3 pull-right">*/
/*                             <a v-on:click="next($event)" href="#">/Next</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/*             <section class="row full-view" id="concept-page-ui">*/
/*                 <div class="col-lg-12 col-xs-12 col-sm-12">*/
/*                     <div class="title">*/
/*                         <h2>Project Labs</h2>*/
/*                         <h4>Experimental Projects and /localhost codes, these are codes for Research purposes or tinkering with concepts</h4>*/
/*                     </div>*/
/*                     <div class="content col-lg-8 col-md-8 col-xs-12 col-sm-12 nopadding">*/
/*                     <br>*/
/*                         <p>{{labNote.summary}}</p>*/
/* */
/*                     </div>*/
/*                     <div class="user_logo col-lg-3 col-md-3 pull-right">*/
/*                         <img src="{{config.urls.templates }}assets/images/code.svg" alt="">*/
/*                     </div>*/
/*                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">*/
/*                         <div class="col-md-4 col-lg-4 nopadding skillsets">*/
/*                             <h4>Lab Projects</h4>*/
/*                             <ul>*/
/*                                 {% for projects in labProjects %}*/
/*                                 <li>*/
/*                                     <span class="black-text">{{projects.title}}</span>*/
/*                                     /{{projects.summary}}</li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*      */
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
