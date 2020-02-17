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

/* privileges/privileges_summary.twig */
class __TwigTemplate_de0f2e2848f7282ee88d9878e4a33fc33be0b93ca1ef55d086ba3d937fe5553d extends \Twig\Template
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
        echo "<form class=\"submenu-item\" action=\"server_privileges.php\" id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs();
        echo "
    <input type=\"hidden\" name=\"username\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"hostname\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
        echo "\" />

    <fieldset>
        <legend data-submenu-label=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["sub_menu_label"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 8
        echo twig_escape_filter($this->env, ($context["legend"] ?? null), "html", null, true);
        echo "
        </legend>

        <table class=\"data\">
            <thead>
                <tr>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, ($context["type_label"] ?? null), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo _gettext("Privileges");
        echo "</th>
                    <th>";
        // line 16
        echo _gettext("Grant");
        echo "</th>
                    ";
        // line 17
        if ((($context["type"] ?? null) == "database")) {
            // line 18
            echo "                        <th>";
            echo _gettext("Table-specific privileges");
            echo "</th>
                    ";
        } elseif ((        // line 19
($context["type"] ?? null) == "table")) {
            // line 20
            echo "                        <th>";
            echo _gettext("Column-specific privileges");
            echo "</th>
                    ";
        }
        // line 22
        echo "                    <th colspan=\"2\">";
        echo _gettext("Action");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 27
        if ((twig_length_filter($this->env, ($context["privileges"] ?? null)) == 0)) {
            // line 28
            echo "                    ";
            $context["colspan"] = (((($context["type"] ?? null) == "database")) ? (7) : ((((($context["type"] ?? null) == "table")) ? (6) : (5))));
            // line 29
            echo "                    <tr>
                        <td colspan=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["colspan"] ?? null), "html", null, true);
            echo "\"><center><em>";
            echo _gettext("None");
            echo "</em></center></td>
                    </tr>
                ";
        } else {
            // line 33
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["privileges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 34
                echo "                        ";
                $this->loadTemplate("privileges/privileges_summary_row.twig", "privileges/privileges_summary.twig", 34)->display(twig_to_array(twig_array_merge(                // line 35
$context["privilege"], ["type" => ($context["type"] ?? null)])));
                // line 37
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                ";
        }
        // line 39
        echo "            </tbody>
        </table>

        ";
        // line 42
        if ((($context["type"] ?? null) == "database")) {
            // line 43
            echo "            ";
            $this->loadTemplate("privileges/add_privileges_database.twig", "privileges/privileges_summary.twig", 43)->display(twig_to_array(["databases" =>             // line 44
($context["databases"] ?? null)]));
            // line 46
            echo "        ";
        } elseif ((($context["type"] ?? null) == "table")) {
            // line 47
            echo "            ";
            $this->loadTemplate("privileges/add_privileges_table.twig", "privileges/privileges_summary.twig", 47)->display(twig_to_array(["database" =>             // line 48
($context["database"] ?? null), "tables" =>             // line 49
($context["tables"] ?? null)]));
            // line 51
            echo "        ";
        } else {
            // line 52
            echo "            ";
            $this->loadTemplate("privileges/add_privileges_routine.twig", "privileges/privileges_summary.twig", 52)->display(twig_to_array(["database" =>             // line 53
($context["database"] ?? null), "routines" =>             // line 54
($context["routines"] ?? null)]));
            // line 56
            echo "        ";
        }
        // line 57
        echo "    </fieldset>

    <fieldset class=\"tblFooters\">
        <input type=\"submit\" value=\"";
        // line 60
        echo _gettext("Go");
        echo "\" />
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "privileges/privileges_summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 60,  169 => 57,  166 => 56,  164 => 54,  163 => 53,  161 => 52,  158 => 51,  156 => 49,  155 => 48,  153 => 47,  150 => 46,  148 => 44,  146 => 43,  144 => 42,  139 => 39,  136 => 38,  130 => 37,  128 => 35,  126 => 34,  121 => 33,  113 => 30,  110 => 29,  107 => 28,  105 => 27,  96 => 22,  90 => 20,  88 => 19,  83 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  60 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/privileges_summary.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/privileges/privileges_summary.twig");
    }
}
