<?php

/* design/layout_form.twig */
class __TwigTemplate_2ff8cc34bc1f95fa00be2de07512cfbceecfe2cd90ee156598aaa75d45ea993b extends Twig_Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_routes"]) ? $context["layout_routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if (($this->getAttribute($context["store"], "store_id", array()) == $this->getAttribute($context["layout_route"], "store_id", array()))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][route]\" value=\"";
            echo $this->getAttribute($context["layout_route"], "route", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = ((isset($context["route_row"]) ? $context["route_row"] : null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo (isset($context["button_route_add"]) ? $context["button_route_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
<style type=\"text/css\">
.tt-position {
    background-color: #F9F9F9;
    margin: 30px 0;
    padding: 15px;
}
.tt-position > legend {
    color: #F64444;
}
</style>
\t";
        // line 86
        $context["module_row"] = 0;
        // line 87
        echo "
\t<!-- TT Header Custom Position START -->\t
\t\t<fieldset class=\"tt-position\">
\t\t<legend>";
        // line 90
        echo (isset($context["text_module"]) ? $context["text_module"] : null);
        echo "</legend>
               <div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-header-left\" class=\"table table-striped table-bordered table-hover\">
                 <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 96
        echo (isset($context["text_header_left"]) ? $context["text_header_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 101
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "header_left")) {
                // line 102
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 104
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 106
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 107
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 108
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 109
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 111
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 113
                        echo "                            ";
                    } else {
                        // line 114
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 115
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 116
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 118
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 120
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 121
                        echo "                            ";
                    }
                    // line 122
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 125
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 126
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 127
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 128
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 132
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 133
                echo "                    ";
            }
            // line 134
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 141
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 142
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 143
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 145
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 146
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                            ";
            }
            // line 149
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('header-left');\" data-toggle=\"tooltip\" title=\"";
        // line 153
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t\t\t</div>
\t\t        <div class=\"col-lg-6 col-md-4 col-sm-12\">
    \t\t\t  <table id=\"module-header-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 164
        echo (isset($context["text_header_top"]) ? $context["text_header_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 169
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "header_top")) {
                // line 170
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 172
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 174
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 175
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 176
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 177
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 179
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 181
                        echo "                            ";
                    } else {
                        // line 182
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 183
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 184
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 186
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 188
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 189
                        echo "                            ";
                    }
                    // line 190
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 193
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 194
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 195
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 196
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 200
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 201
                echo "                    ";
            }
            // line 202
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 209
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 210
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 211
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 213
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 214
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "                            ";
            }
            // line 217
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('header-top');\" data-toggle=\"tooltip\" title=\"";
        // line 221
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t        <table id=\"module-header-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 230
        echo (isset($context["text_header_bottom"]) ? $context["text_header_bottom"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 235
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "header_bottom")) {
                // line 236
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 238
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 240
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 241
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 242
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 243
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 245
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 247
                        echo "                            ";
                    } else {
                        // line 248
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 249
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 250
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 252
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 254
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 255
                        echo "                            ";
                    }
                    // line 256
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 259
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 260
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 261
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 262
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 266
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 267
                echo "                    ";
            }
            // line 268
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 275
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 276
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 277
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 279
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 280
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "                            ";
            }
            // line 283
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('header-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 287
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-12\">
      \t\t\t<table id=\"module-header-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 299
        echo (isset($context["text_header_right"]) ? $context["text_header_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 304
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "header_right")) {
                // line 305
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 307
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 308
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 309
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 310
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 311
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 312
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 314
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 316
                        echo "                            ";
                    } else {
                        // line 317
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 318
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 319
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 321
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 323
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 324
                        echo "                            ";
                    }
                    // line 325
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 327
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 328
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 329
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 330
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 331
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 335
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 336
                echo "                    ";
            }
            // line 337
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 344
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 345
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 346
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 348
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 349
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "                            ";
            }
            // line 352
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('header-right');\" data-toggle=\"tooltip\" title=\"";
        // line 356
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t\t\t</div>
   \t\t\t\t</div>
          \t</fieldset>

