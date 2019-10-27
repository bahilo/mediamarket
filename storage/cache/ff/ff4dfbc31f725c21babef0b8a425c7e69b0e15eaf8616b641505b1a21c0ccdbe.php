<?php

/* OPC170_02/template/product/tt_quickview/tt_qvcontainer.twig */
class __TwigTemplate_114930b937e22be877ab1627249ed598d0bcb0d786a309da20ef19cee4158413 extends Twig_Template
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
        echo "
<div id=\"quickview-content\">
    <!-- Load quickview content into here -->
</div>

<div id=\"quickview-bg-block\">
    <!-- Quick View deep background -->
</div>

<div class=\"quickview-load-img\">
    <img src=\"";
        // line 11
        echo (isset($context["tt_quickview_loader_img"]) ? $context["tt_quickview_loader_img"] : null);
        echo "\" alt=\"\" />
</div>

<div>
    <input type=\"hidden\" id=\"qv-text-close\" value=\"";
        // line 15
        echo (isset($context["text_qv_close"]) ? $context["text_qv_close"] : null);
        echo "\" />
</div>

<script type=\"text/javascript\">
    \$('#quickview-bg-block').click(function () {
        tt_quickview.closeQVFrame();
    })
</script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/product/tt_quickview/tt_qvcontainer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  31 => 11,  19 => 1,);
    }
}
/* */
/* <div id="quickview-content">*/
/*     <!-- Load quickview content into here -->*/
/* </div>*/
/* */
/* <div id="quickview-bg-block">*/
/*     <!-- Quick View deep background -->*/
/* </div>*/
/* */
/* <div class="quickview-load-img">*/
/*     <img src="{{ tt_quickview_loader_img }}" alt="" />*/
/* </div>*/
/* */
/* <div>*/
/*     <input type="hidden" id="qv-text-close" value="{{ text_qv_close }}" />*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $('#quickview-bg-block').click(function () {*/
/*         tt_quickview.closeQVFrame();*/
/*     })*/
/* </script>*/
