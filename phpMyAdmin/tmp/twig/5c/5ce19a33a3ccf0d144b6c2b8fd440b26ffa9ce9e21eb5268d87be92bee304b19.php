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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_b1bd0dce3e32bb28f11323046faa80cee809c1c722e3b809ac456cdac6697887 extends \Twig\Template
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
        // line 2
        $context["ci"] = 0;
        // line 3
        echo "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        echo "
<td class=\"center\">
    ";
        // line 10
        echo "    ";
        $this->loadTemplate("columns_definitions/column_name.twig", "columns_definitions/column_attributes.twig", 10)->display(twig_to_array(["column_number" =>         // line 11
($context["column_number"] ?? null), "ci" =>         // line 12
($context["ci"] ?? null), "ci_offset" =>         // line 13
($context["ci_offset"] ?? null), "column_meta" =>         // line 14
($context["column_meta"] ?? null), "cfg_relation" =>         // line 15
($context["cfg_relation"] ?? null), "max_rows" =>         // line 16
($context["max_rows"] ?? null)]));
        // line 18
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 19
        echo "</td>
<td class=\"center\">
    ";
        // line 22
        echo "    ";
        $this->loadTemplate("columns_definitions/column_type.twig", "columns_definitions/column_attributes.twig", 22)->display(twig_to_array(["column_number" =>         // line 23
($context["column_number"] ?? null), "ci" =>         // line 24
($context["ci"] ?? null), "ci_offset" =>         // line 25
($context["ci_offset"] ?? null), "column_meta" =>         // line 26
($context["column_meta"] ?? null), "type_upper" =>         // line 27
($context["type_upper"] ?? null)]));
        // line 29
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 30
        echo "</td>
<td class=\"center\">
    ";
        // line 33
        echo "    ";
        $this->loadTemplate("columns_definitions/column_length.twig", "columns_definitions/column_attributes.twig", 33)->display(twig_to_array(["column_number" =>         // line 34
($context["column_number"] ?? null), "ci" =>         // line 35
($context["ci"] ?? null), "ci_offset" =>         // line 36
($context["ci_offset"] ?? null), "length_values_input_size" =>         // line 37
($context["length_values_input_size"] ?? null), "length_to_display" =>         // line 38
($context["length"] ?? null)]));
        // line 40
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 41
        echo "</td>
<td class=\"center\">
    ";
        // line 44
        echo "    ";
        $this->loadTemplate("columns_definitions/column_default.twig", "columns_definitions/column_attributes.twig", 44)->display(twig_to_array(["column_number" =>         // line 45
($context["column_number"] ?? null), "ci" =>         // line 46
($context["ci"] ?? null), "ci_offset" =>         // line 47
($context["ci_offset"] ?? null), "column_meta" =>         // line 48
($context["column_meta"] ?? null), "type_upper" =>         // line 49
($context["type_upper"] ?? null), "char_editing" =>         // line 50
($context["char_editing"] ?? null)]));
        // line 52
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 53
        echo "</td>
<td class=\"center\">
    ";
        // line 56
        echo "    ";
        echo PhpMyAdmin\Charsets::getCollationDropdownBox(        // line 57
($context["dbi"] ?? null),         // line 58
($context["disable_is"] ?? null), (("field_collation[" .         // line 59
($context["column_number"] ?? null)) . "]"), ((("field_" .         // line 60
($context["column_number"] ?? null)) . "_") . (($context["ci"] ?? null) - ($context["ci_offset"] ?? null))), (( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =         // line 61
($context["column_meta"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Collation"] ?? null) : null))) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["column_meta"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Collation"] ?? null) : null)) : (null)), false);
        // line 63
        echo "
    ";
        // line 64
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 65
        echo "</td>
<td class=\"center\">
    ";
        // line 68
        echo "    ";
        $this->loadTemplate("columns_definitions/column_attribute.twig", "columns_definitions/column_attributes.twig", 68)->display(twig_to_array(["column_number" =>         // line 69
($context["column_number"] ?? null), "ci" =>         // line 70
($context["ci"] ?? null), "ci_offset" =>         // line 71
($context["ci_offset"] ?? null), "column_meta" =>         // line 72
($context["column_meta"] ?? null), "extracted_columnspec" =>         // line 73
($context["extracted_columnspec"] ?? null), "submit_attribute" =>         // line 74
($context["submit_attribute"] ?? null), "attribute_types" =>         // line 75
($context["attribute_types"] ?? null)]));
        // line 77
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 78
        echo "</td>
