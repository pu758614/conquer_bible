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

/* test/gettext/gettext.twig */
class __TwigTemplate_537be28b2a2d8a04d060fefee3b9bb8e0c7b8c1aedc88358f20b59a45b6b4f5e extends \Twig\Template
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
        echo _gettext("Text");
    }

    public function getTemplateName()
    {
        return "test/gettext/gettext.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/gettext/gettext.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/test/gettext/gettext.twig");
    }
}
