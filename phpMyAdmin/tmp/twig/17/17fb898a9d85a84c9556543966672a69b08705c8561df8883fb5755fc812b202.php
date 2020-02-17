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

/* privileges/resource_limits.twig */
class __TwigTemplate_7762ea58ffaf2179d2dff4de451d99e9d3dac4742edfacfae386296b9494e1f3 extends \Twig\Template
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
    <legend>";
        // line 2
        echo _gettext("Resource limits");
        echo "</legend>
    <p>
        <small>
            <em>";
        // line 5
        echo _gettext("Note: Setting these options to 0 (zero) removes the limit.");
        echo "</em>
        </small>
    </p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["limits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 9
            echo "        ";
            $this->loadTemplate("privileges/resource_limit_item.twig", "privileges/resource_limits.twig", 9)->display(twig_to_array(["limit" =>             // line 10
$context["limit"]]));
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "privileges/resource_limits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  60 => 12,  58 => 10,  56 => 9,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/resource_limits.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/privileges/resource_limits.twig");
    }
}
