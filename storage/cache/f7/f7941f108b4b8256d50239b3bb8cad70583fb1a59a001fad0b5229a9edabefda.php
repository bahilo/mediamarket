<?php

/* OPC170_02/template/common/search.twig */
class __TwigTemplate_c3683e5295f2d34d8e155624968219157061fbc430007ed6ed9ac41aeaf47a58 extends Twig_Template
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
        echo "<div id=\"header-search\" class=\"input-group\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
\t<select name=\"category_id\" class=\"form-control innner-search\">
\t\t<option value=\"0\">";
        // line 4
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 6
            echo "\t\t\t";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 7
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t";
            }
            // line 11
            echo "\t\t\t
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 13
                echo "\t\t\t\t";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 14
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t
\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 20
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 21
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t";
                    } else {
                        // line 23
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t";
                    }
                    // line 25
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</select>
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg header-search-btn\"><i class=\"fa fa-search\"></i>
\t";
        // line 31
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "
\t</button>
  </span>
</div>

<script type=\"text/javascript\">
\$('#header-search button.header-search-btn').bind('click', function() {
\turl = 'index.php?route=product/search';
\t
\tvar search = \$('#header-search input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#header-search select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}
\t
\t\turl += '&sub_category=true';
\t\turl += '&description=true';

//alert (url);
\tlocation = url;
});

\$('#header-search input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#header-search button.header-search-btn').trigger('click');
\t}
});

</script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 31,  126 => 28,  120 => 27,  114 => 26,  108 => 25,  100 => 23,  92 => 21,  89 => 20,  85 => 19,  82 => 18,  74 => 16,  66 => 14,  63 => 13,  59 => 12,  56 => 11,  48 => 9,  40 => 7,  37 => 6,  33 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="header-search" class="input-group">*/
/* 	<input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/* 	<select name="category_id" class="form-control innner-search">*/
/* 		<option value="0">{{ text_category }}</option>*/
/* 		{% for category_1 in categories %}*/
/* 			{% if (category_1.category_id)  ==  (category_id) %}*/
/* 				<option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/* 			{% else %}*/
/* 				<option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/* 			{% endif %}*/
/* 			*/
/* 			{% for category_2 in category_1.children %}*/
/* 				{% if (category_2.category_id)  ==  (category_id) %}*/
/* 					<option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 				{% else %}*/
/* 					<option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 				{% endif %}*/
/* 				*/
/* 				{% for category_3 in category_2.children %}*/
/* 					{% if (category_3.category_id)  ==  (category_id) %}*/
/* 						<option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endfor %}*/
/* 		{% endfor %}*/
/* 	</select>*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-lg header-search-btn"><i class="fa fa-search"></i>*/
/* 	{{ text_search }}*/
/* 	</button>*/
/*   </span>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* $('#header-search button.header-search-btn').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* 	*/
/* 	var search = $('#header-search input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#header-search select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* 	*/
/* 		url += '&sub_category=true';*/
/* 		url += '&description=true';*/
/* */
/* //alert (url);*/
/* 	location = url;*/
/* });*/
/* */
/* $('#header-search input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#header-search button.header-search-btn').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* </script>*/
