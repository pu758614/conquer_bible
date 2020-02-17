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

/* login/twofactor/application.twig */
class __TwigTemplate_9f206a2e62c6604ebaa5c7536ba331d0927ad91e5339b25b199dd08ecb8d27aa extends \Twig\Template
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
        echo "<p>
<label>";
        // line 2
        echo _gettext("Authentication code:");
        echo " <input type=\"text\" name=\"2fa_code\" autocomplete=\"off\" /></label>
</p>
<p>";
        // line 4
        echo _gettext("Open the two-factor authentication app on your device to view your authentication code and verify your identity.");
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "login/twofactor/application.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/twofactor/application.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/login/twofactor/application.twig");
    }
}
