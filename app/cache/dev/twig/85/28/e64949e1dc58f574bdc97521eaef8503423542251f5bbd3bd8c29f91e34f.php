<?php

/* UserBundle:Customer:new.html.twig */
class __TwigTemplate_8528e64949e1dc58f574bdc97521eaef8503423542251f5bbd3bd8c29f91e34f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SiteBundle:Layout:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1534868_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1534868_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1534868_shop-homepage_1.css");
            // line 9
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "1534868"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1534868") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1534868.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Bestelling aan:</legend>

\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Firstname:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'row');
        echo "
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Lastname:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'row');
        echo "
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Address line 1:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_line_1", array()), 'row');
        echo "
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Address line 2:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_line_2", array()), 'row');
        echo "
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">phone:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">City:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "name", array()), 'row');
        echo "
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Zip:*</label>  
  <div class=\"col-md-5\">
\t    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "zip", array()), 'row');
        echo "
  </div>
</div>
\t";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("customer");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Customer:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 66,  153 => 63,  147 => 60,  138 => 54,  129 => 48,  120 => 42,  111 => 36,  102 => 30,  93 => 24,  86 => 20,  78 => 14,  75 => 13,  70 => 11,  56 => 9,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
