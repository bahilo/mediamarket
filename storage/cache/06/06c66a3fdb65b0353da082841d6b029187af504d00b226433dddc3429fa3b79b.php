<?php

/* OPC170_02/template/extension/module/tt_blog.twig */
class __TwigTemplate_91bf3ea35787c660bc2b0f9d03b6913bf2fcef36733b2e376cb3d2c8f3e29a1a extends Twig_Template
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
        echo "<div id=\"blog_latest_new_home\">
<div class=\"box-heading title_block\"><h3><a class=\"ttblock-heading\" href=\"";
        // line 2
        echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
        echo "\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</a></h3></div>
<div class=\"customNavigation\">
\t<a class=\"btn prev ttblog_prev\"></a>
\t<a class=\"btn next ttblog_next\"></a>
</div>
<div class=\"block_content\">
<div class=\"row\">
<ul id=\"ttsmartblog-carousel\" class=\"tt-carousel ttblog-content owl-carousel owl-theme\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "  \t<li>
\t<div class=\"blog-content\">
\t\t";
            // line 13
            if ($this->getAttribute($context["blog"], "image", array())) {
                // line 14
                echo "\t\t<div class=\"ttblog_image_holder blog_image_holder col-xs-12 col-sm-12\">
\t\t\t<a href=\"";
                // line 15
                echo $this->getAttribute($context["blog"], "href", array());
                echo "\">
\t\t\t<img class=\"image_thumb\" src=\"";
                // line 16
                echo $this->getAttribute($context["blog"], "image_thumb", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" />
\t\t\t<div class=\"blog-hover\"></div>
\t\t\t</a>
\t\t\t<span class=\"bloglinks\">
\t\t\t\t<a class=\"icon zoom\" data-lightbox=\"example-set\" href=\"";
                // line 20
                echo $this->getAttribute($context["blog"], "image", array());
                echo "\" title=\"Click to view Full Image\">
\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</a> 
\t\t\t</span>
\t\t</div>
\t\t";
            }
            // line 26
            echo "\t\t
\t\t<div class=\"blog-caption blog-sub-content col-xs-12 col-sm-12\">
\t\t\t<h5 class=\"post_title\"><a href=\"";
            // line 28
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["blog"], "title", array());
            echo "</a></h5>
\t\t\t<span class=\"blog-date\">
\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t<span class=\"date\">";
            // line 31
            echo twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "date_added", array()), "j");
            echo "</span>
\t\t\t\t<span class=\"month\">";
            // line 32
            echo twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "date_added", array()), "M-Y");
            echo "</span>
\t\t\t</span>
\t\t\t<p class=\"blog-description\">";
            // line 34
            echo $this->getAttribute($context["blog"], "description", array());
            echo "</p>
\t\t\t\t<a href=\"";
            // line 35
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\" class=\"read-more\">";
            echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
            echo "</a>
\t\t\t\t<div class=\"comment\"> <a href=\"";
            // line 36
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\"> <i class=\"fa fa-comments-o\"></i> ";
            echo $this->getAttribute($context["blog"], "total_comments", array());
            echo "</a> </div>
\t\t</div>
\t</div>
\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t
</ul>
\t\t";
        // line 45
        echo "</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/tt_blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  116 => 40,  103 => 36,  97 => 35,  93 => 34,  88 => 32,  84 => 31,  76 => 28,  72 => 26,  63 => 20,  52 => 16,  48 => 15,  45 => 14,  43 => 13,  39 => 11,  35 => 10,  22 => 2,  19 => 1,);
    }
}
/* <div id="blog_latest_new_home">*/
/* <div class="box-heading title_block"><h3><a class="ttblock-heading" href="{{ all_blogs }}">{{ heading_title }}</a></h3></div>*/
/* <div class="customNavigation">*/
/* 	<a class="btn prev ttblog_prev"></a>*/
/* 	<a class="btn next ttblog_next"></a>*/
/* </div>*/
/* <div class="block_content">*/
/* <div class="row">*/
/* <ul id="ttsmartblog-carousel" class="tt-carousel ttblog-content owl-carousel owl-theme">*/
/*   {% for blog in blogs %}*/
/*   	<li>*/
/* 	<div class="blog-content">*/
/* 		{% if blog.image %}*/
/* 		<div class="ttblog_image_holder blog_image_holder col-xs-12 col-sm-12">*/
/* 			<a href="{{ blog.href }}">*/
/* 			<img class="image_thumb" src="{{ blog.image_thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" />*/
/* 			<div class="blog-hover"></div>*/
/* 			</a>*/
/* 			<span class="bloglinks">*/
/* 				<a class="icon zoom" data-lightbox="example-set" href="{{ blog.image }}" title="Click to view Full Image">*/
/* 				<i class="fa fa-search"></i>*/
/* 				</a> */
/* 			</span>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		<div class="blog-caption blog-sub-content col-xs-12 col-sm-12">*/
/* 			<h5 class="post_title"><a href="{{ blog.href }}">{{ blog.title }}</a></h5>*/
/* 			<span class="blog-date">*/
/* 				<i class="fa fa-calendar"></i>*/
/* 				<span class="date">{{ blog.date_added|date('j') }}</span>*/
/* 				<span class="month">{{ blog.date_added|date('M-Y') }}</span>*/
/* 			</span>*/
/* 			<p class="blog-description">{{ blog.description }}</p>*/
/* 				<a href="{{ blog.href }}" class="read-more">{{ text_read_more }}</a>*/
/* 				<div class="comment"> <a href="{{ blog.href }}"> <i class="fa fa-comments-o"></i> {{ blog.total_comments }}</a> </div>*/
/* 		</div>*/
/* 	</div>*/
/* 	</li>*/
/* {% endfor %}	*/
/* </ul>*/
/* 		{# <div class="btn-view-all">*/
/* 		<button type="button" onclick="location='<?php echo $all_blogs; ?>';" class="btn btn-primary"><?php echo $button_all_blogs; ?></button>*/
/* 		</div> #}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
