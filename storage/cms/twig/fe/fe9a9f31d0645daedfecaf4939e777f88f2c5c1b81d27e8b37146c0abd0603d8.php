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

/* C:\Disk\webwork\starter-october/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_ac23dd19991c44b3054356b4c13b9c85b4751cb3ca507c34c45d0b964660874d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_381a35ec537fac4ea5f0e79b841b44936f04fbdcd28ffc8b2a12ba14ac7f6c41' => [$this, 'block___internal_381a35ec537fac4ea5f0e79b841b44936f04fbdcd28ffc8b2a12ba14ac7f6c41'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; Разметка HTML для этого примера:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_381a35ec537fac4ea5f0e79b841b44936f04fbdcd28ffc8b2a12ba14ac7f6c41", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Подождите, нужна всего одна строчка?
</p>
<p><em>Yes!</em> в отличие от <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">примера AJAX</a>, Компоненты - это простые строительные блоки, которые можно использовать с небольшим объемом кода.</p>
<p>The <code>demoTodo</code> используемый здесь компонент предоставляется плагином под названием <strong>October\\Demo</strong>, вы можете найти это в <code>plugins/october/demo</code> папке.</p>";
    }

    // line 7
    public function block___internal_381a35ec537fac4ea5f0e79b841b44936f04fbdcd28ffc8b2a12ba14ac7f6c41($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter-october/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  65 => 7,  59 => 16,  50 => 9,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; Разметка HTML для этого примера:
</p>
<pre>
{% filter escape %}
{{ \"{% component 'demoTodo' %}\" }}
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Подождите, нужна всего одна строчка?
</p>
<p><em>Yes!</em> в отличие от <a href=\"{{ 'ajax'|page }}\">примера AJAX</a>, Компоненты - это простые строительные блоки, которые можно использовать с небольшим объемом кода.</p>
<p>The <code>demoTodo</code> используемый здесь компонент предоставляется плагином под названием <strong>October\\Demo</strong>, вы можете найти это в <code>plugins/october/demo</code> папке.</p>", "C:\\Disk\\webwork\\starter-october/themes/demo/partials/explain/plugins.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("filter" => 7);
        static $filters = array("escape" => 7, "page" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['filter'],
                ['escape', 'page'],
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
