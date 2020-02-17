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

/* database/central_columns/table_navigation.twig */
class __TwigTemplate_ffe19f3c14578ab24de9aaaf60d2c9cc86062828620512bfbe3e2e9aeebb577b extends \Twig\Template
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
        echo "<table style=\"display:inline-block;max-width:49%\" class=\"navigation nospacing nopadding\">
    <tr>
        <td class=\"navigation_separator\"></td>
        ";
        // line 4
        if (((($context["pos"] ?? null) - ($context["max_rows"] ?? null)) >= 0)) {
            // line 5
            echo "            <td>
                <form action=\"db_central_columns.php\" method=\"post\">
                    ";
            // line 7
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
                    <input type=\"hidden\" name=\"pos\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, (($context["pos"] ?? null) - ($context["max_rows"] ?? null)), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"total_rows\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"submit\" name=\"navig\" class=\"ajax\" value=\"&lt\" />
                </form>
            </td>
        ";
        }
        // line 14
        echo "        ";
        if ((($context["nb_total_page"] ?? null) > 1)) {
            // line 15
            echo "            <td>
                <form action=\"db_central_columns.php\" method=\"post\">
                    ";
            // line 17
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
                    <input type=\"hidden\" name=\"total_rows\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
            echo "\"/>
                    ";
            // line 19
            echo ($context["page_selector"] ?? null);
            echo "
                </form>
            </td>
        ";
        }
        // line 23
        echo "        ";
        if (((($context["pos"] ?? null) + ($context["max_rows"] ?? null)) < ($context["total_rows"] ?? null))) {
            // line 24
            echo "            <td>
                <form action=\"db_central_columns.php\" method=\"post\">
                    ";
            // line 26
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
                    <input type=\"hidden\" name=\"pos\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, (($context["pos"] ?? null) + ($context["max_rows"] ?? null)), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"total_rows\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"submit\" name=\"navig\" class=\"ajax\" value=\"&gt\" />
                </form>
            </td>
        ";
        }
        // line 33
        echo "        </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td>
            <span>";
        // line 37
        echo _gettext("Filter rows");
        echo ":</span>
            <input type=\"text\" class=\"filter_rows\" placeholder=\"";
        // line 38
        echo _gettext("Search this table");
        echo "\">
        </td>
        <td class=\"navigation_separator\"></td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "database/central_columns/table_navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  115 => 37,  109 => 33,  101 => 28,  97 => 27,  93 => 26,  89 => 24,  86 => 23,  79 => 19,  75 => 18,  71 => 17,  67 => 15,  64 => 14,  56 => 9,  52 => 8,  48 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/central_columns/table_navigation.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/database/central_columns/table_navigation.twig");
    }
}
