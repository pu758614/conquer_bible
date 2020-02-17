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

/* table/tracking/selectable_tables.twig */
class __TwigTemplate_db001433e0bc9ccdce1c077762e452442735177691d3429bd1f88253731ea739 extends \Twig\Template
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
        echo "<form method=\"post\" action=\"tbl_tracking.php";
        echo ($context["url_query"] ?? null);
        echo "\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    <select name=\"table\" class=\"autosubmit\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 5), "html", null, true);
            echo "\"";
            // line 6
            echo (((twig_get_attribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 6) == ($context["selected_table"] ?? null))) ? (" selected") : (""));
            echo ">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "db_name", [], "any", false, false, false, 7), "html", null, true);
            echo " . ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 7), "html", null, true);
            echo "
                ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "is_tracked", [], "any", false, false, false, 8)) {
                // line 9
                echo "                    (";
                echo _gettext("active");
                echo ")
                ";
            } else {
                // line 11
                echo "                    (";
                echo _gettext("not active");
                echo ")
                ";
            }
            // line 13
            echo "            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </select>
    <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
</form>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/selectable_tables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  79 => 13,  73 => 11,  67 => 9,  65 => 8,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/selectable_tables.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/table/tracking/selectable_tables.twig");
    }
}
