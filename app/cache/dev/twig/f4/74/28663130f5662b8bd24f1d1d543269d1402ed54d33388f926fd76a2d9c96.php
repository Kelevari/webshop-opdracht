<?php

/* SiteBundle:Cart:cart.html.twig */
class __TwigTemplate_f47428663130f5662b8bd24f1d1d543269d1402ed54d33388f926fd76a2d9c96 extends Twig_Template
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
        echo "\t";
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
        echo "<div class=\"col-md-12\">
<table class=\"table table-striped table-hover\">
\t<tr>
\t\t<th>
\t\t\tProduct
\t\t</th>
\t\t<th>
\t\t\tAantal
\t\t</th>
\t\t<th>
\t\t\tPrijs
\t\t</th>
\t</tr>
";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t<tr>
    \t<td>
    \t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "
    \t</td>
    \t<td>
    \t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "
    \t</td>
    \t<td>
    \t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "
    \t</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t<tr>
\t\t<td colspan=\"2\">Totaal:</td>
\t\t<td>27.5</td>
\t</tr>
</table>
<a href=\"/bill\" class=\"btn btn-success\">Plaats bestelling</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Cart:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  113 => 36,  107 => 33,  101 => 30,  97 => 28,  93 => 27,  78 => 14,  75 => 13,  70 => 11,  56 => 9,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
