<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig */
class __TwigTemplate_299a365067be616f341c0b764dcfd08b38921fb41a4a17a21bb97bdd62aeb1f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        list($context["orderBy"], $context["orderWay"]) =         [$this->getAttribute($this->getAttribute(($context["grid"] ?? null), "sorting", []), "order_by", []), $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "sorting", []), "order_way", [])];
        // line 29
        echo "
";
        // line 30
        if ((($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "sortable", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "sortable", [])) && ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records_total", []) > 0))) {
            // line 31
            echo "  ";
            echo $context["ps"]->getsortable_column_header($this->getAttribute(($context["column"] ?? null), "name", []), $this->getAttribute(($context["column"] ?? null), "id", []), ($context["orderBy"] ?? null), ($context["orderWay"] ?? null), $this->getAttribute(($context["grid"] ?? null), "form_prefix", []));
            echo "
";
        } else {
            // line 33
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "name", []), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 33,  45 => 31,  43 => 30,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig", "C:\\wamp64\\www\\akimmakako\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Header\\Content\\default.html.twig");
    }
}
