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

/* server/databases/databases_footer.twig */
class __TwigTemplate_341058ebd2c8f0f0b957580a7d95111f694f95b857e1a1a81eaee1e33bb2cf6d extends \Twig\Template
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
        echo "<tfoot>
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
            ";
        // line 7
        echo _gettext("Total");
        echo ": <span id=\"filter-rows-count\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["database_count"] ?? null), "html", null, true);
        // line 9
        echo "</span>
        </th>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            // line 12
            echo "            ";
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 13
                echo "                ";
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["stat"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["format"] ?? null) : null) === "byte")) {
                    // line 14
                    echo "                    ";
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["stat"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["footer"] ?? null) : null), 3, 1);
                    // line 15
                    echo "                    ";
                    $context["value"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["byte_format"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
                    // line 16
                    echo "                    ";
                    $context["unit"] = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["byte_format"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null);
                    // line 17
                    echo "                ";
                } elseif (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["stat"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["format"] ?? null) : null) === "number")) {
                    // line 18
                    echo "                    ";
                    $context["value"] = PhpMyAdmin\Util::formatNumber((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["stat"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["footer"] ?? null) : null), 0);
                    // line 19
                    echo "                ";
                } else {
                    // line 20
                    echo "                    ";
                    $context["value"] = htmlentities((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["stat"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["footer"] ?? null) : null), 0);
                    // line 21
                    echo "                ";
                }
                // line 22
                echo "
                <th class=\"value\">
                    ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["stat"], "description_function", [], "array", true, true, false, 24)) {
                    // line 25
                    echo "                        <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["stat"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["footer"] ?? null) : null)), "html", null, true);
                    echo "\">
                            ";
                    // line 26
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                        </dfn>
                    ";
                } else {
                    // line 29
                    echo "                        ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    ";
                }
                // line 31
                echo "                </th>
                ";
                // line 32
                if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["stat"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["format"] ?? null) : null) === "byte")) {
                    // line 33
                    echo "                    <th class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</th>
                ";
                }
                // line 35
                echo "            ";
            }
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        if (($context["master_replication"] ?? null)) {
            // line 38
            echo "            <th></th>
        ";
        }
        // line 40
        echo "        ";
        if (($context["slave_replication"] ?? null)) {
            // line 41
            echo "            <th></th>
        ";
        }
        // line 43
        echo "        <th></th>
    </tr>
</tfoot>
</table>
</div>

";
        // line 50
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 51
            echo "    ";
            $this->loadTemplate("select_all.twig", "server/databases/databases_footer.twig", 51)->display(twig_to_array(["pma_theme_image" =>             // line 52
($context["pma_theme_image"] ?? null), "text_dir" =>             // line 53
($context["text_dir"] ?? null), "form_name" => "dbStatsForm"]));
            // line 56
            echo "
    ";
            // line 57
            echo PhpMyAdmin\Util::getButtonOrImage("", "mult_submit ajax", _gettext("Drop"), "b_deltbl");
            // line 62
            echo "
";
        }
        // line 64
        echo "
";
        // line 66
        if (twig_test_empty(($context["dbstats"] ?? null))) {
            // line 67
            echo "    ";
            echo call_user_func_array($this->env->getFunction('Message_notice')->getCallable(), [_gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.")]);
            echo "
    <ul>
        <li class=\"li_switch_dbstats\">
            <a href=\"server_databases.php\" data-post=\"";
            // line 70
            echo PhpMyAdmin\Url::getCommon(["dbstats" => "1"], "");
            echo "\" title=\"";
            echo _gettext("Enable statistics");
            echo "\">
                <strong>";
            // line 71
            echo _gettext("Enable statistics");
            echo "</strong>
            </a>
        </li>
    </ul>
";
        }
        // line 76
        echo "</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/databases/databases_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 76,  192 => 71,  186 => 70,  179 => 67,  177 => 66,  174 => 64,  170 => 62,  168 => 57,  165 => 56,  163 => 53,  162 => 52,  160 => 51,  158 => 50,  150 => 43,  146 => 41,  143 => 40,  139 => 38,  136 => 37,  130 => 36,  127 => 35,  121 => 33,  119 => 32,  116 => 31,  110 => 29,  104 => 26,  99 => 25,  97 => 24,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  59 => 11,  55 => 9,  53 => 8,  50 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/databases_footer.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/databases/databases_footer.twig");
    }
}
