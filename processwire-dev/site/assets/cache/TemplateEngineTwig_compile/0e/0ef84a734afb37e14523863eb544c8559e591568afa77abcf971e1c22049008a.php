<?php

/* layout/elements/menu.twig */
class __TwigTemplate_1983a4d94ecd8ddf465ab1ded161ce60dffe158cc20b84e53308e8ff06cd3d36 extends Twig_Template
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
        echo "  <header class=\"nav-menu\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 4
        echo $this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "url", array());
        echo "\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 7
        echo $this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "url", array());
        echo "#about-page-ui\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#project-page\">Projects</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "get", array(0 => "/articles"), "method"), "url", array());
        echo "\">Articles</a>
                </li>
    
            </ul>
        </header>";
    }

    public function getTemplateName()
    {
        return "layout/elements/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/*   <header class="nav-menu">*/
/*             <ul class="nav">*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="{{homepage.url}}">Home</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="{{homepage.url}}#about-page-ui">About</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#project-page">Projects</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="{{pages.get('/articles').url}}">Articles</a>*/
/*                 </li>*/
/*     */
/*             </ul>*/
/*         </header>*/
