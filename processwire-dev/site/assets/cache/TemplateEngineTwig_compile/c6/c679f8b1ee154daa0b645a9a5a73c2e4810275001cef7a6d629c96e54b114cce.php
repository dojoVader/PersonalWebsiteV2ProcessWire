<?php

/* basic-page.twig */
class __TwigTemplate_078b1c5191df0dd81890f5d4f319a6531662d6d75205de4ab18770aa91929348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/ui-base.twig", "basic-page.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/ui-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container blog-container\">
    <section class=\"blog\">
        <header class=\"blog-header\">
            <h1>
                ";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "
            </h1>
            <h5 class=\"blog_date\">
                ";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "published", array()), "F d, Y");
        echo " 
            </h5>
            <br>
            </br>
        </header>
        <div class=\"blog_content\">
            <hr class=\"small\" />
             ";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array());
        echo "
             <hr class=\"small\" />

        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "basic-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  43 => 10,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/ui-base.twig' %}*/
/* {% block content %}*/
/* <div class="container blog-container">*/
/*     <section class="blog">*/
/*         <header class="blog-header">*/
/*             <h1>*/
/*                 {{page.title}}*/
/*             </h1>*/
/*             <h5 class="blog_date">*/
/*                 {{page.published|date("F d, Y")}} */
/*             </h5>*/
/*             <br>*/
/*             </br>*/
/*         </header>*/
/*         <div class="blog_content">*/
/*             <hr class="small" />*/
/*              {{page.body}}*/
/*              <hr class="small" />*/
/* */
/*         </div>*/
/*     </section>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
