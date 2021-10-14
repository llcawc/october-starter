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

/* C:\Disk\webwork\october-starter/themes/october/layouts/default.htm */
class __TwigTemplate_892a5a625d1b01c8c698062ed5f9271fbe6ece93f604fc3c92cf28e9808273ef extends \Twig\Template
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
  <title>October CMS Starter | ";
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

<body>

  ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "  <main role=\"main\">";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "</main>
  ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
  <!-- Scripts -->
  <script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/lib.min.js");
        echo "\"></script>
  <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.min.js");
        echo "\"></script>
  ";
        // line 26
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 27
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 28
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\october-starter/themes/october/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  116 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 22,  89 => 21,  84 => 20,  80 => 19,  71 => 14,  68 => 13,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <meta charset=\"utf-8\" />
  <title>October CMS Starter | {{ this.page.title }}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"author\" content=\"llcawc by pasmurno\">
  <link rel=\"icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" type=\"image/png\">
  <meta property=\"og:image\" content=\"{{'assets/images/preview.jpg'|theme}}\">
  {% styles %}
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.min.css'|theme }}\" />
</head>

<body>

  {% partial 'header' %}
  <main role=\"main\">{% page %}</main>
  {% partial 'footer' %}

  <!-- Scripts -->
  <script src=\"{{ 'assets/js/lib.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/app.min.js'|theme }}\"></script>
  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\Disk\\webwork\\october-starter/themes/october/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 13, "partial" => 19, "page" => 20, "framework" => 26, "scripts" => 27);
        static $filters = array("escape" => 6, "theme" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
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