<td class=\"center\">
    ";
        // line 81
        echo "    ";
        $this->loadTemplate("columns_definitions/column_null.twig", "columns_definitions/column_attributes.twig", 81)->display(twig_to_array(["column_number" =>         // line 82
($context["column_number"] ?? null), "ci" =>         // line 83
($context["ci"] ?? null), "ci_offset" =>         // line 84
($context["ci_offset"] ?? null), "column_meta" =>         // line 85
($context["column_meta"] ?? null)]));
        // line 87
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 88
        echo "</td>
";
        // line 89
        if (((isset($context["change_column"]) || array_key_exists("change_column", $context)) &&  !twig_test_empty(($context["change_column"] ?? null)))) {
            // line 90
            echo "    ";
            // line 91
            echo "    <td class=\"center\">
        ";
            // line 92
            $this->loadTemplate("columns_definitions/column_adjust_privileges.twig", "columns_definitions/column_attributes.twig", 92)->display(twig_to_array(["column_number" =>             // line 93
($context["column_number"] ?? null), "ci" =>             // line 94
($context["ci"] ?? null), "ci_offset" =>             // line 95
($context["ci_offset"] ?? null), "privs_available" =>             // line 96
($context["privs_available"] ?? null)]));
            // line 98
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 99
            echo "    </td>
";
        }
        // line 101
        if ( !($context["is_backup"] ?? null)) {
            // line 102
            echo "    ";
            // line 103
            echo "    <td class=\"center\">
        ";
            // line 104
            $this->loadTemplate("columns_definitions/column_indexes.twig", "columns_definitions/column_attributes.twig", 104)->display(twig_to_array(["column_number" =>             // line 105
($context["column_number"] ?? null), "ci" =>             // line 106
($context["ci"] ?? null), "ci_offset" =>             // line 107
($context["ci_offset"] ?? null), "column_meta" =>             // line 108
($context["column_meta"] ?? null)]));
            // line 110
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 111
            echo "    </td>
";
        }
        // line 113
        echo "<td class=\"center\">
    ";
        // line 115
        echo "    ";
        $this->loadTemplate("columns_definitions/column_auto_increment.twig", "columns_definitions/column_attributes.twig", 115)->display(twig_to_array(["column_number" =>         // line 116
($context["column_number"] ?? null), "ci" =>         // line 117
($context["ci"] ?? null), "ci_offset" =>         // line 118
($context["ci_offset"] ?? null), "column_meta" =>         // line 119
($context["column_meta"] ?? null)]));
        // line 121
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 122
        echo "</td>
