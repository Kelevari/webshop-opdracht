<?php

/* SiteBundle:Layout:index.html.twig */
class __TwigTemplate_448ebd736764d12fb6424c661a64adbfb6f5ada67d9e1fd504ec8931cef6f5bf extends Twig_Template
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
        $this->env->loadTemplate("SiteBundle:Layout:left.html.twig")->display($context);
        // line 15
        echo "<div class=\"col-md-9\">
    <form>
        <table id=\"frieten\" class=\"table table-striped table-hover\">
            <fieldset>
                <thead>
                    <th colspan=\"5\">Frieten</th>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fries"]) ? $context["fries"] : $this->getContext($context, "fries")));
        foreach ($context['_seq'] as $context["_key"] => $context["frite"]) {
            // line 24
            echo "                        <tr>
                            <td style=\"width:65%\">
                                ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["frite"], "size", array()), "html", null, true);
            echo "
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:10%\">
                                <p class=\"pull-right\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["frite"], "price", array()), "html", null, true);
            echo "</p>
                                <span class=\"glyphicon glyphicon-euro\"></span>
                            </td>
                            <td style=\"width:15%\">
                                <a class=\"btn btn-success\" href=\"#\">
                                    Add to cart <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </fieldset>
        </table>
        <table id=\"snacks\" class=\"table table-striped table-hover\">
            <fieldset>
                <thead>
                    <th colspan=\"5\">Snacks</th>
                </thead>
                <tbody>
                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["snacks"]) ? $context["snacks"] : $this->getContext($context, "snacks")));
        foreach ($context['_seq'] as $context["_key"] => $context["snack"]) {
            // line 53
            echo "                        <tr>
                            <td style=\"width:65%\">
                               ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["snack"], "name", array()), "html", null, true);
            echo " 
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:10%\">
                               <p class=\"pull-right\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["snack"], "price", array()), "html", null, true);
            echo "</p> 
                               <span class=\"glyphicon glyphicon-euro\"></span>
                            </td>
                            <td style=\"width:15%\">
                                <a class=\"btn btn-success\" href=\"#\">
                                    Add to cart <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </a>
                            </td>
                        </tr>
                        ";
            // line 71
            if (($this->getAttribute($context["snack"], "special", array()) == 1)) {
                // line 72
                echo "                        <tr>
                            <td style=\"width:65%\">
                               ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["snack"], "name", array()), "html", null, true);
                echo "&nbsp;special 
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:10%\">
                               <p class=\"pull-right\">";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["snack"], "specialPrice", array()), "html", null, true);
                echo "</p> 
                               <span class=\"glyphicon glyphicon-euro\"></span>
                            </td>
                            <td style=\"width:15%\">
                                <a class=\"btn btn-success\" href=\"#\">
                                    Add to cart <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </a>
                            </td>
                        </tr>
                        ";
            }
            // line 91
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['snack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </tbody>
            </fieldset>
        </table>
        <table id=\"drank\" class=\"table table-striped table-hover\">
            <fieldset>
                <thead>
                    <th colspan=\"5\">Dranken</th>
                </thead>
                <tbody>
                    ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["drinks"]) ? $context["drinks"] : $this->getContext($context, "drinks")));
        foreach ($context['_seq'] as $context["_key"] => $context["drink"]) {
            // line 102
            echo "                        <tr>
                            <td style=\"width:65%\">
                               ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["drink"], "name", array()), "html", null, true);
            echo " 
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:5%\">
                            </td>
                            <td style=\"width:10%\">
                               <p class=\"pull-right\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["drink"], "price", array()), "html", null, true);
            echo "</p>
                               <span class=\"glyphicon glyphicon-euro\"></span> 
                            </td>
                            <td style=\"width:15%\">
                                <a class=\"btn btn-success\" href=\"#\">
                                    Add to cart <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </tbody>
            </fieldset>
        </table>
        <table id=\"koud\" class=\"table table-striped table-hover\">
            <fieldset>
                <thead>
                    <th colspan=\"5\">Koude Sauzen</th>
                </thead>
                <tbody>
                    ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sausCold"]) ? $context["sausCold"] : $this->getContext($context, "sausCold")));
        foreach ($context['_seq'] as $context["_key"] => $context["cold"]) {
            // line 131
            echo "                        <tr>
                            <td style=\"width:65%\">
                               ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["cold"], "name", array()), "html", null, true);
            echo " 
                            </td>
                            <td style=\"width:5%\">
                                <p class=\"btn btn-primary\" style=\"background-color:#ccc;border-color:#888;color:#333\">klein</p>
                            </td>
                            <td style=\"width:5%\">
                                <p class=\"btn btn-primary\" style=\"background-color:#ccc;border-color:#888;color:#333\">groot</p>
                            </td>
                            <td style=\"width:10%\">
                               <p class=\"pull-right\">0.6</p> 
                               <span class=\"glyphicon glyphicon-euro\"></span>
                            </td>
                            <td style=\"width:15%\">
                                <a class=\"btn btn-success\" href=\"#\">
                                    Add to cart <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                </tbody>
            </fieldset>
        </table>
        <table id=\"warm\" class=\"table table-striped table-hover\">
            <fieldset>
                <thead>
                    <th colspan=\"5\">Warme sauzen</th>
                </thead>
                <tbody>
                    ";
        // line 161
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sausHot"]) ? $context["sausHot"] : $this->getContext($context, "sausHot")));
        foreach ($context['_seq'] as $context["_key"] => $context["hot"]) {
            // line 162
            echo "                        <tr>
                            <td style=\"width:65%\">
                               ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["hot"], "name", array()), "html", null, true);
            echo " 
                            </td>
                            <td style=\"width:5%\">
                                <p class=\"btn btn-primary\" style=\"background-color:#ccc;border-color:#888;color:#333\">klein</p>
                            </td>
                            <td style=\"width:5%\">
                                <p class=\"btn btn-primary\" style=\"background-color:#ccc;border-color:#888;color:#333\">groot</p>
                            </td>
                            <td style=\"width:10%\">
                               <span class=\"glyphicon glyphicon-euro\"></span>
                               <p class=\"pull-right\">1.2</p> 
                            </td>
                            <td style=\"width:15%\">
                                <a class=\"btn btn-success\" href=\"#\">
                                    Add to cart <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                </tbody>
            </fieldset>
        </table>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Layout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 183,  308 => 164,  304 => 162,  300 => 161,  289 => 152,  264 => 133,  260 => 131,  256 => 130,  245 => 121,  229 => 111,  219 => 104,  215 => 102,  211 => 101,  200 => 92,  194 => 91,  181 => 81,  171 => 74,  167 => 72,  165 => 71,  153 => 62,  143 => 55,  139 => 53,  135 => 52,  124 => 43,  108 => 33,  98 => 26,  94 => 24,  90 => 23,  80 => 15,  78 => 14,  75 => 13,  70 => 11,  56 => 9,  52 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
