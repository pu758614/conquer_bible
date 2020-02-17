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

/* server/collations/charsets.twig */
class __TwigTemplate_81e6545a21fc4227d6d3aa5036e1473249af5326ed49f4988ecbc543bd0fb5ab extends \Twig\Template
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
        echo "<div id=\"div_mysql_charset_collations\">
    <table class=\"data noclick\">
        <thead>
            <tr>
                <th id=\"collationHeader\">";
        // line 5
        echo _gettext("Collation");
        echo "</th>
                <th>";
        // line 6
        echo _gettext("Description");
        echo "</th>
            </tr>
        </thead>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mysql_charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["current_charset"]) {
            // line 10
            echo "            <tr>
                <th colspan=\"2\" class=\"right\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $context["current_charset"], "html", null, true);
            echo "
                    ";
            // line 13
            if ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["mysql_charsets_desc"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["current_charset"]] ?? null) : null))) {
                // line 14
                echo "                        (<em>";
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["mysql_charsets_desc"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["current_charset"]] ?? null) : null), "html", null, true);
                echo "</em>)
                    ";
            }
            // line 16
            echo "                </th>
            </tr>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["mysql_collations"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["current_charset"]] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["current_collation"]) {
                // line 19
                echo "                <tr class=\"";
                echo ((((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["mysql_dft_collations"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["current_charset"]] ?? null) : null) == $context["current_collation"])) ? (" marked") : (""));
                echo "\">
                    <td>";
                // line 20
                echo twig_escape_filter($this->env, $context["current_collation"], "html", null, true);
                echo "</td>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr($context["current_collation"]), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/collations/charsets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  99 => 24,  90 => 21,  86 => 20,  81 => 19,  77 => 18,  73 => 16,  67 => 14,  65 => 13,  61 => 12,  57 => 10,  53 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/collations/charsets.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/collations/charsets.twig");
    }
}