\t\t\t<!-- TT Header Custom Position END -->
\t\t\t
\t\t\t<!-- Default Position START -->
\t\t\t<fieldset>
            <legend>";
        // line 370
        echo (isset($context["text_module"]) ? $context["text_module"] : null);
        echo "</legend>
            \t<div class=\"row\">
              \t<div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 376
        echo (isset($context["text_column_left"]) ? $context["text_column_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 381
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_left")) {
                // line 382
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 384
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 385
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 386
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 387
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 388
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 389
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 391
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 393
                        echo "                            ";
                    } else {
                        // line 394
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 395
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 396
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 398
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 400
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 401
                        echo "                            ";
                    }
                    // line 402
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 404
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 405
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 406
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 407
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 408
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 412
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 413
                echo "                    ";
            }
            // line 414
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 421
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 422
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 423
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 425
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 426
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "                            ";
            }
            // line 429
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 433
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 444
        echo (isset($context["text_content_top"]) ? $context["text_content_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 449
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_top")) {
                // line 450
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 452
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 453
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 454
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 455
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 456
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 457
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 459
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 461
                        echo "                            ";
                    } else {
                        // line 462
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 463
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 464
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 466
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 468
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 469
                        echo "                            ";
                    }
                    // line 470
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 472
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 473
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 474
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 475
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 476
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 480
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 481
                echo "                    ";
            }
            // line 482
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 489
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 490
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 491
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 493
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 494
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                echo "                            ";
            }
            // line 497
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 499
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 501
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 510
        echo (isset($context["text_content_bottom"]) ? $context["text_content_bottom"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 515
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_bottom")) {
                // line 516
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 518
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 519
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 520
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 521
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 522
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 523
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 525
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 527
                        echo "                            ";
                    } else {
                        // line 528
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 529
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 530
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 532
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 534
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 535
                        echo "                            ";
                    }
                    // line 536
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 538
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 539
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 540
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 541
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 542
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 546
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 547
                echo "                    ";
            }
            // line 548
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 555
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 556
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 557
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 559
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 560
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 562
                echo "                            ";
            }
            // line 563
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 565
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 567
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 578
        echo (isset($context["text_column_right"]) ? $context["text_column_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 582
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 583
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_right")) {
                // line 584
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 586
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 587
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 588
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 589
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 590
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 591
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 593
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 595
                        echo "                            ";
                    } else {
                        // line 596
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 597
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 598
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 600
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 602
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 603
                        echo "                            ";
                    }
                    // line 604
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 606
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 607
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 608
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 609
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 610
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 614
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 615
                echo "                    ";
            }
            // line 616
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 623
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 624
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 625
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 627
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 628
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 630
                echo "                            ";
            }
            // line 631
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 633
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 635
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            \t</div>
</fieldset>
\t       <!-- Default Position END -->
\t\t\t\t
\t  <!-- TT Footer Custom Position START -->
\t\t\t <fieldset class=\"tt-position\">
              <legend>";
        // line 648
        echo (isset($context["text_footer_module"]) ? $context["text_footer_module"] : null);
        echo "</legend>
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-12\">
      \t\t\t\t\t<table id=\"module-footer-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 654
        echo (isset($context["text_footer_left"]) ? $context["text_footer_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 658
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 659
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "footer_left")) {
                // line 660
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 662
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 663
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 664
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 665
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 666
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 667
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 669
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 671
                        echo "                            ";
                    } else {
                        // line 672
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 673
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 674
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 676
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 678
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 679
                        echo "                            ";
                    }
                    // line 680
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 682
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 683
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 684
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 685
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 686
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 690
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 691
                echo "                    ";
            }
            // line 692
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 698
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 699
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 700
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 701
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 703
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 704
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 706
                echo "                            ";
            }
            // line 707
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 709
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-left');\" data-toggle=\"tooltip\" title=\"";
        // line 711
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t   \t\t\t</div>
\t\t\t\t
\t\t\t    <div class=\"col-lg-6 col-md-4 col-sm-12\">
      \t\t\t\t\t<table id=\"module-footer-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 723
        echo (isset($context["text_footer_top"]) ? $context["text_footer_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 728
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "footer_top")) {
                // line 729
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 731
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 732
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 733
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 734
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 735
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 736
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 738
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 740
                        echo "                            ";
                    } else {
                        // line 741
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 742
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 743
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 745
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 747
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 748
                        echo "                            ";
                    }
                    // line 749
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 751
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 752
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 753
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 754
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 755
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 759
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 760
                echo "                    ";
            }
            // line 761
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 762
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 767
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 768
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 769
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 770
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 772
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 773
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 775
                echo "                            ";
            }
            // line 776
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-top');\" data-toggle=\"tooltip\" title=\"";
        // line 780
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t\t\t\t\t<table id=\"module-footer-bottom\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  <td class=\"text-center\">";
        // line 789
        echo (isset($context["text_footer_bottom"]) ? $context["text_footer_bottom"] : null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t";
        // line 793
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 794
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "footer_bottom")) {
                // line 795
                echo "\t\t\t\t\t\t\t<tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
\t\t\t\t\t\t\t  <td class=\"text-left\"><div class=\"input-group\">
\t\t\t\t\t\t\t\t  <select name=\"layout_module[";
                // line 797
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 798
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 799
                    echo "\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 800
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 801
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 802
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 804
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 806
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 807
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 808
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 809
                                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 811
                                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 813
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 814
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 815
                    echo "\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 817
                echo "\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"layout_module[";
                // line 818
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
\t\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"layout_module[";
                // line 819
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
\t\t\t\t\t\t\t\t  <div class=\"input-group-btn\"><a href=\"";
                // line 820
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 821
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                // line 825
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 826
                echo "\t\t\t\t\t\t\t";
            }
            // line 827
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 828
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t  <tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  <td class=\"text-left\"><div class=\"input-group\">
\t\t\t\t\t\t\t\t  <select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
        // line 833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 834
            echo "\t\t\t\t\t\t\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 835
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 836
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 838
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 839
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 841
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 842
            echo "\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 844
        echo "\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t  <div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('footer-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 846
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </tfoot>
\t\t\t\t\t\t</table>
\t\t\t  \t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-12\">
      \t\t\t<table id=\"module-footer-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 858
        echo (isset($context["text_footer_right"]) ? $context["text_footer_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 862
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 863
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "footer_right")) {
                // line 864
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 866
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 867
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 868
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 869
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 870
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 871
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 873
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 875
                        echo "                            ";
                    } else {
                        // line 876
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 877
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 878
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 880
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 882
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 883
                        echo "                            ";
                    }
                    // line 884
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 886
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 887
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 888
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 889
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 890
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 894
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 895
                echo "                    ";
            }
            // line 896
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 897
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            ";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 903
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 904
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 905
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 907
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 908
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 910
                echo "                            ";
            }
            // line 911
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-right');\" data-toggle=\"tooltip\" title=\"";
        // line 915
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t   \t\t\t</div>
\t\t    </div>
          </fieldset>
