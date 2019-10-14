<?php

/* layout/ui-base.twig */
class __TwigTemplate_612e098482b378e0a307fae4d13f05b641fbb85228a42740cd7d4490b43a2927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    <body
        id=\"newui\">
        ";
        // line 11
        echo "        ";
        echo twig_include($this->env, $context, "layout/elements/menu.twig");
        echo "

        <div class=\"container-fluid nopadding\" id=\"main-page\"> ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "            </div>
            <footer>
                <div class=\"header-container headroom headroom--not-top headroom--pinned\" id=\"header-container\">
                    ";
        // line 17
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "
                </div>
            </footer>
        </body>
        <script src=\"";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "/scripts/blog.js\"></script>
    </html>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/ui-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  54 => 21,  47 => 17,  42 => 14,  40 => 13,  34 => 11,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         {{include("layout/elements/header.twig")}}*/
/*     </head>*/
/* */
/*     <body*/
/*         id="newui">*/
/*         {# Include the Menu for the page #}*/
/*         {{include("layout/elements/menu.twig")}}*/
/* */
/*         <div class="container-fluid nopadding" id="main-page"> {% block content %}{% endblock %}*/
/*             </div>*/
/*             <footer>*/
/*                 <div class="header-container headroom headroom--not-top headroom--pinned" id="header-container">*/
/*                     {{include("layout/elements/footer.twig")}}*/
/*                 </div>*/
/*             </footer>*/
/*         </body>*/
/*         <script src="{{config.urls.templates}}/scripts/blog.js"></script>*/
/*     </html>*/
/* */
