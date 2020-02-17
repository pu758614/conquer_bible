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

/* table/tracking/activate_deactivate.twig */
class __TwigTemplate_1038617080796cf0719fea93ec75ffcaac3b21fcaadad3296e0584655e034b33 extends \Twig\Template
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
        echo "<div>
    <form method=\"post\" action=\"tbl_tracking.php";
        // line 2
        echo ($context["url_query"] ?? null);
        echo "\">
        ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
        <fieldset>
            <legend>
                ";
        // line 6
        if ((($context["action"] ?? null) == "activate")) {
            // line 7
            echo "                    ";
            $context["legend"] = _gettext("Activate tracking for %s");
            // line 8
            echo "                    ";
            $context["value"] = "activate_now";
            // line 9
            echo "                    ";
            $context["button"] = _gettext("Activate now");
            // line 10
            echo "                ";
        } elseif ((($context["action"] ?? null) == "deactivate")) {
            // line 11
            echo "                    ";
            $context["legend"] = _gettext("Deactivate tracking for %s");
            // line 12
            echo "                    ";
            $context["value"] = "deactivate_now";
            // line 13
            echo "                    ";
            $context["button"] = _gettext("Deactivate now");
            // line 14
            echo "                ";
        } else {
            // line 15
            echo "                    ";
            $context["legend"] = "";
            // line 16
            echo "                    ";
            $context["value"] = "";
            // line 17
            echo "                    ";
            $context["button"] = "";
            // line 18
            echo "                ";
        }
        // line 19
        echo "
                ";
        // line 20
        echo twig_escape_filter($this->env, sprintf(($context["legend"] ?? null), ((($context["db"] ?? null) . ".") . ($context["table"] ?? null))), "html", null, true);
        echo "
            </legend>
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_version"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"toggle_activation\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
        echo "\" />
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/activate_deactivate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  100 => 23,  96 => 22,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/activate_deactivate.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/table/tracking/activate_deactivate.twig");
    }
}
