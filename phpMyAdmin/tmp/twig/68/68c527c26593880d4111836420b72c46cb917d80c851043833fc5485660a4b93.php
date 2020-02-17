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

/* theme_preview.twig */
class __TwigTemplate_a7df3f105827b04fabcca507d17799f763386366f010749612b3684ecb280d83 extends \Twig\Template
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
        echo "<div class=\"theme_preview\">
    <h2>
        ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo ")
    </h2>
    <p>
        <a class=\"take_theme\" name=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" href=\"index.php";
        echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
        echo "\">
            ";
        // line 7
        if ( !twig_test_empty(($context["screen"] ?? null))) {
            // line 8
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, ($context["screen"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                <br>
            ";
        } else {
            // line 11
            echo "                ";
            echo _gettext("No preview available.");
            // line 12
            echo "            ";
        }
        // line 13
        echo "            [ <strong>";
        echo _gettext("Take it");
        echo "</strong> ]
        </a>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "theme_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  71 => 12,  68 => 11,  57 => 8,  55 => 7,  49 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme_preview.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/theme_preview.twig");
    }
}
