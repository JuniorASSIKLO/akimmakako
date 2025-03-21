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

/* @PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig */
class __TwigTemplate_874b79c40821b6235d1122097ae94f8235c960f12a4ed864a0fcda8b2d4747a8 extends \Twig\Template
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
        echo "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenuData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "    ";
            $context["refMenu"] = $this->getAttribute($context["menu"], "refMenu", []);
            // line 28
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? null), "html", null, true);
            echo "\">
      <a class=\"dropdown-item module-category-reset\">
        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
      </a>

      <a 
        class=\"dropdown-item module-category-menu module-category-recently-used\"
        data-category-ref=\"recently-used\"
        data-category-display-name=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recently used", [], "Admin.Modules.Feature"), "html", null, true);
            echo "\"
      >
        ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recently used", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
      </a>

      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "subMenu", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 49
                echo "          <a 
            class=\"dropdown-item module-category-menu\"
            ";
                // line 51
                if ($this->getAttribute($context["subMenu"], "tab", [])) {
                    echo "data-category-tab=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "tab", []), "html", null, true);
                    echo "\"";
                }
                // line 52
                echo "            data-category-ref=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "refMenu", []), "html", null, true);
                echo "\"
            data-category-display-name=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["subMenu"], "name", []), [], "Admin.Modules.Feature"), "html", null, true);
                echo "\"
          >
            ";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["subMenu"], "name", []), [], "Admin.Modules.Feature"), "html", null, true);
                echo "<span class=\"float-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["subMenu"], "modules", [])), "html", null, true);
                echo "</span>
          </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 60,  114 => 58,  103 => 55,  98 => 53,  93 => 52,  87 => 51,  83 => 49,  79 => 48,  73 => 45,  68 => 43,  59 => 37,  54 => 35,  46 => 30,  40 => 28,  37 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", "C:\\wamp64\\www\\akimmakako\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\dropdown_categories.html.twig");
    }
}
