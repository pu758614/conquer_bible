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

/* server/plugins/section.twig */
class __TwigTemplate_edc6f0775a78b97c0a2ff2bf6962fb5aae425300be14661df1677ba75b558d3c extends \Twig\Template
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
        echo "<div class=\"responsivetable\">
    <table class=\"data_full_width\" id=\"plugins-";
        // line 3
        echo twig_escape_filter($this->env, preg_replace("/[^a-z]/", "", twig_lower_filter($this->env, ($context["plugin_type"] ?? null))), "html", null, true);
        echo "\">
        <caption class=\"tblHeaders\">
            ";
        // line 5
        echo twig_escape_filter($this->env, ($context["plugin_type"] ?? null), "html", null, true);
        echo "
        </caption>
        <thead>
            <tr>
                <th>";
        // line 9
        echo _gettext("Plugin");
        echo "</th>
                <th>";
        // line 10
        echo _gettext("Description");
        echo "</th>
                <th>";
        // line 11
        echo _gettext("Version");
        echo "</th>
                <th>";
        // line 12
        echo _gettext("Author");
        echo "</th>
                <th>";
        // line 13
        echo _gettext("License");
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugin_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 18
            echo "                <tr class=\"noclick\">
                    <th>
                        ";
            // line 20
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["plugin"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["plugin_name"] ?? null) : null), "html", null, true);
            echo "
                        ";
            // line 21
            if ( !(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["plugin"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["is_active"] ?? null) : null)) {
                // line 22
                echo "                            <small class=\"attention\">
                                ";
                // line 23
                echo _gettext("disabled");
                // line 24
                echo "                            </small>
                        ";
            }
            // line 26
            echo "                    </th>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["plugin"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["plugin_description"] ?? null) : null), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["plugin"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["plugin_type_version"] ?? null) : null), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["plugin"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["plugin_author"] ?? null) : null), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["plugin"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["plugin_license"] ?? null) : null), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/plugins/section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  98 => 26,  94 => 24,  92 => 23,  89 => 22,  87 => 21,  83 => 20,  79 => 18,  75 => 17,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  45 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/plugins/section.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/plugins/section.twig");
    }
}
