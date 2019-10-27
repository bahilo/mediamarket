<?php

/* extension/module/tt_blog.twig */
class __TwigTemplate_3118858dbad3a4991b1e6ab6f05871b65fe86dfeaee0f5547c477710e57b0685 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-tt_blog\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_view_list"]) ? $context["text_view_list"] : null);
        echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>   
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-tt_blog\" class=\"form-horizontal\">
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 36
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\" />
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 38
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 40
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 47
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 50
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 51
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 52
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 54
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 55
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 56
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-width\"><span data-toggle=\"tooltip\" title=\"";
        // line 61
        echo (isset($context["help_image"]) ? $context["help_image"] : null);
        echo "\">";
        echo (isset($context["entry_image_size"]) ? $context["entry_image_size"] : null);
        echo "</span></label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 63
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 64
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
              ";
        }
        // line 67
        echo "            </div>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 69
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 70
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 71
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
              ";
        }
        // line 73
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo (isset($context["help_limit"]) ? $context["help_limit"] : null);
        echo "\">";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 78
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-char-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 82
        echo (isset($context["help_char_limit"]) ? $context["help_char_limit"] : null);
        echo "\">";
        echo (isset($context["entry_char_limit"]) ? $context["entry_char_limit"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"char_limit\" value=\"";
        // line 84
        echo (isset($context["char_limit"]) ? $context["char_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_char_limit"]) ? $context["entry_char_limit"] : null);
        echo "\" id=\"input-char-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 88
        echo (isset($context["help_allow_comments"]) ? $context["help_allow_comments"] : null);
        echo "\">";
        echo (isset($context["entry_allow_comments"]) ? $context["entry_allow_comments"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 91
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 92
            echo "                <input type=\"radio\" name=\"comments\" value=\"1\" checked=\"checked\" />
                ";
            // line 93
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 95
            echo "                <input type=\"radio\" name=\"comments\" value=\"1\" />
                ";
            // line 96
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t";
        }
        // line 97
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 100
        if ( !(isset($context["comments"]) ? $context["comments"] : null)) {
            // line 101
            echo "                <input type=\"radio\" name=\"comments\" value=\"0\" checked=\"checked\" />
                ";
            // line 102
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 104
            echo "                <input type=\"radio\" name=\"comments\" value=\"0\" />
                ";
            // line 105
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t";
        }
        // line 106
        echo " 
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 111
        echo (isset($context["help_login_required"]) ? $context["help_login_required"] : null);
        echo "\">";
        echo (isset($context["entry_login_required"]) ? $context["entry_login_required"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 114
        if ((isset($context["login"]) ? $context["login"] : null)) {
            // line 115
            echo "                <input type=\"radio\" name=\"login\" value=\"1\" checked=\"checked\" />
                ";
            // line 116
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 118
            echo "                <input type=\"radio\" name=\"login\" value=\"1\" />
                ";
            // line 119
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t";
        }
        // line 120
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 123
        if ( !(isset($context["login"]) ? $context["login"] : null)) {
            // line 124
            echo "                <input type=\"radio\" name=\"login\" value=\"0\" checked=\"checked\" />
                ";
            // line 125
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 127
            echo "                <input type=\"radio\" name=\"login\" value=\"0\" />
                ";
            // line 128
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t";
        }
        // line 129
        echo " 
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 134
        echo (isset($context["help_auto_approve"]) ? $context["help_auto_approve"] : null);
        echo "\">";
        echo (isset($context["entry_auto_approve"]) ? $context["entry_auto_approve"] : null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 137
        if ((isset($context["auto_approve"]) ? $context["auto_approve"] : null)) {
            // line 138
            echo "                <input type=\"radio\" name=\"auto_approve\" value=\"1\" checked=\"checked\" />
                ";
            // line 139
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 141
            echo "                <input type=\"radio\" name=\"auto_approve\" value=\"1\" />
                ";
            // line 142
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t";
        }
        // line 143
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 146
        if ( !(isset($context["auto_approve"]) ? $context["auto_approve"] : null)) {
            // line 147
            echo "                <input type=\"radio\" name=\"auto_approve\" value=\"0\" checked=\"checked\" />
                ";
            // line 148
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 150
            echo "                <input type=\"radio\" name=\"auto_approve\" value=\"0\" />
                ";
            // line 151
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t";
        }
        // line 152
        echo " 
              </label>
            </div>
          </div>
          <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 159
        echo (isset($context["column_title"]) ? $context["column_title"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 160
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 161
        echo (isset($context["column_comments"]) ? $context["column_comments"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 162
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 163
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            ";
        // line 166
        if ((isset($context["tt_blog_entries"]) ? $context["tt_blog_entries"] : null)) {
            // line 167
            echo "            <tbody>
              ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tt_blog_entries"]) ? $context["tt_blog_entries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 169
                echo "              <tr>
                <td class=\"text-left\">";
                // line 170
                echo $this->getAttribute($context["entry"], "title", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 171
                echo $this->getAttribute($context["entry"], "status", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 172
                echo $this->getAttribute($context["entry"], "total_comments", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 173
                echo $this->getAttribute($context["entry"], "date_added", array());
                echo "</td>
                <td class=\"text-right\">
                  <a onclick=\"confirm('";
                // line 175
                echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
                echo "') ? location.href='";
                echo $this->getAttribute($context["entry"], "delete", array());
                echo "' : false;\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                  <a href=\"";
                // line 176
                echo $this->getAttribute($context["entry"], "comments", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_comments"]) ? $context["button_comments"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                  <a href=\"";
                // line 177
                echo $this->getAttribute($context["entry"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "            </tbody>
\t\t    ";
        }
        // line 183
        echo "\t\t\t
            <tfoot>
              ";
        // line 185
        if ((isset($context["add_blog"]) ? $context["add_blog"] : null)) {
            // line 186
            echo "              <tr>
                <td class=\"text-right\" colspan=\"5\"><button type=\"button\" onclick=\"location = '";
            // line 187
            echo (isset($context["add_blog"]) ? $context["add_blog"] : null);
            echo "';\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_add_blog"]) ? $context["button_add_blog"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
              ";
        } else {
            // line 190
            echo "              <tr>
                <td class=\"text-center\" colspan=\"5\">";
            // line 191
            echo (isset($context["text_save_module"]) ? $context["text_save_module"] : null);
            echo "</td>
              </tr>
\t\t\t";
        }
        // line 193
        echo " 
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 201
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/tt_blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 201,  521 => 193,  515 => 191,  512 => 190,  504 => 187,  501 => 186,  499 => 185,  495 => 183,  491 => 181,  479 => 177,  473 => 176,  465 => 175,  460 => 173,  456 => 172,  452 => 171,  448 => 170,  445 => 169,  441 => 168,  438 => 167,  436 => 166,  430 => 163,  426 => 162,  422 => 161,  418 => 160,  414 => 159,  405 => 152,  400 => 151,  397 => 150,  392 => 148,  389 => 147,  387 => 146,  382 => 143,  377 => 142,  374 => 141,  369 => 139,  366 => 138,  364 => 137,  356 => 134,  349 => 129,  344 => 128,  341 => 127,  336 => 125,  333 => 124,  331 => 123,  326 => 120,  321 => 119,  318 => 118,  313 => 116,  310 => 115,  308 => 114,  300 => 111,  293 => 106,  288 => 105,  285 => 104,  280 => 102,  277 => 101,  275 => 100,  270 => 97,  265 => 96,  262 => 95,  257 => 93,  254 => 92,  252 => 91,  244 => 88,  235 => 84,  228 => 82,  219 => 78,  212 => 76,  207 => 73,  201 => 71,  199 => 70,  193 => 69,  189 => 67,  183 => 65,  181 => 64,  175 => 63,  168 => 61,  161 => 56,  156 => 55,  151 => 54,  146 => 52,  141 => 51,  139 => 50,  133 => 47,  128 => 44,  122 => 42,  120 => 41,  114 => 40,  109 => 38,  104 => 36,  100 => 35,  94 => 32,  85 => 27,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-tt_blog" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_view_list }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>   */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-tt_blog" class="form-horizontal">*/
/*           <input type="hidden" name="module_id" value="{{ module_id }}" />*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-8">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 				{% endif %} */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-width"><span data-toggle="tooltip" title="{{ help_image }}">{{ entry_image_size }}</span></label>*/
/*             <div class="col-sm-4">*/
/*               <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*               {% if error_width %}*/
/*               <div class="text-danger">{{ error_width }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*               {% if error_height %}*/
/*               <div class="text-danger">{{ error_height }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-limit"><span data-toggle="tooltip" title="{{ help_limit }}">{{ entry_limit }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="limit" value="{{ limit }}" placeholder="{{ entry_limit }}" id="input-limit" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label" for="input-char-limit"><span data-toggle="tooltip" title="{{ help_char_limit }}">{{ entry_char_limit }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="char_limit" value="{{ char_limit }}" placeholder="{{ entry_char_limit }}" id="input-char-limit" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ help_allow_comments }}">{{ entry_allow_comments }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <label class="radio-inline">*/
/*                 {% if comments %}*/
/*                 <input type="radio" name="comments" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="comments" value="1" />*/
/*                 {{ text_yes }}*/
/* 				{% endif %} */
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not comments %}*/
/*                 <input type="radio" name="comments" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="comments" value="0" />*/
/*                 {{ text_no }}*/
/* 				{% endif %} */
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ help_login_required }}">{{ entry_login_required }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <label class="radio-inline">*/
/*                 {% if login %}*/
/*                 <input type="radio" name="login" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="login" value="1" />*/
/*                 {{ text_yes }}*/
/* 				{% endif %} */
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not login %}*/
/*                 <input type="radio" name="login" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="login" value="0" />*/
/*                 {{ text_no }}*/
/* 				{% endif %} */
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ help_auto_approve }}">{{ entry_auto_approve }}</span></label>*/
/*             <div class="col-sm-8">*/
/*               <label class="radio-inline">*/
/*                 {% if auto_approve %}*/
/*                 <input type="radio" name="auto_approve" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="auto_approve" value="1" />*/
/*                 {{ text_yes }}*/
/* 				{% endif %} */
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not auto_approve %}*/
/*                 <input type="radio" name="auto_approve" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="auto_approve" value="0" />*/
/*                 {{ text_no }}*/
/* 				{% endif %} */
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <table class="table table-striped table-bordered table-hover">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_title }}</td>*/
/*                 <td class="text-left">{{ column_status }}</td>*/
/*                 <td class="text-right">{{ column_comments }}</td>*/
/*                 <td class="text-right">{{ column_date_added }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             {% if tt_blog_entries %}*/
/*             <tbody>*/
/*               {% for entry in tt_blog_entries %}*/
/*               <tr>*/
/*                 <td class="text-left">{{ entry.title }}</td>*/
/*                 <td class="text-left">{{ entry.status }}</td>*/
/*                 <td class="text-right">{{ entry.total_comments }}</td>*/
/*                 <td class="text-right">{{ entry.date_added }}</td>*/
/*                 <td class="text-right">*/
/*                   <a onclick="confirm('{{ text_confirm }}') ? location.href='{{ entry.delete }}' : false;" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                   <a href="{{ entry.comments }}" data-toggle="tooltip" title="{{ button_comments }}" class="btn btn-info"><i class="fa fa-eye"></i></a>*/
/*                   <a href="{{ entry.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                   </td>*/
/*               </tr>*/
/*               {% endfor %}*/
/*             </tbody>*/
/* 		    {% endif %}*/
/* 			*/
/*             <tfoot>*/
/*               {% if add_blog %}*/
/*               <tr>*/
/*                 <td class="text-right" colspan="5"><button type="button" onclick="location = '{{ add_blog }}';" data-toggle="tooltip" title="{{ button_add_blog }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*               </tr>*/
/*               {% else %}*/
/*               <tr>*/
/*                 <td class="text-center" colspan="5">{{ text_save_module }}</td>*/
/*               </tr>*/
/* 			{% endif %} */
/*             </tfoot>*/
/*           </table>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
