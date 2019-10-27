<?php

/* OPC170_02/template/extension/module/tt_mega_category.twig */
class __TwigTemplate_e7e465060bf6ea011f1c23fca5986c8a16ee1dd6dac69cd69f62aa041d20b1de extends Twig_Template
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
        echo "<div class=\"main-category-list left-main-menu col-sm-3\">
<div class=\"cat-menu\">
<div class=\"TT-panel-heading\">
\t<span>";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</span>
</div>
<div class=\"menu-category\">
<ul class=\"dropmenu\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) > 0)) {
                // line 10
                echo "\t\t\t<li class=\"TT-Sub-List dropdown\">
\t\t\t\t<a href=\"";
                // line 11
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"TT-Category-List\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
\t\t\t\t<span class=\"active_menu\"></span>
\t\t   ";
            } else {
                // line 14
                echo "\t\t   <li>
\t\t\t<a href=\"";
                // line 15
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
\t\t";
            }
            // line 17
            echo "\t\t
\t    ";
            // line 18
            $context["i"] = 0;
            // line 19
            echo "\t\t";
            $context["limit"] = 1;
            // line 20
            echo "\t\t";
            // line 21
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["limit"]) ? $context["limit"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "\t\t\t
\t\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t";
                // line 25
                if (($this->getAttribute($context["category"], "column", array()) <= 1)) {
                    // line 26
                    echo "\t\t\t\t\t<ul class=\"list-unstyled childs_1 single-dropdown-menu\">
\t\t\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t \t<ul class=\"list-unstyled childs_1 mega-dropdown-menu columns-";
                    echo $this->getAttribute($context["category"], "column", array());
                    echo "\" style=\"width: ";
                    echo ((200 * $this->getAttribute($context["category"], "column", array())) . "px;");
                    echo "\">
\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t";
                $context["j"] = ($context["i"] + (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil")));
                // line 31
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 32
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute($context["category"], "children", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                        // line 33
                        echo "\t\t\t\t\t\t";
                        if (($this->getAttribute($context["category"], "column", array()) <= 1)) {
                            // line 34
                            echo "\t\t\t\t\t\t\t<li class=\"dropdown\" style=\"width: 100%;\">
\t\t\t\t\t\t";
                        } else {
                            // line 36
                            echo "\t\t\t\t\t\t\t\t";
                            $context["cols"] = $this->getAttribute($context["category"], "column", array());
                            // line 37
                            echo "\t\t\t\t\t\t\t\t";
                            if ((0 == (isset($context["cols"]) ? $context["cols"] : null) % 3)) {
                                // line 38
                                echo "\t\t\t\t\t\t\t\t\t<li class=\"dropdown\" style=\"width: ";
                                echo ((100 / $this->getAttribute($context["category"], "column", array())) . "%;");
                                echo "\">
\t\t\t\t\t\t\t\t";
                            }
                            // line 39
                            echo " ";
                            // line 40
                            echo "
\t\t\t\t\t\t\t<li class=\"dropdown first\" style=\"width: ";
                            // line 41
                            echo ((100 / $this->getAttribute($context["category"], "column", array())) . "%;");
                            echo "\">
\t\t\t\t\t\t";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "children_level2", array(), "array")) > 0)) {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "href", array(), "array");
                            echo "\" class=\"single-dropdown\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "name", array(), "array");
                            echo "</a> \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 45
                            echo "\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 46
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "href", array(), "array");
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "name", array(), "array");
                            echo "</a>\t\t
\t\t\t\t\t\t\t\t";
                        }
                        // line 48
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                        // line 49
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "children_level2", array(), "array")) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t\t\t";
                            // line 53
                            $context["wi"] = 0;
                            // line 54
                            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 55
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range($context["wi"], twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "children_level2", array(), "array"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["wi"]) {
                                // line 56
                                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "children_level2", array(), "array"), $context["wi"], array(), "array"), "href", array(), "array");
                                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 57
                                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "children", array()), $context["i"], array(), "array"), "children_level2", array(), "array"), $context["wi"], array(), "array"), "name", array(), "array");
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wi'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 59
                            echo "\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 63
                        echo "\t