<td class=\"center\">
    ";
        // line 125
        echo "    ";
        $this->loadTemplate("columns_definitions/column_comment.twig", "columns_definitions/column_attributes.twig", 125)->display(twig_to_array(["column_number" =>         // line 126
($context["column_number"] ?? null), "ci" =>         // line 127
($context["ci"] ?? null), "ci_offset" =>         // line 128
($context["ci_offset"] ?? null), "max_length" =>         // line 129
($context["max_length"] ?? null), "value" => ((((twig_get_attribute($this->env, $this->source,         // line 130
($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 130) && twig_test_iterable(        // line 131
($context["comments_map"] ?? null))) && twig_get_attribute($this->env, $this->source,         // line 132
($context["comments_map"] ?? null), (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["column_meta"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Field"] ?? null) : null), [], "array", true, true, false, 132))) ? (twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =         // line 133
($context["comments_map"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[(($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["column_meta"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["Field"] ?? null) : null)] ?? null) : null))) : (""))]));
        // line 135
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 136
        echo "</td>
 ";
        // line 138
        if (($context["is_virtual_columns_supported"] ?? null)) {
            // line 139
            echo "    <td class=\"center\">
        ";
            // line 140
            $this->loadTemplate("columns_definitions/column_virtuality.twig", "columns_definitions/column_attributes.twig", 140)->display(twig_to_array(["column_number" =>             // line 141
($context["column_number"] ?? null), "ci" =>             // line 142
($context["ci"] ?? null), "ci_offset" =>             // line 143
($context["ci_offset"] ?? null), "column_meta" =>             // line 144
($context["column_meta"] ?? null), "char_editing" =>             // line 145
($context["char_editing"] ?? null), "expression" => ((twig_get_attribute($this->env, $this->source,             // line 146
($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 146)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["column_meta"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Expression"] ?? null) : null)) : ("")), "options" =>             // line 147
($context["options"] ?? null)]));
            // line 149
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 150
            echo "    </td>
";
        }
        // line 153
        if ((isset($context["fields_meta"]) || array_key_exists("fields_meta", $context))) {
            // line 154
            echo "    ";
            $context["current_index"] = 0;
            // line 155
            echo "    ";
            $context["cols"] = (twig_length_filter($this->env, ($context["move_columns"] ?? null)) - 1);
            // line 156
            echo "    ";
            $context["break"] = false;
            // line 157
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["cols"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["mi"]) {
                // line 158
                echo "      ";
                if (((twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["move_columns"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["mi"]] ?? null) : null), "name", [], "any", false, false, false, 158) == (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["column_meta"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["Field"] ?? null) : null)) &&  !($context["break"] ?? null))) {
                    // line 159
                    echo "        ";
                    $context["current_index"] = $context["mi"];
                    // line 160
                    echo "        ";
                    $context["break"] = true;
                    // line 161
                    echo "      ";
                }
                // line 162
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "
    <td class=\"center\">
        ";
            // line 165
            $this->loadTemplate("columns_definitions/move_column.twig", "columns_definitions/column_attributes.twig", 165)->display(twig_to_array(["column_number" =>             // line 166
($context["column_number"] ?? null), "ci" =>             // line 167
($context["ci"] ?? null), "ci_offset" =>             // line 168
($context["ci_offset"] ?? null), "column_meta" =>             // line 169
($context["column_meta"] ?? null), "move_columns" =>             // line 170
($context["move_columns"] ?? null), "current_index" =>             // line 171
($context["current_index"] ?? null)]));
            // line 173
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 174
            echo "    </td>
";
        }
        // line 176
        echo "
";
        // line 177
        if ((((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["cfg_relation"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["mimework"] ?? null) : null) && ($context["browse_mime"] ?? null)) && (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["cfg_relation"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["commwork"] ?? null) : null))) {
            // line 178
            echo "    <td class=\"center\">
        ";
            // line 180
            echo "        ";
            $this->loadTemplate("columns_definitions/mime_type.twig", "columns_definitions/column_attributes.twig", 180)->display(twig_to_array(["column_number" =>             // line 181
($context["column_number"] ?? null), "ci" =>             // line 182
($context["ci"] ?? null), "ci_offset" =>             // line 183
($context["ci_offset"] ?? null), "column_meta" =>             // line 184
($context["column_meta"] ?? null), "available_mime" =>             // line 185
($context["available_mime"] ?? null), "mime_map" =>             // line 186
($context["mime_map"] ?? null)]));
            // line 188
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 189
            echo "    </td>
    <td class=\"center\">
        ";
            // line 192
            echo "        ";
            $this->loadTemplate("columns_definitions/transformation.twig", "columns_definitions/column_attributes.twig", 192)->display(twig_to_array(["column_number" =>             // line 193
($context["column_number"] ?? null), "ci" =>             // line 194
($context["ci"] ?? null), "ci_offset" =>             // line 195
($context["ci_offset"] ?? null), "column_meta" =>             // line 196
($context["column_meta"] ?? null), "available_mime" =>             // line 197
($context["available_mime"] ?? null), "mime_map" =>             // line 198
($context["mime_map"] ?? null), "type" => "transformation"]));
            // line 201
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 202
            echo "    </td>
    <td class=\"center\">
        ";
            // line 205
            echo "        ";
            $this->loadTemplate("columns_definitions/transformation_option.twig", "columns_definitions/column_attributes.twig", 205)->display(twig_to_array(["column_number" =>             // line 206
($context["column_number"] ?? null), "ci" =>             // line 207
($context["ci"] ?? null), "ci_offset" =>             // line 208
($context["ci_offset"] ?? null), "column_meta" =>             // line 209
($context["column_meta"] ?? null), "mime_map" =>             // line 210
($context["mime_map"] ?? null), "type_prefix" => ""]));
            // line 213
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 214
            echo "    </td>
    <td class=\"center\">
        ";
            // line 217
            echo "        ";
            $this->loadTemplate("columns_definitions/transformation.twig", "columns_definitions/column_attributes.twig", 217)->display(twig_to_array(["column_number" =>             // line 218
($context["column_number"] ?? null), "ci" =>             // line 219
($context["ci"] ?? null), "ci_offset" =>             // line 220
($context["ci_offset"] ?? null), "column_meta" =>             // line 221
($context["column_meta"] ?? null), "available_mime" =>             // line 222
($context["available_mime"] ?? null), "mime_map" =>             // line 223
($context["mime_map"] ?? null), "type" => "input_transformation"]));
            // line 226
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 227
            echo "    </td>
    <td class=\"center\">
        ";
            // line 230
            echo "        ";
            $this->loadTemplate("columns_definitions/transformation_option.twig", "columns_definitions/column_attributes.twig", 230)->display(twig_to_array(["column_number" =>             // line 231
($context["column_number"] ?? null), "ci" =>             // line 232
($context["ci"] ?? null), "ci_offset" =>             // line 233
($context["ci_offset"] ?? null), "column_meta" =>             // line 234
($context["column_meta"] ?? null), "mime_map" =>             // line 235
($context["mime_map"] ?? null), "type_prefix" => "input_"]));
            // line 238
            echo "        ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 239
            echo "    </td>
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 239,  384 => 238,  382 => 235,  381 => 234,  380 => 233,  379 => 232,  378 => 231,  376 => 230,  372 => 227,  369 => 226,  367 => 223,  366 => 222,  365 => 221,  364 => 220,  363 => 219,  362 => 218,  360 => 217,  356 => 214,  353 => 213,  351 => 210,  350 => 209,  349 => 208,  348 => 207,  347 => 206,  345 => 205,  341 => 202,  338 => 201,  336 => 198,  335 => 197,  334 => 196,  333 => 195,  332 => 194,  331 => 193,  329 => 192,  325 => 189,  322 => 188,  320 => 186,  319 => 185,  318 => 184,  317 => 183,  316 => 182,  315 => 181,  313 => 180,  310 => 178,  308 => 177,  305 => 176,  301 => 174,  298 => 173,  296 => 171,  295 => 170,  294 => 169,  293 => 168,  292 => 167,  291 => 166,  290 => 165,  286 => 163,  280 => 162,  277 => 161,  274 => 160,  271 => 159,  268 => 158,  263 => 157,  260 => 156,  257 => 155,  254 => 154,  252 => 153,  248 => 150,  245 => 149,  243 => 147,  242 => 146,  241 => 145,  240 => 144,  239 => 143,  238 => 142,  237 => 141,  236 => 140,  233 => 139,  231 => 138,  228 => 136,  225 => 135,  223 => 133,  222 => 132,  221 => 131,  220 => 130,  219 => 129,  218 => 128,  217 => 127,  216 => 126,  214 => 125,  210 => 122,  207 => 121,  205 => 119,  204 => 118,  203 => 117,  202 => 116,  200 => 115,  197 => 113,  193 => 111,  190 => 110,  188 => 108,  187 => 107,  186 => 106,  185 => 105,  184 => 104,  181 => 103,  179 => 102,  177 => 101,  173 => 99,  170 => 98,  168 => 96,  167 => 95,  166 => 94,  165 => 93,  164 => 92,  161 => 91,  159 => 90,  157 => 89,  154 => 88,  151 => 87,  149 => 85,  148 => 84,  147 => 83,  146 => 82,  144 => 81,  140 => 78,  137 => 77,  135 => 75,  134 => 74,  133 => 73,  132 => 72,  131 => 71,  130 => 70,  129 => 69,  127 => 68,  123 => 65,  121 => 64,  118 => 63,  116 => 61,  115 => 60,  114 => 59,  113 => 58,  112 => 57,  110 => 56,  106 => 53,  103 => 52,  101 => 50,  100 => 49,  99 => 48,  98 => 47,  97 => 46,  96 => 45,  94 => 44,  90 => 41,  87 => 40,  85 => 38,  84 => 37,  83 => 36,  82 => 35,  81 => 34,  79 => 33,  75 => 30,  72 => 29,  70 => 27,  69 => 26,  68 => 25,  67 => 24,  66 => 23,  64 => 22,  60 => 19,  57 => 18,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  48 => 10,  44 => 7,  42 => 6,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_attributes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/columns_definitions/column_attributes.twig");
    }
}
