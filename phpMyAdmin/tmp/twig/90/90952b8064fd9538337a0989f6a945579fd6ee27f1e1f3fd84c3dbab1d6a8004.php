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

/* login/twofactor/application_configure.twig */
class __TwigTemplate_84d409809a31960f9bcaac137234da724232f381e9dbb573a951a9115c7b1b6b extends \Twig\Template
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
        echo PhpMyAdmin\Url::getHiddenInputs();
        echo "
";
        // line 2
        if ((isset($context["image"]) || array_key_exists("image", $context))) {
            // line 3
            echo "<p>
    ";
            // line 4
            echo _gettext("Please scan following QR code into the two-factor authentication app on your device and enter authentication code it generates.");
            // line 5
            echo "</p>
<p>
    <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\">
</p>
";
        } else {
            // line 10
            echo "<p>
    ";
            // line 11
            echo _gettext("Please enter following secret/key into the two-factor authentication app on your device and enter authentication code it generates.");
            // line 12
            echo "</p>
<p>
    ";
            // line 14
            echo _gettext("OTP url:");
            echo " <strong>";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "</strong>
</p>
";
        }
        // line 17
        echo "<p>
    ";
        // line 18
        echo _gettext("Secret/key:");
        echo " <strong>";
        echo twig_escape_filter($this->env, ($context["secret"] ?? null), "html", null, true);
        echo "</strong>
</p>
<p>
    <label>";
        // line 21
        echo _gettext("Authentication code:");
        echo " <input type=\"text\" name=\"2fa_code\" autocomplete=\"off\"></label>
</p>
";
    }

    public function getTemplateName()
    {
        return "login/twofactor/application_configure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  78 => 18,  75 => 17,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  52 => 7,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/twofactor/application_configure.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/login/twofactor/application_configure.twig");
    }
}
