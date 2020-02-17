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

/* server/databases/table_row.twig */
class __TwigTemplate_b58e14dd6e0a0bc6386426f83d657535d928c7fe02c57c31cfe3df3bd1f048c2 extends \Twig\Template
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
        echo "<tr";
        if (($context["tr_class"] ?? null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["tr_class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["current"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["SCHEMA_NAME"] ?? null) : null)), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 3
            echo "        <td class=\"tool\">
            <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["current"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["SCHEMA_NAME"] ?? null) : null), "html", null, true);
            echo "\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["current"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["SCHEMA_NAME"] ?? null) : null), "html", null, true);
            echo "\"";
            // line 7
            if (($context["is_system_schema"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " />
        </td>
    ";
        }
        // line 10
        echo "    <td class=\"name\">
        <a href=\"";
        // line 11
        echo PhpMyAdmin\Util::getScriptNameForOption(($context["default_tab_database"] ?? null), "database");
        // line 12
        echo PhpMyAdmin\Url::getCommon(["db" => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["current"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["SCHEMA_NAME"] ?? null) : null)]);
        echo "\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, sprintf(_gettext("Jump to database '%s'"), twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["current"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["SCHEMA_NAME"] ?? null) : null))), "html", null, true);
        echo "\">
            ";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["current"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["SCHEMA_NAME"] ?? null) : null), "html", null, true);
        echo "
        </a>
    </td>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            // line 18
            echo "        ";
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["current"] ?? null)))) {
                // line 19
                echo "            ";
                if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["stat"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["format"] ?? null) : null) === "byte")) {
                    // line 20
                    echo "                ";
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["current"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["stat_name"]] ?? null) : null), 3, 1);
                    // line 21
                    echo "                ";
                    $context["value"] = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["byte_format"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null);
                    // line 22
                    echo "                ";
                    $context["unit"] = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["byte_format"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[1] ?? null) : null);
                    // line 23
                    echo "            ";
                } elseif (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["stat"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["format"] ?? null) : null) === "number")) {
                    // line 24
                    echo "                ";
                    $context["value"] = PhpMyAdmin\Util::formatNumber((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["current"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[$context["stat_name"]] ?? null) : null), 0);
                    // line 25
                    echo "            ";
                } else {
                    // line 26
                    echo "                ";
                    $context["value"] = htmlentities((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["current"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["stat_name"]] ?? null) : null), 0);
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "
            <td class=\"value\">
                ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["stat"], "description_function", [], "array", true, true, false, 30)) {
                    // line 31
                    echo "                    <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["current"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["stat_name"]] ?? null) : null)), "html", null, true);
                    echo "\">
                        ";
                    // line 32
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    </dfn>
                ";
                } else {
                    // line 35
                    echo "                    ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                ";
                }
                // line 37
                echo "            </td>
            ";
                // line 38
                if (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["stat"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["format"] ?? null) : null) === "byte")) {
                    // line 39
                    echo "                <td class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</td>
            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    ";
        // line 44
        if (($context["master_replication_status"] ?? null)) {
            // line 45
            echo "        <td class=\"tool center\">
            ";
            // line 46
            echo ($context["master_replication"] ?? null);
            echo "
        </td>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if (($context["slave_replication_status"] ?? null)) {
            // line 51
            echo "        <td class=\"tool center\">
            ";
            // line 52
            echo ($context["slave_replication"] ?? null);
            echo "
        </td>
    ";
        }
        // line 55
        echo "
    <td class=\"tool\">
        <a class=\"server_databases\" data=\"";
        // line 58
        echo PhpMyAdmin\Sanitize::jsFormat((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["current"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["SCHEMA_NAME"] ?? null) : null));
        echo "\" href=\"server_privileges.php";
        // line 59
        echo PhpMyAdmin\Url::getCommon(["db" => (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce =         // line 60
($context["current"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["SCHEMA_NAME"] ?? null) : null), "checkprivsdb" => (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b =         // line 61
($context["current"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["SCHEMA_NAME"] ?? null) : null)]);
        // line 62
        echo "\" title=\"";
        // line 63
        echo twig_escape_filter($this->env, sprintf(_gettext("Check privileges for database \"%s\"."), twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["current"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["SCHEMA_NAME"] ?? null) : null))), "html", null, true);
        echo "\">
            ";
        // line 64
        echo PhpMyAdmin\Util::getIcon("s_rights", _gettext("Check privileges"));
        echo "
        </a>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 64,  203 => 63,  201 => 62,  199 => 61,  198 => 60,  197 => 59,  194 => 58,  190 => 55,  184 => 52,  181 => 51,  179 => 50,  176 => 49,  170 => 46,  167 => 45,  165 => 44,  162 => 43,  156 => 42,  153 => 41,  147 => 39,  145 => 38,  142 => 37,  136 => 35,  130 => 32,  125 => 31,  123 => 30,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  85 => 17,  79 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  59 => 7,  56 => 6,  53 => 5,  50 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/table_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/databases/table_row.twig");
    }
}
