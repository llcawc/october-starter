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

/* C:\Disk\webwork\starter/themes/starter/partials/header.htm */
class __TwigTemplate_c0fcd337008caedfa5c697a16398a19bb1d643f4292c77ac79e596047d0a00a6 extends \Twig\Template
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
        echo "<header class=\"container-fluid\">

  <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-autohide\">
    <div class=\"container-md\">
      <a class=\"navbar-brand fw-bold fs-4\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Mockup</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Переключатель навигации\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav text-end fs-5 mt-lg-0 mt-2\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><i class=\"bi bi-house\"></i> Home</a>
          </li>
          <li class=\"nav-item ps-3\">
            <a class=\"nav-link\" href=\" ";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo " \"><i class=\"bi bi-pencil-square\"></i> Blog</a>
          </li>
          <li class=\"nav-item ps-3\">
            <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\"><i class=\"bi bi-geo\"></i> Contacts</a>
          </li>
          <li class=\"nav-item ps-3\">
            <a class=\"nav-link\" href=\"/backend\"><i class=\"bi bi-speedometer2\"></i></i> Backend</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=\"row\">
    <h1 class=\"col section\">";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 29), "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</h1>
  </div>

</header>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter/themes/starter/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  67 => 18,  61 => 15,  55 => 12,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"container-fluid\">

  <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-autohide\">
    <div class=\"container-md\">
      <a class=\"navbar-brand fw-bold fs-4\" href=\"{{ 'home'|page }}\">Mockup</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Переключатель навигации\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav text-end fs-5 mt-lg-0 mt-2\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"{{ 'home'|page }}\"><i class=\"bi bi-house\"></i> Home</a>
          </li>
          <li class=\"nav-item ps-3\">
            <a class=\"nav-link\" href=\" {{'blog'|page}} \"><i class=\"bi bi-pencil-square\"></i> Blog</a>
          </li>
          <li class=\"nav-item ps-3\">
            <a class=\"nav-link\" href=\"{{ 'contacts'|page }}\"><i class=\"bi bi-geo\"></i> Contacts</a>
          </li>
          <li class=\"nav-item ps-3\">
            <a class=\"nav-link\" href=\"/backend\"><i class=\"bi bi-speedometer2\"></i></i> Backend</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=\"row\">
    <h1 class=\"col section\">{{ this.page.title }}</h1>
  </div>

</header>", "C:\\Disk\\webwork\\starter/themes/starter/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 5, "escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'escape'],
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
