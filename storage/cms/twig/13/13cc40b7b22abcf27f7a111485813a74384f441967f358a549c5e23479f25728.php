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

/* C:\Disk\webwork\october-starter/themes/october/pages/404.htm */
class __TwigTemplate_78975432930414b1371a338b296732d4238e7c873fb4a62871cd9587df5c075f extends \Twig\Template
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
    <section class=\"col-8 col-md-6\">
      <h3 class=\"textcolor\">Error 404!</h3>
      <p>Document not found.</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><i class=\"bi bi-house\"></i> Home</a>
    </section>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\october-starter/themes/october/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container h-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <section class=\"col-8 col-md-6\">
      <h3 class=\"textcolor\">Error 404!</h3>
      <p>Document not found.</p>
      <a class=\"btn btn-outline-secondary\" href=\"{{ 'home'|page }}\"><i class=\"bi bi-house\"></i> Home</a>
    </section>
  </div>
</div>", "C:\\Disk\\webwork\\october-starter/themes/october/pages/404.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
