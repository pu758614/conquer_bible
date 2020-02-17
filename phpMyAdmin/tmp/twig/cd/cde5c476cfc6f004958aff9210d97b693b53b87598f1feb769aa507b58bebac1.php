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

/* test/gettext/plural_notes.twig */
class __TwigTemplate_2888f9477cd1f774feb9efff46f97da214cf7c8d460590052f67e1e649074ccd extends \Twig\Template
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
        // l10n: Number of tables
        echo strtr(_ngettext("One table", "%count% tables", abs(        // line 3
($context["table_count"] ?? null))), array("%count%" => abs(($context["table_count"] ?? null)), ));
    }

    public function getTemplateName()
    {
        return "test/gettext/plural_notes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/gettext/plural_notes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/test/gettext/plural_notes.twig");
    }
}
