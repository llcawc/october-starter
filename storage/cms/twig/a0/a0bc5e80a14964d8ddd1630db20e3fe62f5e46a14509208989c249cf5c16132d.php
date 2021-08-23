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

/* C:\Disk\webwork\starter/themes/starter/layouts/flat.htm */
class __TwigTemplate_80e31a859469972898233f18a216d9cb29ed1d4d8ac7b7361b9f6d5cbb916b78 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <meta charset=\"utf-8\" />
  <title>Starter | ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
  <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"llcawc by pasmurno\">
  <link rel=\"icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" type=\"image/png\">
  <meta property=\"og:image\" content=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\">
  ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "  <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
</head>

<body class=\"flat\">
  ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 19
        echo "  <!-- Scripts -->
  <script src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.min.js");
        echo "\"></script>
  ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 22
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter/themes/starter/layouts/flat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  88 => 21,  84 => 20,  81 => 19,  79 => 18,  71 => 14,  68 => 13,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <meta charset=\"utf-8\" />
  <title>Starter | {{ this.page.title }}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"author\" content=\"llcawc by pasmurno\">
  <link rel=\"icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" type=\"image/png\">
  <meta property=\"og:image\" content=\"{{'assets/images/preview.jpg'|theme}}\">
  {% styles %}
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.min.css'|theme }}\" />
</head>

<body class=\"flat\">
  {% page %}
  <!-- Scripts -->
  <script src=\"{{ 'assets/js/app.min.js'|theme }}\"></script>
  {% scripts %}

</body>

</html>", "C:\\Disk\\webwork\\starter/themes/starter/layouts/flat.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 13, "page" => 18, "scripts" => 21);
        static $filters = array("escape" => 6, "theme" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page', 'scripts'],
                ['escape', 'theme'],
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
