<?php

/* blog-post.twig */
class __TwigTemplate_9bf7db711ed79715543fcf24f1783dddfd8ffde46cb63a13f864acfe950683a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/ui-base.twig", "blog-post.twig", 1);
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
        echo "
    <section id=\"blog-post-ui\" class=\"row full-view\">

        <div class=\"blog-content\">
            <div class=\"blog_title\">
                <h1>";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                <p>
                    <span class=\"time\">/";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "created", array()), "F d, Y");
        echo "</span> 
                    <span class=\"author\">/";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "createdUser", array()), "name", array());
        echo "</span> 
                </p>
            </div>

            ";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_body", array());
        echo "
            <div class=\"comment-section\">
                ";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_comments", array()), "renderForm", array(), "method");
        echo "
                ";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_comments", array()), "render", array(), "method");
        echo "
            </div>
        </div>
        <div class=\"blog-ui-interactive-board\">
            ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_images", array(), "any", true, true)) {
            // line 23
            echo "                <img src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_images", array()), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blog_images", array()), "basename", array());
            echo "\">
            ";
        }
        // line 25
        echo "        </div>
    </section>
  
";
    }

    public function getTemplateName()
    {
        return "blog-post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 23,  70 => 22,  63 => 18,  59 => 17,  54 => 15,  47 => 11,  43 => 10,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/ui-base.twig' %}*/
/* {% block content %}*/
/* */
/*     <section id="blog-post-ui" class="row full-view">*/
/* */
/*         <div class="blog-content">*/
/*             <div class="blog_title">*/
/*                 <h1>{{page.title}}</h1>*/
/*                 <p>*/
/*                     <span class="time">/{{ category.created|date("F d, Y") }}</span> */
/*                     <span class="author">/{{page.createdUser.name}}</span> */
/*                 </p>*/
/*             </div>*/
/* */
/*             {{ page.blog_body}}*/
/*             <div class="comment-section">*/
/*                 {{ page.blog_comments.renderForm() }}*/
/*                 {{ page.blog_comments.render() }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="blog-ui-interactive-board">*/
/*             {% if page.blog_images is defined %}*/
/*                 <img src="{{page.blog_images.url}}" alt="{{ page.blog_images.basename }}">*/
/*             {% endif %}*/
/*         </div>*/
/*     </section>*/
/*   */
/* {% endblock %}*/
/* */
