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

/* C:\Disk\webwork\starter-october/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_76324a1d1a7c090ed7141d0dd742edf3b89d967a67d0c31402e08835a92baca9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_53c12d961d7129aad9d35940e3976cdf71d1d61e23380e513fddc9b2c40356d4' => [$this, 'block___internal_53c12d961d7129aad9d35940e3976cdf71d1d61e23380e513fddc9b2c40356d4'],
            '__internal_239687ac7474b919f8c1d52e73a1886daae822280012f29169e62ab265e8dbc2' => [$this, 'block___internal_239687ac7474b919f8c1d52e73a1886daae822280012f29169e62ab265e8dbc2'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->
<!-- Этот файл является объяснением страницы AJAX. -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; Разметка HTML для этого примера:
</p>

<pre>";
        // line 10
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_53c12d961d7129aad9d35940e3976cdf71d1d61e23380e513fddc9b2c40356d4", $context, $blocks));
        // line 25
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; Это <code>calcresult</code> чанк:
</p>

<pre>";
        // line 33
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_239687ac7474b919f8c1d52e73a1886daae822280012f29169e62ab265e8dbc2", $context, $blocks));
        // line 38
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; А это <code>onTest</code> PHP код:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 10
    public function block___internal_53c12d961d7129aad9d35940e3976cdf71d1d61e23380e513fddc9b2c40356d4($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<!-- The form -->
<form role=\"form\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 24
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 33
    public function block___internal_239687ac7474b919f8c1d52e73a1886daae822280012f29169e62ab265e8dbc2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "{% if result %}";
        echo "
    The result is ";
        // line 35
        echo "{{ result }}";
        echo ".
";
        // line 36
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 38
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter-october/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  117 => 24,  98 => 10,  66 => 38,  64 => 33,  54 => 25,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<hr />

<!-- This file is an explanation of the AJAX page -->
<!-- Этот файл является объяснением страницы AJAX. -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; Разметка HTML для этого примера:
</p>

<pre>{% filter escape %}<!-- The form -->
<form role=\"form\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">{{ \"{% partial \\\"calcresult\\\" %}\" }}</div>
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; Это <code>calcresult</code> чанк:
</p>

<pre>{% filter escape %}
{{ \"{% if result %}\" }}
    The result is {{ \"{{ result }}\" }}.
{{ \"{% else %}\" }}
    Click the <em>Calculate</em> button to find the answer.
{{ \"{% endif %}\" }}{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; А это <code>onTest</code> PHP код:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>", "C:\\Disk\\webwork\\starter-october/themes/demo/partials/explain/ajax.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("filter" => 10);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['filter'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