\t\t<!-- TT Footer Custom Position END -->
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 930
        echo (isset($context["route_row"]) ? $context["route_row"] : null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 935
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>';
\t";
        // line 936
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 937
            echo "\thtml += '<option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "name", array()), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 939
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 940
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 941
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 949
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 954
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 955
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
            echo "\">';
\t";
            // line 956
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 957
                echo "\thtml += '      <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
                echo "</option>';
\t";
            } else {
                // line 959
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 960
                    echo "\thtml += '      <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 962
                echo "\t";
            }
            // line 963
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 965
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 968
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 988
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 990
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
";
        // line 997
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2911 => 997,  2901 => 990,  2896 => 988,  2871 => 968,  2866 => 965,  2859 => 963,  2856 => 962,  2845 => 960,  2840 => 959,  2832 => 957,  2830 => 956,  2825 => 955,  2821 => 954,  2813 => 949,  2802 => 941,  2798 => 940,  2795 => 939,  2784 => 937,  2780 => 936,  2776 => 935,  2768 => 930,  2750 => 915,  2746 => 913,  2739 => 911,  2736 => 910,  2725 => 908,  2720 => 907,  2712 => 905,  2710 => 904,  2705 => 903,  2701 => 902,  2694 => 897,  2688 => 896,  2685 => 895,  2683 => 894,  2674 => 890,  2668 => 889,  2662 => 888,  2656 => 887,  2653 => 886,  2646 => 884,  2643 => 883,  2637 => 882,  2629 => 880,  2621 => 878,  2618 => 877,  2613 => 876,  2610 => 875,  2602 => 873,  2594 => 871,  2591 => 870,  2589 => 869,  2584 => 868,  2580 => 867,  2576 => 866,  2570 => 864,  2567 => 863,  2563 => 862,  2556 => 858,  2541 => 846,  2537 => 844,  2530 => 842,  2527 => 841,  2516 => 839,  2511 => 838,  2503 => 836,  2501 => 835,  2496 => 834,  2492 => 833,  2485 => 828,  2479 => 827,  2476 => 826,  2474 => 825,  2465 => 821,  2459 => 820,  2453 => 819,  2447 => 818,  2444 => 817,  2437 => 815,  2434 => 814,  2428 => 813,  2420 => 811,  2412 => 809,  2409 => 808,  2404 => 807,  2401 => 806,  2393 => 804,  2385 => 802,  2382 => 801,  2380 => 800,  2375 => 799,  2371 => 798,  2367 => 797,  2361 => 795,  2358 => 794,  2354 => 793,  2347 => 789,  2335 => 780,  2331 => 778,  2324 => 776,  2321 => 775,  2310 => 773,  2305 => 772,  2297 => 770,  2295 => 769,  2290 => 768,  2286 => 767,  2279 => 762,  2273 => 761,  2270 => 760,  2268 => 759,  2259 => 755,  2253 => 754,  2247 => 753,  2241 => 752,  2238 => 751,  2231 => 749,  2228 => 748,  2222 => 747,  2214 => 745,  2206 => 743,  2203 => 742,  2198 => 741,  2195 => 740,  2187 => 738,  2179 => 736,  2176 => 735,  2174 => 734,  2169 => 733,  2165 => 732,  2161 => 731,  2155 => 729,  2152 => 728,  2148 => 727,  2141 => 723,  2126 => 711,  2122 => 709,  2115 => 707,  2112 => 706,  2101 => 704,  2096 => 703,  2088 => 701,  2086 => 700,  2081 => 699,  2077 => 698,  2070 => 693,  2064 => 692,  2061 => 691,  2059 => 690,  2050 => 686,  2044 => 685,  2038 => 684,  2032 => 683,  2029 => 682,  2022 => 680,  2019 => 679,  2013 => 678,  2005 => 676,  1997 => 674,  1994 => 673,  1989 => 672,  1986 => 671,  1978 => 669,  1970 => 667,  1967 => 666,  1965 => 665,  1960 => 664,  1956 => 663,  1952 => 662,  1946 => 660,  1943 => 659,  1939 => 658,  1932 => 654,  1923 => 648,  1907 => 635,  1903 => 633,  1896 => 631,  1893 => 630,  1882 => 628,  1877 => 627,  1869 => 625,  1867 => 624,  1862 => 623,  1858 => 622,  1851 => 617,  1845 => 616,  1842 => 615,  1840 => 614,  1831 => 610,  1825 => 609,  1819 => 608,  1813 => 607,  1810 => 606,  1803 => 604,  1800 => 603,  1794 => 602,  1786 => 600,  1778 => 598,  1775 => 597,  1770 => 596,  1767 => 595,  1759 => 593,  1751 => 591,  1748 => 590,  1746 => 589,  1741 => 588,  1737 => 587,  1733 => 586,  1727 => 584,  1724 => 583,  1720 => 582,  1713 => 578,  1699 => 567,  1695 => 565,  1688 => 563,  1685 => 562,  1674 => 560,  1669 => 559,  1661 => 557,  1659 => 556,  1654 => 555,  1650 => 554,  1643 => 549,  1637 => 548,  1634 => 547,  1632 => 546,  1623 => 542,  1617 => 541,  1611 => 540,  1605 => 539,  1602 => 538,  1595 => 536,  1592 => 535,  1586 => 534,  1578 => 532,  1570 => 530,  1567 => 529,  1562 => 528,  1559 => 527,  1551 => 525,  1543 => 523,  1540 => 522,  1538 => 521,  1533 => 520,  1529 => 519,  1525 => 518,  1519 => 516,  1516 => 515,  1512 => 514,  1505 => 510,  1493 => 501,  1489 => 499,  1482 => 497,  1479 => 496,  1468 => 494,  1463 => 493,  1455 => 491,  1453 => 490,  1448 => 489,  1444 => 488,  1437 => 483,  1431 => 482,  1428 => 481,  1426 => 480,  1417 => 476,  1411 => 475,  1405 => 474,  1399 => 473,  1396 => 472,  1389 => 470,  1386 => 469,  1380 => 468,  1372 => 466,  1364 => 464,  1361 => 463,  1356 => 462,  1353 => 461,  1345 => 459,  1337 => 457,  1334 => 456,  1332 => 455,  1327 => 454,  1323 => 453,  1319 => 452,  1313 => 450,  1310 => 449,  1306 => 448,  1299 => 444,  1285 => 433,  1281 => 431,  1274 => 429,  1271 => 428,  1260 => 426,  1255 => 425,  1247 => 423,  1245 => 422,  1240 => 421,  1236 => 420,  1229 => 415,  1223 => 414,  1220 => 413,  1218 => 412,  1209 => 408,  1203 => 407,  1197 => 406,  1191 => 405,  1188 => 404,  1181 => 402,  1178 => 401,  1172 => 400,  1164 => 398,  1156 => 396,  1153 => 395,  1148 => 394,  1145 => 393,  1137 => 391,  1129 => 389,  1126 => 388,  1124 => 387,  1119 => 386,  1115 => 385,  1111 => 384,  1105 => 382,  1102 => 381,  1098 => 380,  1091 => 376,  1082 => 370,  1065 => 356,  1061 => 354,  1054 => 352,  1051 => 351,  1040 => 349,  1035 => 348,  1027 => 346,  1025 => 345,  1020 => 344,  1016 => 343,  1009 => 338,  1003 => 337,  1000 => 336,  998 => 335,  989 => 331,  983 => 330,  977 => 329,  971 => 328,  968 => 327,  961 => 325,  958 => 324,  952 => 323,  944 => 321,  936 => 319,  933 => 318,  928 => 317,  925 => 316,  917 => 314,  909 => 312,  906 => 311,  904 => 310,  899 => 309,  895 => 308,  891 => 307,  885 => 305,  882 => 304,  878 => 303,  871 => 299,  856 => 287,  852 => 285,  845 => 283,  842 => 282,  831 => 280,  826 => 279,  818 => 277,  816 => 276,  811 => 275,  807 => 274,  800 => 269,  794 => 268,  791 => 267,  789 => 266,  780 => 262,  774 => 261,  768 => 260,  762 => 259,  759 => 258,  752 => 256,  749 => 255,  743 => 254,  735 => 252,  727 => 250,  724 => 249,  719 => 248,  716 => 247,  708 => 245,  700 => 243,  697 => 242,  695 => 241,  690 => 240,  686 => 239,  682 => 238,  676 => 236,  673 => 235,  669 => 234,  662 => 230,  650 => 221,  646 => 219,  639 => 217,  636 => 216,  625 => 214,  620 => 213,  612 => 211,  610 => 210,  605 => 209,  601 => 208,  594 => 203,  588 => 202,  585 => 201,  583 => 200,  574 => 196,  568 => 195,  562 => 194,  556 => 193,  553 => 192,  546 => 190,  543 => 189,  537 => 188,  529 => 186,  521 => 184,  518 => 183,  513 => 182,  510 => 181,  502 => 179,  494 => 177,  491 => 176,  489 => 175,  484 => 174,  480 => 173,  476 => 172,  470 => 170,  467 => 169,  463 => 168,  456 => 164,  442 => 153,  438 => 151,  431 => 149,  428 => 148,  417 => 146,  412 => 145,  404 => 143,  402 => 142,  397 => 141,  393 => 140,  386 => 135,  380 => 134,  377 => 133,  375 => 132,  366 => 128,  360 => 127,  354 => 126,  348 => 125,  345 => 124,  338 => 122,  335 => 121,  329 => 120,  321 => 118,  313 => 116,  310 => 115,  305 => 114,  302 => 113,  294 => 111,  286 => 109,  283 => 108,  281 => 107,  276 => 106,  272 => 105,  268 => 104,  262 => 102,  259 => 101,  255 => 100,  248 => 96,  239 => 90,  234 => 87,  232 => 86,  213 => 70,  207 => 66,  201 => 65,  199 => 64,  192 => 62,  184 => 61,  181 => 60,  175 => 59,  167 => 57,  159 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  139 => 50,  134 => 49,  132 => 48,  124 => 43,  120 => 42,  113 => 37,  107 => 35,  105 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-layout" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*        <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-layout" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_route }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                 {% if error_name %}*/
/*                 <div class="text-danger">{{ error_name }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <table id="route" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_store }}</td>*/
/*                   <td class="text-left">{{ entry_route }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% set route_row = 0 %}*/
/*                 {% for layout_route in layout_routes %}*/
/*                 <tr id="route-row{{ route_row }}">*/
/*                   <td class="text-left"><select name="layout_route[{{ route_row }}][store_id]" class="form-control">*/
/*                       <option value="0">{{ text_default }}</option>*/
/*                       {% for store in stores %}*/
/*                       {% if store.store_id == layout_route.store_id %}*/
/*                       <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select></td>*/
/*                   <td class="text-left"><input type="text" name="layout_route[{{ route_row }}][route]" value="{{ layout_route.route }}" placeholder="{{ entry_route }}" class="form-control" /></td>*/
/*                   <td class="text-left"><button type="button" onclick="$('#route-row{{ route_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                 </tr>*/
/*                 {% set route_row = route_row + 1 %}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-left"><button type="button" onclick="addRoute();" data-toggle="tooltip" title="{{ button_route_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*           <fieldset>*/
/* <style type="text/css">*/
/* .tt-position {*/
/*     background-color: #F9F9F9;*/
/*     margin: 30px 0;*/
/*     padding: 15px;*/
/* }*/
/* .tt-position > legend {*/
/*     color: #F64444;*/
/* }*/
/* </style>*/
/* 	{% set module_row = 0 %}*/
/* */
/* 	<!-- TT Header Custom Position START -->	*/
/* 		<fieldset class="tt-position">*/
/* 		<legend>{{ text_module }}</legend>*/
/*                <div class="row">*/
/* 				<div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-header-left" class="table table-striped table-bordered table-hover">*/
/*                  <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_header_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'header_left' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('header-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 				</div>*/
/* 		        <div class="col-lg-6 col-md-4 col-sm-12">*/
/*     			  <table id="module-header-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_header_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'header_top' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('header-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 		        <table id="module-header-bottom" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_header_bottom }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'header_bottom' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('header-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 				</div>*/
/* 				*/
/* 				<div class="col-lg-3 col-md-4 col-sm-12">*/
/*       			<table id="module-header-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_header_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'header_right' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('header-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 				</div>*/
/*    				</div>*/
/*           	</fieldset>*/
/* */
/* 			<!-- TT Header Custom Position END -->*/
/* 			*/
/* 			<!-- Default Position START -->*/
/* 			<fieldset>*/
/*             <legend>{{ text_module }}</legend>*/
/*             	<div class="row">*/
/*               	<div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-left" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'column_left' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-6 col-md-4 col-sm-12">*/
/*                 <table id="module-content-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'content_top' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"> <a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*                 <table id="module-content-bottom" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_bottom }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'content_bottom' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'column_right' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             	</div>*/
/* </fieldset>*/
/* 	       <!-- Default Position END -->*/
/* 				*/
/* 	  <!-- TT Footer Custom Position START -->*/
/* 			 <fieldset class="tt-position">*/
/*               <legend>{{ text_footer_module }}</legend>*/
/* 				<div class="row">*/
/* 				<div class="col-lg-3 col-md-4 col-sm-12">*/
/*       					<table id="module-footer-left" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_footer_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'footer_left' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('footer-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 	   			</div>*/
/* 				*/
/* 			    <div class="col-lg-6 col-md-4 col-sm-12">*/
/*       					<table id="module-footer-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_footer_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'footer_top' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('footer-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 						<table id="module-footer-bottom" class="table table-striped table-bordered table-hover">*/
/* 						  <thead>*/
/* 							<tr>*/
/* 							  <td class="text-center">{{ text_footer_bottom }}</td>*/
/* 							</tr>*/
/* 						  </thead>*/
/* 						  <tbody>*/
/* 							{% for layout_module in layout_modules %}*/
/* 							{% if layout_module.position == 'footer_bottom' %}*/
/* 							<tr id="module-row{{ module_row }}">*/
/* 							  <td class="text-left"><div class="input-group">*/
/* 								  <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/* 									{% for extension in extensions %}*/
/* 									<optgroup label="{{ extension.name }}">*/
/* 									{% if not extension.module %}*/
/* 									{% if extension.code == layout_module.code %}*/
/* 									<option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 									{% endif %}*/
/* 									{% else %}*/
/* 									{% for module in extension.module %}*/
/* 									{% if module.code == layout_module.code %}*/
/* 									<option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 									{% endif %}*/
/* 									</optgroup>*/
/* 									{% endfor %}*/
/* 								  </select>*/
/* 								  <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/* 								  <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/* 								  <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/* 									<button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/* 								  </div>*/
/* 								</div></td>*/
/* 							</tr>*/
/* 							{% set module_row = module_row + 1 %}*/
/* 							{% endif %}*/
/* 							{% endfor %}*/
/* 						  </tbody>*/
/* 						  <tfoot>*/
/* 							<tr>*/
/* 							  <td class="text-left"><div class="input-group">*/
/* 								  <select class="form-control input-sm">*/
/* 									{% for extension in extensions %}*/
/* 									<optgroup label="{{ extension.name }}">*/
/* 									{% if not extension.module %}*/
/* 									<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 									{% else %}*/
/* 									{% for module in extension.module %}*/
/* 									<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 									{% endfor %}*/
/* 									{% endif %}*/
/* 									</optgroup>*/
/* 									{% endfor %}*/
/* 								  </select>*/
/* 								  <div class="input-group-btn">*/
/* 									<button type="button" onclick="addModule('footer-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/* 								  </div>*/
/* 								</div></td>*/
/* 							</tr>*/
/* 						  </tfoot>*/
/* 						</table>*/
/* 			  	</div>*/
/* 				*/
/* 				<div class="col-lg-3 col-md-4 col-sm-12">*/
/*       			<table id="module-footer-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_footer_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'footer_right' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('footer-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 	   			</div>*/
/* 		    </div>*/
/*           </fieldset>*/
/* 		<!-- TT Footer Custom Position END -->*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var route_row = {{ route_row }};*/
/* */
/* function addRoute() {*/
/* 	html  = '<tr id="route-row' + route_row + '">';*/
/* 	html += '  <td class="text-left"><select name="layout_route[' + route_row + '][store_id]" class="form-control">';*/
/* 	html += '  <option value="0">{{ text_default }}</option>';*/
/* 	{% for store in stores %}*/
/* 	html += '<option value="{{ store.store_id }}">{{ store.name|escape('js') }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><input type="text" name="layout_route[' + route_row + '][route]" value="" placeholder="{{ entry_route }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#route-row' + route_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#route tbody').append(html);*/
/* 	*/
/* 	route_row++;*/
/* }*/
/* */
/* var module_row = {{ module_row }};*/
/* */
/* function addModule(type) {*/
/* 	html  = '<tr id="module-row' + module_row + '">';*/
/*     html += '  <td class="text-left"><div class="input-group"><select name="layout_module[' + module_row + '][code]" class="form-control input-sm">';*/
/* 	{% for extension in extensions %}*/
/* 	html += '    <optgroup label="{{ extension.name|escape('js') }}">';*/
/* 	{% if not extension.module %}*/
/* 	html += '      <option value="{{ extension.code }}">{{ extension.name|escape('js') }}</option>';*/
/* 	{% else %}*/
/* 	{% for module in extension.module %}*/
/* 	html += '      <option value="{{ module.code }}">{{ module.name|escape('js') }}</option>';*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* 	html += '    </optgroup>';*/
/* 	{% endfor %}*/
/* 	html += '  </select>';*/
/*     html += '  <input type="hidden" name="layout_module[' + module_row + '][position]" value="' + type.replace('-', '_') + '" />';*/
/*     html += '  <input type="hidden" name="layout_module[' + module_row + '][sort_order]" value="" />';*/
/* 	html += '  <div class="input-group-btn"><a href="" target="_blank" type="button" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a><button type="button" onclick="$(\'#module-row' + module_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button></div></div></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#module-' + type + ' tbody').append(html);*/
/* 	*/
/* 	$('#module-' + type + ' tbody select[name=\'layout_module[' + module_row + '][code]\']').val($('#module-' + type + ' tfoot select').val());*/
/* 	*/
/* 	$('#module-' + type + ' select[name*=\'code\']').trigger('change');*/
/* 		*/
/* 	$('#module-' + type + ' tbody input[name*=\'sort_order\']').each(function(i, element) {*/
/* 		$(element).val(i);*/
/* 	});*/
/* 	*/
/* 	module_row++;*/
/* }*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\'code\']', 'change', function() {*/
/* 	var part = this.value.split('.');*/
/* 	*/
/* 	if (!part[1]) {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}');*/
/* 	} else {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}&module_id=' + part[1]);*/
/* 	}*/
/* });*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');*/
/* //--></script> */
/* </div>*/
/* {{ footer }}*/
