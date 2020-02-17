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

/* database/central_columns/add_column.twig */
class __TwigTemplate_745f0c437c8dab85e8e41a450906194b1cc9595af3ae449abb7113cfd49368b6 extends \Twig\Template
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
        echo "<table class=\"central_columns_add_column\" class=\"navigation nospacing nopadding\">
    <tr>
        <td class=\"navigation_separator largescreenonly\"></td>
        <td class=\"central_columns_navigation\">
            ";
        // line 5
        echo ($context["icon"] ?? null);
        echo "
            <form id=\"add_column\" action=\"db_central_columns.php\" method=\"post\">
                ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
                <input type=\"hidden\" name=\"add_column\" value=\"add\">
                <input type=\"hidden\" name=\"pos\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["pos"] ?? null), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"total_rows\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
        echo "\"/>
                ";
        // line 11
        echo ($context["table_drop_down"] ?? null);
        echo "
                <select name=\"column-select\" id=\"column-select\">
                    <option value=\"\" selected=\"selected\">";
        // line 13
        echo _gettext("Select a column.");
        echo "</option>
                </select>
            </form>
        </td>
        <td class=\"navigation_separator largescreenonly\"></td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "database/central_columns/add_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 11,  57 => 10,  53 => 9,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/central_columns/add_column.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/database/central_columns/add_column.twig");
    }
}
