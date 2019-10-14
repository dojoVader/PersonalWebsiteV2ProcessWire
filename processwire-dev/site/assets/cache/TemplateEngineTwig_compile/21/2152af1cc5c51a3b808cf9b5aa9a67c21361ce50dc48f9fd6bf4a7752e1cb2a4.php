<?php

/* layout/elements/header.twig */
class __TwigTemplate_d80dfa7e52e49d6bdc92fd4680c2890c35ffd4e58c7ef373eb2dc243f01102ab extends Twig_Template
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
        echo "<meta charset=\"utf-8\"/>
<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\"/>
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
<title>
    ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "
</title>
<link href=\" ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\"/>
<link href=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/css/main.css\" rel=\"stylesheet\"/>
<link rel='stylesheet' type='text/css' href='";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "FieldtypeComments", array());
        echo "comments.css'/>
<script src=\"";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/js/vendors/jquery-1.11.3.min.js\"></script>
<script src=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "templates", array());
        echo "assets/js/vendors/bootstrap.min.js\"></script>
<script src=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "urls", array()), "FieldtypeComments", array());
        echo "comments.js\"></script>

";
        // line 15
        echo "<script src=\"//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout/elements/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <meta charset="utf-8"/>*/
/* <meta content="IE=edge" http-equiv="X-UA-Compatible"/>*/
/* <meta content="width=device-width, initial-scale=1" name="viewport"/>*/
/* <title>*/
/*     {{ page.title }}*/
/* </title>*/
/* <link href=" {{config.urls.templates }}assets/css/bootstrap.min.css" rel="stylesheet"/>*/
/* <link href="{{config.urls.templates }}assets/css/main.css" rel="stylesheet"/>*/
/* <link rel='stylesheet' type='text/css' href='{{config.urls.FieldtypeComments}}comments.css'/>*/
/* <script src="{{config.urls.templates }}assets/js/vendors/jquery-1.11.3.min.js"></script>*/
/* <script src="{{config.urls.templates }}assets/js/vendors/bootstrap.min.js"></script>*/
/* <script src="{{config.urls.FieldtypeComments}}comments.js"></script>*/
/* */
/* {# Added ScrollMagic Templates #}*/
/* <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>*/
/* <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>*/
/* */
