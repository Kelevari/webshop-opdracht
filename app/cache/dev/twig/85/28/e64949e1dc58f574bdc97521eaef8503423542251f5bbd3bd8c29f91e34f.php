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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"flash-notice\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        if (array_key_exists("customer", $context)) {
            // line 20
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "getFirstname", array(), "method"), "html", null, true);
            echo "
";
        }
        // line 22
        echo "\t   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <fieldset>

        <!-- Form Name -->
        <legend>Bestelling aan:</legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_firstname\">Firstname:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_lastname\">Lastname:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_address_line_1\">Address line 1:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_line_1", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_address_line_2\">Address line 2:</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_line_2", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_phone_number\">phone:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), "number", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_city_name\">City:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "name", array()), 'row');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"userbundle_customer_city_zip\">Zip:*</label>  
            <div class=\"col-md-5\">
\t           ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), "zip", array()), 'row');
        echo "
            </div>
        </div>

        <!-- Multiple Checkboxes (inline) -->
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"register\">Register?</label>
            <div class=\"col-md-4\">
                <label id=\"button\" class=\"btn btn-info\" for=\"checkbox\">
                    Click here!
                </label>
                <input type=\"checkbox\" id=\"checkbox\" style=\"display:none\">
            </div>
        </div>

        <div id=\"register\" style=\"display:none\">
            <!-- Text input-->
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"userbundle_customer_email_email\">Email:*</label>  
                <div class=\"col-md-5\">
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "email", array()), 'row');
        echo "
                </div>
            </div>

            <!-- Password input-->
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"userbundle_customer_email_profile_password_first\">Password:*</label>
                <div class=\"col-md-5\">
                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "profile", array()), "password", array()), "first", array()), 'row');
        echo "
                </div>
            </div>

            <!-- Password input-->
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"userbundle_customer_email_profile_password_second\">Repeat Password:*</label>
                <div class=\"col-md-5\">
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "profile", array()), "password", array()), "second", array()), 'row');
        echo "
                </div>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class=\"form-group\">
            <div class=\"col-md-push-4 col-md-5\">
\t           ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-push-4 col-md-5\">
                <a class=\"btn btn-danger btn-xs btn-block\" href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("customer");
        echo "\">
                    Cancel
                </a>
            </div>
        </div>
";
    }

    // line 127
    public function block_js($context, array $blocks = array())
    {
        // line 128
        echo "    <script type=\"text/javascript\">
        \$('document').ready(function(){

            \$('#button').click(function(){

                \$('#register').slideToggle('slow');

            });/*\$('#button').click(function(){*/
                
        });/*\$('document').ready(function(){*/
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
        return array (  253 => 128,  250 => 127,  240 => 121,  232 => 116,  221 => 108,  210 => 100,  199 => 92,  176 => 72,  166 => 65,  156 => 58,  146 => 51,  136 => 44,  126 => 37,  116 => 30,  104 => 22,  98 => 20,  96 => 19,  87 => 16,  84 => 15,  79 => 14,  76 => 13,  71 => 11,  57 => 9,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
