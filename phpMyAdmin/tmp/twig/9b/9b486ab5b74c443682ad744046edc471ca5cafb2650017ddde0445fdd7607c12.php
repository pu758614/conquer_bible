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

/* privileges/initials_row.twig */
class __TwigTemplate_26416e9a06bd6a885f1c870fb5d11cbef0055522fc6d90d9c32a53facb65e7b1 extends \Twig\Template
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
        echo "<table id=\"initials_table\" cellspacing=\"5\">
    <tr>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["array_initials"] ?? null));
        foreach ($context['_seq'] as $context["tmp_initial"] => $context["initial_was_found"]) {
            // line 4
            echo "            ";
            if ( !($context["tmp_initial"] === null)) {
                // line 5
                echo "                ";
                if ($context["initial_was_found"]) {
                    // line 6
                    echo "                    <td>
                        <a class=\"ajax";
                    // line 8
                    echo ((((isset($context["initial"]) || array_key_exists("initial", $context)) && (($context["initial"] ?? null) === $context["tmp_initial"]))) ? (" active") : (""));
                    // line 9
                    echo "\" href=\"server_privileges.php";
                    // line 10
                    echo PhpMyAdmin\Url::getCommon(["initial" => $context["tmp_initial"]]);
                    echo "\">";
                    // line 11
                    echo $context["tmp_initial"];
                    // line 12
                    echo "</a>
                    </td>
                ";
                } else {
                    // line 15
                    echo "                    <td>";
                    echo $context["tmp_initial"];
                    echo "</td>
                ";
                }
                // line 17
                echo "            ";
            }
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tmp_initial'], $context['initial_was_found'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        <td>
            <a href=\"server_privileges.php";
        // line 21
        echo PhpMyAdmin\Url::getCommon(["showall" => 1]);
        echo "\" class=\"nowrap\">
                ";
        // line 22
        echo _gettext("Show all");
        // line 23
        echo "            </a>
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "privileges/initials_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  90 => 22,  86 => 21,  83 => 19,  77 => 18,  74 => 17,  68 => 15,  63 => 12,  61 => 11,  58 => 10,  56 => 9,  54 => 8,  51 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/initials_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/privileges/initials_row.twig");
    }
}
