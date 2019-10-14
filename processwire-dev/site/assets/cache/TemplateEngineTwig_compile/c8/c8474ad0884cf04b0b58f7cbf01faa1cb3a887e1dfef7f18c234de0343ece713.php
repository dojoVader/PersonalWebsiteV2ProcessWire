<?php

/* layout/ui.twig */
class __TwigTemplate_8395a97aed3a4ce73fbc48e9c2a13f1cade112bfcdbe30ce5febdecc6d071733 extends Twig_Template
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
            <nav class=\"navbar\">
                <ul class=\"navbar-nav\">
                    <li><a href=\"#homepage-ui\">Home</a></li>
                    <li><a href=\"#about-page-ui\">About</a></li>
                    <li><a href=\"#projects-page-ui\">Projects</a></li>
                </ul>

            </nav>
        </header>

        <div class=\"container-fluid nopadding\" id=\"main-page\">


            <section class=\"row full-view\" id=\"homepage-ui\">
                <header class=\"col-md-2 col-sm-2 col-lg-2 col-xs-12\" id=\"page-header\">
                    <div class=\"logo\">
                        <a class=\"logo_link\" href=\"\">
                            <img src=\"";
        // line 27
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
        // line 36
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
        echo "</h3>
                    <div class=\"about-me col-md-12 col-lg-12 col-xs-12 nopadding\">
                        ";
        // line 38
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
        // line 50
        echo $this->getAttribute((isset($context["aboutNode"]) ? $context["aboutNode"] : null), "body", array());
        echo "</p>

                    </div>
                    <div class=\"user_logo col-lg-3 col-md-3 pull-right\">
                        <img src=\"";
        // line 54
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
                                    <span class=\"black-text\">Others </span> /JS Frameworks
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
                                        .NET Frameworks
                                    </span>
                                </li>
                                <li>
                                    <span class=\"black-text\">NativeScript</span>
                                </li>
                                <li>
                                    <span class=\"black-text\">React Native</span>
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
        // line 175
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "

            </div>
        </footer>
    </body>
    <script src=\"";
        // line 180
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
        return array (  221 => 180,  213 => 175,  89 => 54,  82 => 50,  67 => 38,  62 => 36,  50 => 27,  25 => 5,  19 => 1,);
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
/*             <nav class="navbar">*/
/*                 <ul class="navbar-nav">*/
/*                     <li><a href="#homepage-ui">Home</a></li>*/
/*                     <li><a href="#about-page-ui">About</a></li>*/
/*                     <li><a href="#projects-page-ui">Projects</a></li>*/
/*                 </ul>*/
/* */
/*             </nav>*/
/*         </header>*/
/* */
/*         <div class="container-fluid nopadding" id="main-page">*/
/* */
/* */
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
/*                                     <span class="black-text">Others </span> /JS Frameworks*/
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
/*                                         .NET Frameworks*/
/*                                     </span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">NativeScript</span>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <span class="black-text">React Native</span>*/
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
/* */
/*         </div>*/
/*         <footer>*/
/*             <div class="header-container headroom headroom--not-top headroom--pinned" id="header-container">*/
/* */
/*                 {{include("layout/elements/footer.twig")}}*/
/* */
/*             </div>*/
/*         </footer>*/
/*     </body>*/
/*     <script src="{{config.urls.templates}}/scripts/run.js"></script>*/
/* */
/* </html>*/
/* */
