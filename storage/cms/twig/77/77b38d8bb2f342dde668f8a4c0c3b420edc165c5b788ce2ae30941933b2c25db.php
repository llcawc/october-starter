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

/* C:\Disk\webwork\starter-october/themes/starter/pages/contacts.htm */
class __TwigTemplate_3feb3b3871a6b6fda714bde7c72208e2de6726760c79dd0d526910f321c2419d extends \Twig\Template
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
        echo "<div class=\"container-md\">
  <div class=\"row row-cols-2 py-5\">
    <div class=\"col-3 col-lg-4 text-end\">
      <p>Addres:</p>
    </div>
    <div class=\"col-9 col-lg-8\">
      <p>70 Washington Square South New York, NY 10012, United States</p>
    </div>
    <div class=\"col-3 col-lg-4 text-end\">
      <p>Phone:</p>
    </div>
    <div class=\"col-9 col-lg-8\">
      <p>+92 423 567 852</p>
    </div>
    <div class=\"col-3 col-lg-4 text-end\">
      <p>Email:</p>
    </div>
    <div class=\"col-9 col-lg-8\">
      <p>info@mockup.com</p>
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter-october/themes/starter/pages/contacts.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-md\">
  <div class=\"row row-cols-2 py-5\">
    <div class=\"col-3 col-lg-4 text-end\">
      <p>Addres:</p>
    </div>
    <div class=\"col-9 col-lg-8\">
      <p>70 Washington Square South New York, NY 10012, United States</p>
    </div>
    <div class=\"col-3 col-lg-4 text-end\">
      <p>Phone:</p>
    </div>
    <div class=\"col-9 col-lg-8\">
      <p>+92 423 567 852</p>
    </div>
    <div class=\"col-3 col-lg-4 text-end\">
      <p>Email:</p>
    </div>
    <div class=\"col-9 col-lg-8\">
      <p>info@mockup.com</p>
    </div>
  </div>
</div>
</div>", "C:\\Disk\\webwork\\starter-october/themes/starter/pages/contacts.htm", "");
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
