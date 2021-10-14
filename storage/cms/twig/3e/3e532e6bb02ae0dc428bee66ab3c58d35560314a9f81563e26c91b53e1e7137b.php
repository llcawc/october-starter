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

/* C:\Disk\webwork\october-starter/themes/october/pages/gallery.htm */
class __TwigTemplate_5c888dc052f5ce35d67da55a644ef2e8a2145dffff35499304425cb2ebe6a6bc extends \Twig\Template
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
        echo "<div class=\"container\">
  <!-- photoswipe gallery -->
  <div class=\"row mb-5\">
    <div class=\"col-sm-12\">
      <h2 class=\"text-center my-4\">photoswipe plagin gallery</h2>
      <div class=\"gallery pswp-gallery\">
        <figure>
          <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b1.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Cottage 250 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b1-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Cottage 250 m2</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b2.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Townhouse \"Silverine\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b2-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Townhouse \"Silverine\"</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b3.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Residential Complex \"Нousewarming\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b3-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Residential Complex \"Нousewarming\"</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b4.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Residential Complex \"Soul lift\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b4-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Residential Complex \"Soul lift\"</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b5.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Typical American Single Family Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b5-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Typical American Single Family Cottage</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b6.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"European house 350 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b6-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">European house 350 m2</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b7.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Modern Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b7-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Modern Cottage</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\october-starter/themes/october/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  93 => 28,  84 => 24,  75 => 20,  66 => 16,  57 => 12,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <!-- photoswipe gallery -->
  <div class=\"row mb-5\">
    <div class=\"col-sm-12\">
      <h2 class=\"text-center my-4\">photoswipe plagin gallery</h2>
      <div class=\"gallery pswp-gallery\">
        <figure>
          <a href=\"{{ 'assets/images/b1.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Cottage 250 m2\"><img src=\"{{ 'assets/images/thumb/b1-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Cottage 250 m2</figcaption>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b2.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Townhouse \"Silverine\"'><img src=\"{{ 'assets/images/thumb/b2-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Townhouse \"Silverine\"</figcaption>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b3.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Residential Complex \"Нousewarming\"'><img src=\"{{ 'assets/images/thumb/b3-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Residential Complex \"Нousewarming\"</figcaption>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b4.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Residential Complex \"Soul lift\"'><img src=\"{{ 'assets/images/thumb/b4-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Residential Complex \"Soul lift\"</figcaption>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b5.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Typical American Single Family Cottage\"><img src=\"{{ 'assets/images/thumb/b5-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Typical American Single Family Cottage</figcaption>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b6.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"European house 350 m2\"><img src=\"{{ 'assets/images/thumb/b6-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">European house 350 m2</figcaption>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b7.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Modern Cottage\"><img src=\"{{ 'assets/images/thumb/b7-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Modern Cottage</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>", "C:\\Disk\\webwork\\october-starter/themes/october/pages/gallery.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
