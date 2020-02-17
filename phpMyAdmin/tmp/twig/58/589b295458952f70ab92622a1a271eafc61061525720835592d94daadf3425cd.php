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

/* table/index_form.twig */
class __TwigTemplate_008bcd2b5a356e7ae70bc2cf0611bc4193a702bc9b450f96e18b6618fb17a6a3 extends \Twig\Template
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
        echo "<form action=\"tbl_indexes.php\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"ajax\">

    ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        echo "

    <fieldset id=\"index_edit_fields\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
        // line 15
        echo _gettext("Index name:");
        // line 16
        echo "                            ";
        echo PhpMyAdmin\Util::showHint(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        echo "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getName", [], "method", false, false, false, 26), "html", null, true);
        echo "\"
                    onfocus=\"this.select()\" />
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
        // line 34
        echo _gettext("Index choice:");
        // line 35
        echo "                            ";
        echo PhpMyAdmin\Util::showMySQLDocu("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>
                ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "generateIndexChoiceSelector", [0 => ($context["create_edit_table"] ?? null)], "method", false, false, false, 39);
        echo "
            </div>

            ";
        // line 42
        echo PhpMyAdmin\Util::getDivForSliderEffect("indexoptions", _gettext("Advanced Options"));
        echo "

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
        // line 48
        echo _gettext("Key block size:");
        // line 49
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getKeyBlockSize", [], "method", false, false, false, 57), "html", null, true);
        echo "\" />
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
        // line 65
        echo _gettext("Index type:");
        // line 66
        echo "                            ";
        echo PhpMyAdmin\Util::showMySQLDocu("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>
                ";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "generateIndexTypeSelector", [], "method", false, false, false, 70);
        echo "
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
        // line 77
        echo _gettext("Parser:");
        // line 78
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getParser", [], "method", false, false, false, 86), "html", null, true);
        echo "\" />
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
        // line 93
        echo _gettext("Comment:");
        // line 94
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getComment", [], "method", false, false, false, 103), "html", null, true);
        echo "\" />
            </div>
        </div>
        <!-- end of indexoptions div -->

        <div class=\"clearfloat\"></div>

        <table id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
        // line 115
        echo _gettext("Column");
        // line 116
        echo "                    </th>
                    <th>
                        ";
        // line 118
        echo _gettext("Size");
        // line 119
        echo "                    </th>
                </tr>
            </thead>
            ";
        // line 122
        $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
        // line 132
        echo "            <tbody>
                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getColumns", [], "method", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 134
            echo "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
            // line 136
            echo _gettext("Drag to reorder");
            echo "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
            // line 141
            echo _gettext("Ignore");
            echo " --
                                </option>
                                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 144
                echo "                                    ";
                if ((((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 144) != "FULLTEXT") || preg_match("/(char|text)/i",                 // line 145
$context["field_type"])) && ((twig_get_attribute($this->env, $this->source,                 // line 146
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 146) != "SPATIAL") || twig_in_filter(                // line 147
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 148
                    echo "
                                        <option value=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\"";
                    // line 150
                    if (($context["field_name"] == twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 150))) {
                        // line 151
                        echo "                                                selected=\"selected\"";
                    }
                    // line 152
                    echo ">
                                            ";
                    // line 153
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                // line 156
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 165
            (((twig_get_attribute($this->env, $this->source,             // line 164
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 164) != "SPATIAL")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 165
$context["column"], "getSubPart", [], "method", false, false, false, 165), "html", null, true))) : (print ("")));
            echo "\" />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                ";
        if ((($context["add_fields"] ?? null) > 0)) {
            // line 170
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["add_fields"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 171
                echo "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
                // line 173
                echo _gettext("Drag to reorder");
                echo "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
                // line 177
                echo _gettext("Ignore");
                echo " --</option>
                                    ";
                // line 178
                $context["j"] = 0;
                // line 179
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 180
                    echo "                                        ";
                    if (($context["create_edit_table"] ?? null)) {
                        // line 181
                        echo "                                            ";
                        $context["col_index"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["field_type"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null);
                        // line 182
                        echo "                                            ";
                        $context["field_type"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field_type"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
                        // line 183
                        echo "                                        ";
                    }
                    // line 184
                    echo "                                        ";
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 185
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, (((isset($context["col_index"]) || array_key_exists("col_index", $context))) ? (                    // line 186
($context["col_index"] ?? null)) : ($context["field_name"])), "html", null, true);
                    echo "\"";
                    // line 187
                    echo (((($context["j"] ?? null) == $context["i"])) ? (" selected=\"selected\"") : (""));
                    echo ">
                                            ";
                    // line 188
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\" />
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                ";
        }
        // line 203
        echo "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 211
        echo twig_escape_filter($this->env, sprintf(_gettext("Add %s column(s) to index"), 1), "html", null, true);
        echo "\" />
            </div>
        </div>
    </fieldset>
    <fieldset class=\"tblFooters\">
        <button type=\"submit\" id=\"preview_index_frm\">";
        // line 216
        echo _gettext("Preview SQL");
        echo "</button>
        <input type=\"submit\" id=\"save_index_frm\" value=\"";
        // line 217
        echo _gettext("Go");
        echo "\" />
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "table/index_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 217,  401 => 216,  393 => 211,  383 => 203,  380 => 202,  364 => 191,  353 => 188,  349 => 187,  346 => 186,  344 => 185,  341 => 184,  338 => 183,  335 => 182,  332 => 181,  329 => 180,  324 => 179,  322 => 178,  318 => 177,  311 => 173,  307 => 171,  302 => 170,  299 => 169,  289 => 165,  288 => 164,  287 => 165,  278 => 157,  272 => 156,  264 => 153,  261 => 152,  258 => 151,  256 => 150,  253 => 149,  250 => 148,  248 => 147,  247 => 146,  246 => 145,  244 => 144,  240 => 143,  235 => 141,  227 => 136,  223 => 134,  219 => 133,  216 => 132,  214 => 122,  209 => 119,  207 => 118,  203 => 116,  201 => 115,  186 => 103,  175 => 94,  173 => 93,  163 => 86,  153 => 78,  151 => 77,  141 => 70,  133 => 66,  131 => 65,  120 => 57,  110 => 49,  108 => 48,  99 => 42,  93 => 39,  85 => 35,  83 => 34,  72 => 26,  58 => 16,  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/index_form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.9+snapshot/templates/table/index_form.twig");
    }
}
