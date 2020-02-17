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

/* privileges/choose_user_group.twig */
class __TwigTemplate_462e52e5b032b32a9e4bb0868147e3597217242726380e63d0b4685c7c2678f1 extends \Twig\Template
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
        echo "<form class=\"ajax\" id=\"changeUserGroupForm\" action=\"server_privileges.php\" method=\"post\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["params"] ?? null));
        echo "
    <fieldset id=\"fieldset_user_group_selection\">
        <legend>";
        // line 4
        echo _gettext("User group");
        echo "</legend>
        ";
        // line 5
        echo _gettext("User group");
        echo ":
        ";
        // line 6
        echo PhpMyAdmin\Util::getDropdown("userGroup", ($context["all_user_groups"] ?? null), ($context["user_group"] ?? null), "userGroup_select");
        echo "
        <input type=\"hidden\" name=\"changeUserGroup\" value=\"1\">
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "privileges/choose_user_group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/choose_user_group.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/privileges/choose_user_group.twig");
    }
}
