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

/* server/variables/link_template.twig */
class __TwigTemplate_a38bdf61de881242de89466aa32f3e9609bcce773b2b6796bb691757fd14fb51 extends \Twig\Template
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
        echo "<a href=\"";
        echo ($context["url"] ?? null);
        echo "\" class=\"ajax saveLink hide\">
    ";
        // line 2
        echo PhpMyAdmin\Util::getIcon("b_save", _gettext("Save"));
        echo "
</a>
<a href=\"#\" class=\"cancelLink hide\">
    ";
        // line 5
        echo PhpMyAdmin\Util::getIcon("b_close", _gettext("Cancel"));
        echo "
</a>
";
        // line 7
        echo PhpMyAdmin\Util::getImage("b_help", _gettext("Documentation"), ["class" => "hide", "id" => "docImage"]);
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "server/variables/link_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  53 => 7,  48 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/variables/link_template.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/server/variables/link_template.twig");
    }
}
