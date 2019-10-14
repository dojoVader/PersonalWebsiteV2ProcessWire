<?php

/* blog-category.twig */
class __TwigTemplate_91e170eca297aa3d297babe5b0c0633c93dd510f76acb7804560b7c4fd7a14f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/ui-base.twig", "blog-category.twig", 1);
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
        echo "    <section class=\"row full-view\" id=\"concept-page-ui\">
        <div class=\"col-lg-12 col-xs-12 col-sm-12\">
            <div class=\"title\">
                <h2>Category:/";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>

            </div>
            <div class=\"clear\"></div>
            <br><br>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-9 col-lg-9 nopadding skillsets\">
                    <h4>Notes</h4>
                    ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)) <= 0)) {
            // line 15
            echo "                        <h2>There are no notes for this category:  /";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h2>
                    ";
        }
        // line 17
        echo "                    <ul>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "                            <li>
                                <a href=\"";
            // line 20
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">
                                    <span>";
            // line 21
            echo $this->getAttribute($context["post"], "title", array());
            echo "
                                    </span>
                                    <span class=\"time\">/";
            // line 23
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "created", array()), "F d, Y");
            echo "</span>
                                </a>
                            </li>
                            <li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                        </ul>
                    </div>


                </div>
            </div>
            <div class=\"footer-design\"></div>
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "blog-category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  74 => 23,  69 => 21,  65 => 20,  62 => 19,  58 => 18,  55 => 17,  49 => 15,  47 => 14,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/ui-base.twig' %}*/
/* {% block content %}*/
/*     <section class="row full-view" id="concept-page-ui">*/
/*         <div class="col-lg-12 col-xs-12 col-sm-12">*/
/*             <div class="title">*/
/*                 <h2>Category:/{{page.title}}</h2>*/
/* */
/*             </div>*/
/*             <div class="clear"></div>*/
/*             <br><br>*/
/*             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">*/
/*                 <div class="col-md-9 col-lg-9 nopadding skillsets">*/
/*                     <h4>Notes</h4>*/
/*                     {% if posts|length <= 0 %}*/
/*                         <h2>There are no notes for this category:  /{{ page.title}}</h2>*/
/*                     {% endif %}*/
/*                     <ul>*/
/*                         {% for post in posts %}*/
/*                             <li>*/
/*                                 <a href="{{post.url}}">*/
/*                                     <span>{{post.title}}*/
/*                                     </span>*/
/*                                     <span class="time">/{{ category.created|date("F d, Y") }}</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                             {% endfor %}*/
/* */
/*                         </ul>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="footer-design"></div>*/
/*         </section>*/
/*     {% endblock %}*/
/* */
