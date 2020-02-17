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

/* server/databases/databases_header.twig */
class __TwigTemplate_78b49f5fd061ec6be1a5076df5c1645a50154b2a9b3cb00bba34704fb4bc3f77 extends \Twig\Template
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
        echo "<div id=\"tableslistcontainer\">
    ";
        // line 2
        echo PhpMyAdmin\Util::getListNavigator(        // line 3
($context["database_count"] ?? null),         // line 4
($context["pos"] ?? null),         // line 5
($context["url_params"] ?? null), "server_databases.php", "frame_content",         // line 8
($context["max_db_list"] ?? null));
        // line 9
        echo "
    <form class=\"ajax\" action=\"server_databases.php\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">
        ";
        // line 11
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "
        ";
        // line 12
        $context["url_params"] = twig_array_merge(($context["url_params"] ?? null), ["sort_by" => "SCHEMA_NAME", "sort_order" => ((((        // line 14
($context["sort_by"] ?? null) == "SCHEMA_NAME") && (($context["sort_order"] ?? null) == "asc"))) ? ("desc") : ("asc"))]);
        // line 16
        echo "        <div class=\"responsivetable\">
            <table id=\"tabledatabases\" class=\"data\">
                ";
        // line 18
        $this->loadTemplate("server/databases/table_header.twig", "server/databases/databases_header.twig", 18)->display(twig_to_array(["url_params" =>         // line 19
($context["url_params"] ?? null), "sort_by" =>         // line 20
($context["sort_by"] ?? null), "sort_order" =>         // line 21
($context["sort_order"] ?? null), "sort_order_text" => (((        // line 22
($context["sort_order"] ?? null) == "asc")) ? (_gettext("Ascending")) : (_gettext("Descending"))), "column_order" =>         // line 23
($context["column_order"] ?? null), "first_database" =>         // line 24
($context["first_database"] ?? null), "master_replication" =>         // line 25
($context["master_replication"] ?? null), "slave_replication" =>         // line 26
($context["slave_replication"] ?? null), "is_superuser" =>         // line 27
($context["is_superuser"] ?? null), "allow_user_drop_database" =>         // line 28
($context["allow_user_drop_database"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "server/databases/databases_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  70 => 27,  69 => 26,  68 => 25,  67 => 24,  66 => 23,  65 => 22,  64 => 21,  63 => 20,  62 => 19,  61 => 18,  57 => 16,  55 => 14,  54 => 12,  50 => 11,  46 => 9,  44 => 8,  43 => 5,  42 => 4,  41 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/databases_header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/databases/databases_header.twig");
    }
}
