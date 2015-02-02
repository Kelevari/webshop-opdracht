<?php

/* SiteBundle:Forms:register.html.twig */
class __TwigTemplate_a81b3a20cb7b4ab30d1da14046143cab7b7c779cde04179654b4141ecca1f3bd extends Twig_Template
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
            'js' => array($this, 'block_js'),
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

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Firstname:*</label>  
  <div class=\"col-md-5\">
  <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"Firstname\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"lastname\">Lastname:*</label>  
  <div class=\"col-md-5\">
  <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"Lastname\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"addressLine1\">Address Line 1:*</label>  
  <div class=\"col-md-5\">
  <input id=\"addressLine1\" name=\"addressLine1\" type=\"text\" placeholder=\"Address line 1\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"addressLine2\">Address line 2:</label>  
  <div class=\"col-md-5\">
  <input id=\"addressLine2\" name=\"addressLine2\" type=\"text\" placeholder=\"Address line 2\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"zip\">Zip Code:*</label>  
  <div class=\"col-md-5\">
  <input id=\"zip\" name=\"zip\" type=\"text\" placeholder=\"Zip code\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"city\">City:*</label>  
  <div class=\"col-md-5\">
  <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"City\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"phone\">Phone number:*</label>  
  <div class=\"col-md-5\">
  <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"Phone number\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"register\">Register?</label>
  <div class=\"col-md-4\">
      <p id=\"button\" class=\"btn btn-info\">
        Click here!
      </p>
  </div>
</div>

<div id=\"register\" style=\"display:none\">
<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Email:</label>  
  <div class=\"col-md-5\">
  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Password input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"password\">Password</label>
  <div class=\"col-md-5\">
    <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Password\" class=\"form-control input-md\">
    
  </div>
</div>
</div>
<!-- Button (Double) -->
<div class=\"form-group\">
  <div class=\"col-md-push-4 col-md-5\">
    <button id=\"true\" name=\"true\" class=\"btn btn-success btn-lg btn-block\">Order</button>
    <button id=\"false\" name=\"false\" class=\"btn btn-danger btn-xs btn-block\">Cancel</button>
  </div>
</div>

</fieldset>
</form>
";
    }

    // line 123
    public function block_js($context, array $blocks = array())
    {
        // line 124
        echo "    <script type=\"text/javascript\">
    \$('#button').click(function(){
      \$('#register').toggle();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Forms:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 124,  191 => 123,  79 => 14,  76 => 13,  71 => 11,  57 => 9,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
