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

/* C:\Disk\webwork\october-starter/themes/october/pages/error.htm */
class __TwigTemplate_f28fe71efe7750ac95f4feb23dea93d507b1926fc2b1f2f215875d112fe560c9 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container h-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <div class=\"col-sm-8 text-white-50\">
      <h1 class=\"textcolor\">Error</h1>
      <p>We're sorry, but something went wrong and the page cannot be displayed.</p>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\october-starter/themes/october/pages/error.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container h-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <div class=\"col-sm-8 text-white-50\">
      <h1 class=\"textcolor\">Error</h1>
      <p>We're sorry, but something went wrong and the page cannot be displayed.</p>
    </div>
  </div>
</div>", "C:\\Disk\\webwork\\october-starter/themes/october/pages/error.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
