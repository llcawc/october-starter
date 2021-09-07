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

/* C:\Disk\webwork\starter/themes/starter/partials/footer.htm */
class __TwigTemplate_a4ffd3a1ed824635dfb7b0c6b79b2da8b866fa28e2021932085e18a9d07aefc6 extends \Twig\Template
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
        echo "<footer class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col px-0\">

      <h1 class=\"section\">FOOTER</h1>
      <hr>
      <p class=\"text-center\">
        &copy;&nbsp;2021 <a href=\"https://github.com/llcawc\">llcawc</a>, all rights reserved. Made&nbsp;with&nbsp;<span style=\"color: #e60f0a;\">&#10084;</span>&nbsp;for&nbsp;the&nbsp;best&nbsp;architecture.
      </p>

    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter/themes/starter/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col px-0\">

      <h1 class=\"section\">FOOTER</h1>
      <hr>
      <p class=\"text-center\">
        &copy;&nbsp;2021 <a href=\"https://github.com/llcawc\">llcawc</a>, all rights reserved. Made&nbsp;with&nbsp;<span style=\"color: #e60f0a;\">&#10084;</span>&nbsp;for&nbsp;the&nbsp;best&nbsp;architecture.
      </p>

    </div>
  </div>
</footer>", "C:\\Disk\\webwork\\starter/themes/starter/partials/footer.htm", "");
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
