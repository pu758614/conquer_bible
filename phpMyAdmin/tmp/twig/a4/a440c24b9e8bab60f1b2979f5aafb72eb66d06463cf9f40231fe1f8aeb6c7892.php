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

/* server/databases/table_header.twig */
class __TwigTemplate_fd6a877b10f5a5580cbee69061a8340d31bf8828912903664f49f71d3db99086 extends \Twig\Template
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
        echo "<thead>
    <tr>
        ";
        // line 3
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 4
            echo "            <th></th>
        ";
        }
        // line 6
        echo "        <th>
            <a href=\"server_databases.php";
        // line 7
        echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
        echo "\">
                ";
        // line 8
        echo _gettext("Database");
        // line 9
        echo "                ";
        echo (((($context["sort_by"] ?? null) == "SCHEMA_NAME")) ? (PhpMyAdmin\Util::getImage(("s_" .         // line 10
($context["sort_order"] ?? null)),         // line 11
($context["sort_order_text"] ?? null))) : (""));
        // line 12
        echo "
            </a>
        </th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            // line 16
            echo "            ";
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 17
                echo "                ";
                $context["url_params"] = twig_array_merge(($context["url_params"] ?? null), ["sort_by" =>                 // line 18
$context["stat_name"], "sort_order" => ((((                // line 19
($context["sort_by"] ?? null) == $context["stat_name"]) && (($context["sort_order"] ?? null) == "desc"))) ? ("asc") : ("desc"))]);
                // line 21
                echo "
                <th";
                // line 22
                echo ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["stat"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["format"] ?? null) : null) === "byte")) ? (" colspan=\"2\"") : (""));
                echo ">
                    <a href=\"server_databases.php";
                // line 23
                echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
                echo "\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["stat"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["disp_name"] ?? null) : null), "html", null, true);
                echo "
                        ";
                // line 25
                echo (((($context["sort_by"] ?? null) == $context["stat_name"])) ? (PhpMyAdmin\Util::getImage(("s_" .                 // line 26
($context["sort_order"] ?? null)),                 // line 27
($context["sort_order_text"] ?? null))) : (""));
                // line 28
                echo "
                    </a>
                </th>
            ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        if (($context["master_replication"] ?? null)) {
            // line 34
            echo "            <th>";
            echo _gettext("Master replication");
            echo "</th>
        ";
        }
        // line 36
        echo "        ";
        if (($context["slave_replication"] ?? null)) {
            // line 37
            echo "            <th>";
            echo _gettext("Slave replication");
            echo "</th>
        ";
        }
        // line 39
        echo "        <th>";
        echo _gettext("Action");
        echo "</th>
    </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  121 => 37,  118 => 36,  112 => 34,  109 => 33,  103 => 32,  97 => 28,  95 => 27,  94 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  78 => 21,  76 => 19,  75 => 18,  73 => 17,  70 => 16,  66 => 15,  61 => 12,  59 => 11,  58 => 10,  56 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/table_header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/databases/table_header.twig");
    }
}
