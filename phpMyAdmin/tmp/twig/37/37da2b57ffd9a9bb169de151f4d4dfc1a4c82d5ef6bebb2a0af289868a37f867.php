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

/* columns_definitions/column_default.twig */
class __TwigTemplate_f40898ed978fec6eade3dd20ee2daa443b72338c382a9caddc06ebece7c2b965 extends \Twig\Template
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
        // line 3
        ob_start(function () { return ''; });
        echo _pgettext(        "for default", "None");
        $context["translation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        $context["default_options"] = ["NONE" =>         // line 5
($context["translation"] ?? null), "USER_DEFINED" => _gettext("As defined:"), "NULL" => "NULL", "CURRENT_TIMESTAMP" => "CURRENT_TIMESTAMP"];
        // line 10
        echo "
";
        // line 12
        $context["default_value"] = "";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultValue", [], "array", true, true, false, 13)) {
            // line 14
            echo "    ";
            $context["default_value"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["column_meta"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["DefaultValue"] ?? null) : null);
        }
        // line 16
        if ((($context["type_upper"] ?? null) == "BIT")) {
            // line 17
            echo "    ";
            $context["default_value"] = PhpMyAdmin\Util::convertBitDefaultValue((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["column_meta"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["DefaultValue"] ?? null) : null));
        } elseif (((        // line 18
($context["type_upper"] ?? null) == "BINARY") || (($context["type_upper"] ?? null) == "VARBINARY"))) {
            // line 19
            echo "    ";
            $context["default_value"] = bin2hex((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["column_meta"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["DefaultValue"] ?? null) : null));
        }
        // line 21
        echo "
<select name=\"field_default_type[";
        // line 22
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 23
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    class=\"default_type\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["default_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 26
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 27) && ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =             // line 28
($context["column_meta"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["DefaultType"] ?? null) : null) == $context["key"]))) {
                // line 29
                echo "                selected=\"selected\"";
            }
            // line 30
            echo ">
            ";
            // line 31
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</select>
";
        // line 35
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 36
            echo "    <textarea name=\"field_default_value[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        cols=\"15\"
        class=\"textfield
        default_value\">";
            // line 39
            echo twig_escape_filter($this->env, ($context["default_value"] ?? null), "html", null, true);
            echo "</textarea>
";
        } else {
            // line 41
            echo "    <input type=\"text\"
        name=\"field_default_value[";
            // line 42
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        size=\"12\"
        value=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["default_value"] ?? null), "html", null, true);
            echo "\"
        class=\"textfield default_value\" />
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  126 => 42,  123 => 41,  118 => 39,  111 => 36,  109 => 35,  106 => 34,  97 => 31,  94 => 30,  91 => 29,  89 => 28,  88 => 27,  84 => 26,  80 => 25,  73 => 23,  69 => 22,  66 => 21,  62 => 19,  60 => 18,  57 => 17,  55 => 16,  51 => 14,  49 => 13,  47 => 12,  44 => 10,  42 => 5,  41 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_default.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/columns_definitions/column_default.twig");
    }
}
