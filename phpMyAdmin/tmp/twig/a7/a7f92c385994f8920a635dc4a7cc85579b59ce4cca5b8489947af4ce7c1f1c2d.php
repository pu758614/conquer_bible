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

/* server/binlog/log_selector.twig */
class __TwigTemplate_54afa876409c2fd8b5e640c7a6db44a98be5710f5bf92d70eb891c3d409bbf86 extends \Twig\Template
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
        echo "<form action=\"server_binlog.php\" method=\"post\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "
    <fieldset>
        <legend>
            ";
        // line 5
        echo _gettext("Select binary log to view");
        // line 6
        echo "        </legend>
        ";
        // line 7
        $context["full_size"] = 0;
        // line 8
        echo "        <select name=\"log\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["binary_logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_log"]) {
            // line 10
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["each_log"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Log_name"] ?? null) : null), "html", null, true);
            echo "\"";
            // line 11
            echo ((((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["each_log"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Log_name"] ?? null) : null) == ($context["log"] ?? null))) ? (" selected=\"selected\"") : (""));
            echo ">
                    ";
            // line 12
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["each_log"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Log_name"] ?? null) : null), "html", null, true);
            echo "
                    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", true, true, false, 13)) {
                // line 14
                echo "                        (";
                echo twig_escape_filter($this->env, twig_join_filter(PhpMyAdmin\Util::formatByteDown((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["each_log"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["File_size"] ?? null) : null), 3, 2), " "), "html", null, true);
                echo ")
                        ";
                // line 15
                $context["full_size"] = (($context["full_size"] ?? null) + (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["each_log"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["File_size"] ?? null) : null));
                // line 16
                echo "                    ";
            }
            // line 17
            echo "                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["binary_logs"] ?? null)), "html", null, true);
        echo "
        ";
        // line 21
        echo _gettext("Files");
        echo ",
        ";
        // line 22
        if ((($context["full_size"] ?? null) > 0)) {
            // line 23
            echo "            ";
            echo twig_escape_filter($this->env, twig_join_filter(PhpMyAdmin\Util::formatByteDown(($context["full_size"] ?? null)), " "), "html", null, true);
            echo "
        ";
        }
        // line 25
        echo "    </fieldset>
    <fieldset class=\"tblFooters\">
        <input type=\"submit\" value=\"";
        // line 27
        echo _gettext("Go");
        echo "\" />
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "server/binlog/log_selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  110 => 25,  104 => 23,  102 => 22,  98 => 21,  94 => 20,  91 => 19,  84 => 17,  81 => 16,  79 => 15,  74 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/binlog/log_selector.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/binlog/log_selector.twig");
    }
}
