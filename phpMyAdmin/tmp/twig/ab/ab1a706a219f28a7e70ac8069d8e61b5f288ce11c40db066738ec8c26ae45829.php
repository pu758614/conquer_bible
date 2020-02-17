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

/* test/gettext/pgettext.twig */
class __TwigTemplate_ea2e01966d9e15cf30ceb2a94dd640f45807ce87483d60cd3a559d08ca382f29 extends \Twig\Template
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
        echo _pgettext(        "Text context", "Text");
    }

    public function getTemplateName()
    {
        return "test/gettext/pgettext.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/gettext/pgettext.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/test/gettext/pgettext.twig");
    }
}
