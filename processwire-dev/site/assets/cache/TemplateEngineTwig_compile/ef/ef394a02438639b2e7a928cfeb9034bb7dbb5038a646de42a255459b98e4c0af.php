<?php

/* notes.twig */
class __TwigTemplate_fbd66f8a2110bb5225754b16a50a055d00f0e335e4a1ab74b29f10ff60f4d1f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/ui-base.twig", "notes.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"row full-view\" id=\"concept-page-ui\">
        <div class=\"col-lg-12 col-xs-12 col-sm-12\">
            <div class=\"title\">
                <h2>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>

            </div>
            <div class=\"content col-lg-5 col-md-5 col-xs-12 col-sm-12 nopadding\">
                A lot of these articles are my opinions and take on certain technologies, topics in Software Development and anything remotely related to Tech, not excluding topics outside Programming.

            </div>
            <div class=\"clear\"></div>
            <br><br>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding\">
                <div class=\"col-md-2 col-lg-2 nopadding skillsets\">
                    <h4>Categories</h4>
                    <ul>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "                            <li>
                                <a href=\"";
            // line 22
            echo $this->getAttribute($context["category"], "url", array());
            echo "\">
                                    <span class=\"black-text\">
                                        /";
            // line 24
            echo $this->getAttribute($context["category"], "title", array());
            echo "
                                    </span>


                                </a>

                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

                    </ul>
                </div>
                <div class=\"col-md-9 col-lg-9 nopadding skillsets\">
                    <h4>Notes</h4>
                    <ul>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "                            <li>
                                <a href=\"";
            // line 41
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">
                                    <span>";
            // line 42
            echo $this->getAttribute($context["post"], "title", array());
            echo "
                                    </span>
                                    <span class=\"time\">/";
            // line 44
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
        // line 49
        echo "
                        </ul>
                    </div>


                </div>
                <div class=\"pagination\">
                    ";
        // line 56
        echo $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "renderPager", array(), "method");
        echo "
                </div>
            </div>
            <div class=\"footer-design\"></div>
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "notes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  114 => 49,  103 => 44,  98 => 42,  94 => 41,  91 => 40,  87 => 39,  78 => 32,  64 => 24,  59 => 22,  56 => 21,  52 => 20,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout/ui-base.twig' %}*/
/* */
/* {% block content %}*/
/*     <section class="row full-view" id="concept-page-ui">*/
/*         <div class="col-lg-12 col-xs-12 col-sm-12">*/
/*             <div class="title">*/
/*                 <h2>{{page.title}}</h2>*/
/* */
/*             </div>*/
/*             <div class="content col-lg-5 col-md-5 col-xs-12 col-sm-12 nopadding">*/
/*                 A lot of these articles are my opinions and take on certain technologies, topics in Software Development and anything remotely related to Tech, not excluding topics outside Programming.*/
/* */
/*             </div>*/
/*             <div class="clear"></div>*/
/*             <br><br>*/
/*             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">*/
/*                 <div class="col-md-2 col-lg-2 nopadding skillsets">*/
/*                     <h4>Categories</h4>*/
/*                     <ul>*/
/*                         {% for category in categories %}*/
/*                             <li>*/
/*                                 <a href="{{category.url}}">*/
/*                                     <span class="black-text">*/
/*                                         /{{category.title}}*/
/*                                     </span>*/
/* */
/* */
/*                                 </a>*/
/* */
/*                             </li>*/
/*                         {% endfor %}*/
/* */
/* */
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-9 col-lg-9 nopadding skillsets">*/
/*                     <h4>Notes</h4>*/
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
/*                 <div class="pagination">*/
/*                     {{posts.renderPager()}}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="footer-design"></div>*/
/*         </section>*/
/*     {% endblock %}*/
/* */
