<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* select_all.twig */
class __TwigTemplate_8ae6b7bae7613f5aa9cecb45230caf5c1f16b86beaf467249c6f5cd7d3ba29ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<img class=\"selectallarrow\" src=\"";
        echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
        echo "arrow_";
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo ".png\"
    width=\"38\" height=\"22\" alt=\"";
        // line 2
        echo _gettext("With selected:");
        echo "\" />
<input type=\"checkbox\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_checkall\" class=\"checkall_box\"
    title=\"";
        // line 4
        echo _gettext("Check all");
        echo "\" />
<label for=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_checkall\">";
        echo _gettext("Check all");
        echo "</label>
<i style=\"margin-left: 2em\">";
        // line 6
        echo _gettext("With selected:");
        echo "</i>
";
    }

    public function getTemplateName()
    {
        return "select_all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "select_all.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/select_all.twig");
    }
}
