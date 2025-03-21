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

/* @PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig */
class __TwigTemplate_226667926f22ccc57b518b6189c148182d73f6b69e0a07500302004ebd613f69 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'addon_card' => [$this, 'block_addon_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/Includes/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid.html.twig", "@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_addon_card($context, array $blocks = [])
    {
        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/card_manage_installed.html.twig", "@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", 28)->display(twig_array_merge($context, ["display_type" => ($context["display_type"] ?? null), "module" => ($context["module"] ?? null), "origin" => ((array_key_exists("origin", $context)) ? (_twig_default_filter(($context["origin"] ?? null), "none")) : ("none")), "category" => ($context["id"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 28,  39 => 27,  29 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "C:\\wamp64\\www\\akimmakako\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\grid_manage_installed.html.twig");
    }
}
