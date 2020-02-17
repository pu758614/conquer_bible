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

/* test/add_data.twig */
class __TwigTemplate_f89c9d6b7059a048889f81e626861ccb8109e66b4d17ab612e7fc3e2e3369b1e extends \Twig\Template
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
        echo twig_escape_filter($this->env, ($context["variable1"] ?? null), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, ($context["variable2"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "test/add_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/add_data.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/test/add_data.twig");
    }
}
