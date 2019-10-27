<?php

/* OPC170_02/template/extension/module/filter.twig */
class __TwigTemplate_e6f74464bc6adf1e43bfb7dab6f8ac4ab2647020c8b7453bc1a84911188d7985 extends Twig_Template
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
        echo "<div class=\"panel panel-default option-filter\">
  <div class=\"panel-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"list-group option-filter-box\">
  \t\t<div class=\"list-group\"> 
  \t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 6
            echo "\t\t\t<div class=\"list-group-items\">
\t\t\t\t<a class=\"list-group-item\">";
            // line 7
            echo $this->getAttribute($context["filter_group"], "name", array());
            echo "</a>
\t\t\t\t<div class=\"list-group-item\">
\t\t\t  \t<div id=\"filter-group";
            // line 9
            echo $this->getAttribute($context["filter_group"], "filter_group_id", array());
            echo "\">
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 11
                echo "\t\t\t\t<div class=\"checkbox\">
\t\t\t\t  <label>
\t\t\t\t\t";
                // line 13
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 14
                    echo "\t\t\t\t\t<input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo $this->getAttribute($context["filter"], "filter_id", array());
                    echo "\" checked=\"checked\" />
\t\t\t\t\t";
                    // line 15
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "
\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t<input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo $this->getAttribute($context["filter"], "filter_id", array());
                    echo "\" />
\t\t\t\t\t";
                    // line 18
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "
\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t  </label>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t  \t</div>
\t\t\t</div>
\t\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</div>
  <div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 29
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
\t\t\t\t\$('#button-filter').on('click', function() {
\t\t\t\t\tfilter = [];
\t\t\t\t\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\t\t\t\t\tfilter.push(this.value);
\t\t\t\t\t});
\t\t\t\t\thref = '";
        // line 39
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "&filter=' + filter.join(',');
\t\t\t\t\tdiv = ' #content';
\t\t\t\t\tload_href = href + div;
\t\t\t\t\t\$(div).load(load_href, function() {
\t\t\t\t\t\t\$(this).children(':first').unwrap();

\t// Product List
\t\$('#list-view').click(function() {
\t\t\$('#content .product-grid > .clearfix').remove();

\t\t\$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
\t\t\$('#content .row > .product-list .product-thumb .image').attr('class', 'image col-xs-5 col-sm-5 col-md-3');
\t\t\$('#content .row > .product-list .product-thumb .thumb-description').attr('class', 'thumb-description col-xs-7 col-sm-7 col-md-9');

\t\tlocalStorage.setItem('display', 'list');
\t});

\t// Product Grid
\t\$('#grid-view').click(function() {
\t\t// What a shame bootstrap does not take into account dynamically loaded columns
\t\tvar cols = \$('#column-right, #column-left').length;

\t\tif (cols == 2) {
\t\t\t\$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
\t\t} else if (cols == 1) {
\t\t\t\$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12');
\t\t} else {
\t\t\t\$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12');
\t\t}
\t\t\$('#content .row > .product-grid .product-thumb .image').attr('class', 'image col-xs-12');
\t\t\$('#content .row > .product-grid .product-thumb .thumb-description').attr('class', 'thumb-description col-xs-12');

\t\tlocalStorage.setItem('display', 'grid');
\t});

\t\t\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t\t\t\t\$('#list-view').addClass('active');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t\t\t\t\$('#grid-view').addClass('active');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tsetLocation(href);
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\tfunction setLocation(curLoc){
\t\t\t\t\ttry {
\t\t\t\t\t  history.pushState(null, null, curLoc);
\t\t\t\t\t  return;
\t\t\t\t\t} catch(e) {}
\t\t\t\t\tlocation.hash = '#' + curLoc;
\t\t\t\t}
\t\t\t\t//--></script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  95 => 29,  91 => 27,  82 => 23,  74 => 20,  69 => 18,  64 => 17,  59 => 15,  54 => 14,  52 => 13,  48 => 11,  44 => 10,  40 => 9,  35 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default option-filter">*/
/*   <div class="panel-heading">{{ heading_title }}</div>*/
/*   <div class="list-group option-filter-box">*/
/*   		<div class="list-group"> */
/*   			{% for filter_group in filter_groups %}*/
/* 			<div class="list-group-items">*/
/* 				<a class="list-group-item">{{ filter_group.name }}</a>*/
/* 				<div class="list-group-item">*/
/* 			  	<div id="filter-group{{ filter_group.filter_group_id }}">*/
/* 				{% for filter in filter_group.filter %}*/
/* 				<div class="checkbox">*/
/* 				  <label>*/
/* 					{% if filter.filter_id in filter_category %}*/
/* 					<input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" checked="checked" />*/
/* 					{{ filter.name }}*/
/* 					{% else %}*/
/* 					<input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" />*/
/* 					{{ filter.name }}*/
/* 					{% endif %}*/
/* 				  </label>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 		  	</div>*/
/* 			</div>*/
/* 		</div>*/
/*     {% endfor %}*/
/* 	</div>*/
/*   <div class="panel-footer text-right">*/
/*     <button type="button" id="button-filter" class="btn btn-primary">{{ button_filter }}</button>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* 				$('#button-filter').on('click', function() {*/
/* 					filter = [];*/
/* 					$('input[name^=\'filter\']:checked').each(function(element) {*/
/* 						filter.push(this.value);*/
/* 					});*/
/* 					href = '{{ action }}&filter=' + filter.join(',');*/
/* 					div = ' #content';*/
/* 					load_href = href + div;*/
/* 					$(div).load(load_href, function() {*/
/* 						$(this).children(':first').unwrap();*/
/* */
/* 	// Product List*/
/* 	$('#list-view').click(function() {*/
/* 		$('#content .product-grid > .clearfix').remove();*/
/* */
/* 		$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');*/
/* 		$('#content .row > .product-list .product-thumb .image').attr('class', 'image col-xs-5 col-sm-5 col-md-3');*/
/* 		$('#content .row > .product-list .product-thumb .thumb-description').attr('class', 'thumb-description col-xs-7 col-sm-7 col-md-9');*/
/* */
/* 		localStorage.setItem('display', 'list');*/
/* 	});*/
/* */
/* 	// Product Grid*/
/* 	$('#grid-view').click(function() {*/
/* 		// What a shame bootstrap does not take into account dynamically loaded columns*/
/* 		var cols = $('#column-right, #column-left').length;*/
/* */
/* 		if (cols == 2) {*/
/* 			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');*/
/* 		} else if (cols == 1) {*/
/* 			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12');*/
/* 		} else {*/
/* 			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12');*/
/* 		}*/
/* 		$('#content .row > .product-grid .product-thumb .image').attr('class', 'image col-xs-12');*/
/* 		$('#content .row > .product-grid .product-thumb .thumb-description').attr('class', 'thumb-description col-xs-12');*/
/* */
/* 		localStorage.setItem('display', 'grid');*/
/* 	});*/
/* */
/* 						if (localStorage.getItem('display') == 'list') {*/
/* 							$('#list-view').trigger('click');*/
/* 							$('#list-view').addClass('active');*/
/* 						} else {*/
/* 							$('#grid-view').trigger('click');*/
/* 							$('#grid-view').addClass('active');*/
/* 						}*/
/* 					});*/
/* 					setLocation(href);*/
/* 					return false;*/
/* 				});*/
/* 				function setLocation(curLoc){*/
/* 					try {*/
/* 					  history.pushState(null, null, curLoc);*/
/* 					  return;*/
/* 					} catch(e) {}*/
/* 					location.hash = '#' + curLoc;*/
/* 				}*/
/* 				//--></script>*/
