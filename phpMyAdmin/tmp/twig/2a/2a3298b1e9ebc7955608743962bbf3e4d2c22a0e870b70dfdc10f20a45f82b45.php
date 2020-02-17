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

/* privileges/require_options.twig */
class __TwigTemplate_db726ea8e42918846db733ad50104d389eee51194377f29bd66cd589533e332c extends \Twig\Template
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
        echo "<fieldset>
    <legend>SSL</legend>
    <div id=\"require_ssl_div\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["require_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["require_option"]) {
            // line 5
            echo "            ";
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["require_option"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null) === "ssl_cipher")) {
                // line 6
                echo "                <div id=\"specified_div\" style=\"padding-left:20px;\">
            ";
            }
            // line 8
            echo "            ";
            $this->loadTemplate("privileges/require_options_item.twig", "privileges/require_options.twig", 8)->display(twig_to_array(["require_option" =>             // line 9
$context["require_option"]]));
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['require_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>";
        // line 13
        echo "    </div>";
        // line 14
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "privileges/require_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  65 => 13,  63 => 12,  57 => 11,  55 => 9,  53 => 8,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/require_options.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/privileges/require_options.twig");
    }
}
