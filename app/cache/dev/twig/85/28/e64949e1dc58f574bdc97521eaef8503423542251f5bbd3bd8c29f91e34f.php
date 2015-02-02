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

\t   ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_firstname\">Firstname:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_lastname\">Lastname:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_address_line_1\">Address line 1:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_line_1", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_address_line_2\">Address line 2:</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_line_2", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_phone_number\">phone:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_city_name\">City:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "name", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_city_zip\">Zip:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "zip", array()), 'row');
        echo "
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
                <label class=\"col-md-4 control-label\" for=\"userbundle_customer_profile_email_email\">Email:</label>  
                <div class=\"col-md-5\">
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "email", array()), 'row');
        echo "
                </div>
            </div>

            <!-- Password input-->
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"userbundle_customer_profile_password\">Password</label>
                <div class=\"col-md-5\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "password", array()), 'row');
        echo "
                </div>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class=\"form-group\">
            <div class=\"col-md-push-4 col-md-5\">
\t           ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-push-4 col-md-5\">
                <a class=\"btn btn-danger btn-xs btn-block\" href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("customer");
        echo "\">
                    Cancel
                </a>
            </div>
        </div>
";
    }

    // line 112
    public function block_js($context, array $blocks = array())
    {
        // line 113
        echo "    <script type=\"text/javascript\">
    \$('#button').click(function(){
      \$('#register').toggle();
    });
    </script>
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
        return array (  219 => 113,  216 => 112,  206 => 106,  198 => 101,  187 => 93,  176 => 85,  154 => 66,  144 => 59,  134 => 52,  124 => 45,  114 => 38,  104 => 31,  94 => 24,  87 => 20,  79 => 14,  76 => 13,  71 => 11,  57 => 9,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