\t\t\t\t\t       </li>
\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t\t\t</ul>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t</li>
\t\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t";
        if (((isset($context["blog_enable"]) ? $context["blog_enable"] : null) == true)) {
            // line 76
            echo "\t\t\t\t\t<li> <a href=\"";
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\">
\t\t\t\t\t<span data-hover=\"";
            // line 77
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</span>
\t\t\t\t\t</a></li>       
\t\t\t\t";
        }
        // line 80
        echo "</ul>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/tt_mega_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 80,  231 => 77,  226 => 76,  223 => 75,  215 => 72,  205 => 67,  199 => 66,  194 => 63,  187 => 59,  178 => 57,  173 => 56,  169 => 55,  166 => 54,  164 => 53,  159 => 50,  157 => 49,  154 => 48,  147 => 46,  144 => 45,  136 => 44,  133 => 43,  128 => 41,  125 => 40,  123 => 39,  117 => 38,  114 => 37,  111 => 36,  107 => 34,  104 => 33,  101 => 32,  96 => 31,  93 => 30,  85 => 28,  81 => 26,  79 => 25,  74 => 22,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  52 => 15,  49 => 14,  41 => 11,  38 => 10,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="main-category-list left-main-menu col-sm-3">*/
/* <div class="cat-menu">*/
/* <div class="TT-panel-heading">*/
/* 	<span>{{ heading_title }}</span>*/
/* </div>*/
/* <div class="menu-category">*/
/* <ul class="dropmenu">*/
/* 	{% for category in categories %}*/
/* 		{% if category.children|length > 0 %}*/
/* 			<li class="TT-Sub-List dropdown">*/
/* 				<a href="{{ category.href }}" class="TT-Category-List">{{ category.name }}</a>*/
/* 				<span class="active_menu"></span>*/
/* 		   {% else %}*/
/* 		   <li>*/
/* 			<a href="{{ category.href }}">{{ category.name }}</a>*/
/* 		{% endif %}*/
/* 		*/
/* 	    {% set i = 0 %}*/
/* 		{% set limit = 1 %}*/
/* 		{# for i  in i..category.children|length #}*/
/* 		{% for i in range(0, limit-1) %}*/
/* 			*/
/* 			<div class="dropdown-menu">*/
/* 			<div class="dropdown-inner">*/
/* 				{% if category.column <= 1 %}*/
/* 					<ul class="list-unstyled childs_1 single-dropdown-menu">*/
/* 					{% else %}*/
/* 				 	<ul class="list-unstyled childs_1 mega-dropdown-menu columns-{{ category.column }}" style="width: {{ 200*category.column~'px;' }}">*/
/* 				{% endif %}*/
/* 				{% set j = i + category.children|length / category.column|round(1, 'ceil') %}*/
/* 				{% for i in i..category.children|length %}*/
/* 					{% if category.children[i] is defined %}*/
/* 						{% if category.column <=1 %}*/
/* 							<li class="dropdown" style="width: 100%;">*/
/* 						{% else %}*/
/* 								{% set cols= category.column %}*/
/* 								{% if cols is divisible by(3) %}*/
/* 									<li class="dropdown" style="width: {{ 100/category.column~'%;' }}">*/
/* 								{% endif %} {# if over.. #}*/
/* */
/* 							<li class="dropdown first" style="width: {{ 100/category.column~'%;' }}">*/
/* 						{% endif %}*/
/* 								{% if category.children[i]['children_level2']|length > 0 %}*/
/* 									<a href="{{ category.children[i]['href'] }}" class="single-dropdown">{{ category.children[i]['name'] }}</a> 									*/
/* 									{% else %}				*/
/* 									<a href="{{ category.children[i]['href'] }}">{{ category.children[i]['name'] }}</a>		*/
/* 								{% endif %}*/
/* 						*/
/* 								{% if category.children[i]['children_level2'] %}*/
/* 									<div class="dropdown-menu">*/
/* 									<div class="dropdown-inner">*/
/* 									<ul class="list-unstyled childs_2">*/
/* 									{% set wi = 0 %}*/
/* 									*/
/* 									{% for wi in wi..category.children[i]['children_level2']|length %}*/
/* 										<li><a href="{{ category.children[i]['children_level2'][wi]['href'] }}">*/
/* 										{{ category.children[i]['children_level2'][wi]['name'] }}</a>*/
/* 										</li>*/
/* 									{% endfor %}		*/
/* 									</ul>*/
/* 									</div>*/
/* 									</div>*/
/* 								{% endif %}	*/
/* 					       </li>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* 			</div>*/
/* 			</div>*/
/* 			*/
/* 		{% endfor %}*/
/* 		</li>*/
/* 		*/
/* {% endfor %}*/
/* 				{% if blog_enable == true %}*/
/* 					<li> <a href="{{ all_blogs }}">*/
/* 					<span data-hover="{{ text_blog }}">{{ text_blog }}</span>*/
/* 					</a></li>       */
/* 				{% endif %}*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* </div>*/
