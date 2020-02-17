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

/* server/variables/variable_row.twig */
class __TwigTemplate_84c866995f1592bcab9dcc57306d4041044f5b447f007c405aece1be8807ef94 extends \Twig\Template
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
        echo "<tr class=\"var-row ";
        echo twig_escape_filter($this->env, ($context["row_class"] ?? null), "html", null, true);
        echo "\" data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["name"] ?? null)), "html", null, true);
        echo "\">
    <td class=\"var-action\">
    ";
        // line 3
        if (($context["editable"] ?? null)) {
            // line 4
            echo "        <a href=\"#\" data-variable=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"editLink\">";
            echo PhpMyAdmin\Util::getIcon("b_edit", _gettext("Edit"));
            echo "</a>
    ";
        } else {
            // line 6
            echo "        <span title=\"";
            echo _gettext("This is a read-only variable and can not be edited");
            echo "\" class=\"read_only_var\">
            ";
            // line 7
            echo PhpMyAdmin\Util::getIcon("bd_edit", _gettext("Edit"));
            echo "
        </span>
    ";
        }
        // line 10
        echo "    </td>
    <td class=\"var-name\">
    ";
        // line 12
        if ((($context["doc_link"] ?? null) != null)) {
            // line 13
            echo "        <span title=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["name"] ?? null), ["_" => " "]), "html", null, true);
            echo "\">
            ";
            // line 14
            echo PhpMyAdmin\Util::showMySQLDocu((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["doc_link"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null), false, (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["doc_link"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[2] ?? null) : null) . "_") . (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["doc_link"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null)), true);
            echo "
            ";
            // line 15
            echo twig_replace_filter(twig_escape_filter($this->env, ($context["name"] ?? null)), ["_" => "&nbsp;"]);
            echo "
            </a>
        </span>
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["name"] ?? null), ["_" => " "]), "html", null, true);
            echo "
    ";
        }
        // line 21
        echo "    </td>
    <td class=\"var-value value";
        // line 22
        echo ((($context["is_superuser"] ?? null)) ? (" editable") : (""));
        echo "\">
    ";
        // line 23
        if ((($context["is_html_formatted"] ?? null) == false)) {
            // line 24
            echo "        ";
            echo twig_replace_filter(twig_escape_filter($this->env, ($context["value"] ?? null)), ["," => ",&#8203;"]);
            echo "
    ";
        } else {
            // line 26
            echo "        ";
            echo ($context["value"] ?? null);
            echo "
    ";
        }
        // line 28
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "server/variables/variable_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 28,  109 => 26,  103 => 24,  101 => 23,  97 => 22,  94 => 21,  88 => 19,  81 => 15,  77 => 14,  72 => 13,  70 => 12,  66 => 10,  60 => 7,  55 => 6,  47 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/variables/variable_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/variables/variable_row.twig");
    }
}
