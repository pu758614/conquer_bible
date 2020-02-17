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

/* server/engines/engine.twig */
class __TwigTemplate_72ef5ca8085674fd1f599ff23adcba4a8606da483d546354577520a7572b1d34 extends \Twig\Template
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
        echo "<h2>
    ";
        // line 2
        echo PhpMyAdmin\Util::getImage("b_engine");
        echo "
    ";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
    ";
        // line 4
        echo PhpMyAdmin\Util::showMySQLDocu(($context["help_page"] ?? null));
        echo "
</h2>
<p><em>";
        // line 6
        echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
        echo "</em></p>

";
        // line 8
        if (( !twig_test_empty(($context["info_pages"] ?? null)) && twig_test_iterable(($context["info_pages"] ?? null)))) {
            // line 9
            echo "    <p>
        <strong>[</strong>
            ";
            // line 11
            if (twig_test_empty(($context["page"] ?? null))) {
                // line 12
                echo "                <strong>";
                echo _gettext("Variables");
                echo "</strong>
            ";
            } else {
                // line 14
                echo "                <a href=\"server_engines.php";
                // line 15
                echo PhpMyAdmin\Url::getCommon(["engine" => ($context["engine"] ?? null)]);
                echo "\">
                    ";
                // line 16
                echo _gettext("Variables");
                // line 17
                echo "                </a>
            ";
            }
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["info_pages"] ?? null));
            foreach ($context['_seq'] as $context["current"] => $context["label"]) {
                // line 20
                echo "                <strong>|</strong>
                ";
                // line 21
                if (((isset($context["page"]) || array_key_exists("page", $context)) && (($context["page"] ?? null) == $context["current"]))) {
                    // line 22
                    echo "                    <strong>";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "</strong>
                ";
                } else {
                    // line 24
                    echo "                    <a href=\"server_engines.php";
                    // line 25
                    echo PhpMyAdmin\Url::getCommon(["engine" => ($context["engine"] ?? null), "page" => $context["current"]]);
                    echo "\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['current'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        <strong>]</strong>
    </p>
";
        }
        // line 33
        echo "
";
        // line 34
        if ( !twig_test_empty(($context["page_output"] ?? null))) {
            // line 35
            echo "    ";
            echo ($context["page_output"] ?? null);
            echo "
";
        } else {
            // line 37
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["support"] ?? null), "html", null, true);
            echo "</p>
    ";
            // line 38
            echo ($context["variables"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "server/engines/engine.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 38,  134 => 37,  128 => 35,  126 => 34,  123 => 33,  118 => 30,  112 => 29,  106 => 26,  102 => 25,  100 => 24,  94 => 22,  92 => 21,  89 => 20,  84 => 19,  80 => 17,  78 => 16,  74 => 15,  72 => 14,  66 => 12,  64 => 11,  60 => 9,  58 => 8,  53 => 6,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/engines/engine.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/engines/engine.twig");
    }
}
