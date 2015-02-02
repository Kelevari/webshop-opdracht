<?php

/* SiteBundle:Cart:shoppingCart.html.twig */
class __TwigTemplate_20fdb96fbc8b3c3b78395d2fbd950508dbc29a123a51ddc624b01dc0e3c6d781 extends Twig_Template
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
\t\t<li style=\"float:left;width:100%\">
\t\t\t<p style=\"float:left;width:33.333333333333%\">Product</p>
\t\t\t<p style=\"float:left;width:33.333333333333%;text-align:right\">Aantal</p>
\t\t\t<p style=\"float:left;width:33.333333333333%;text-align:right\">Prijs</p>
\t\t</li>
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    \t\t<li style=\"float:left;width:100%\">
    \t\t\t<p style=\"float:left;width:33.333333333333%\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</p>
    \t\t\t<p style=\"float:left;width:33.333333333333%;text-align:right\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "</p>
    \t\t\t<p style=\"float:left;width:33.333333333333%;text-align:right\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "</p>
    \t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t<li style=\"float:left;width:100%\">
\t\t\t<p style=\"float:left;width:50%\">Totaal:</p>
\t\t\t<p style=\"float:left;width:50%;text-align:right\">27.5</p>
\t\t</li>
\t\t<li style=\"float:left;width:100%\">
\t\t\t<a href=\"/bill\" class=\"btn btn-success\">Plaats bestelling</a>
\t\t</li>
\t\t<li style=\"float:left;width:100%\">
\t\t\t<a href=\"/cart\">Ga naar winkelkarretje</a>
\t\t</li>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Cart:shoppingCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 11,  38 => 10,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
