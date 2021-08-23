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

/* C:\Disk\webwork\starter/themes/starter/pages/home.htm */
class __TwigTemplate_f1c0873ea9ced864c01bb98fbb471f9377a76646e48d2997da4e6e665f9df2c8 extends \Twig\Template
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
  <div class=\"row\">
    <div class=\"col-12 my-4\">
      <figure class=\"col-sm-10 mx-auto\">
        <a class=\"link-popup\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\" title=\"Saint-Petersburg\">
          <img class=\"img-fluid img-thumbnail d-block\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\" alt=\"Start Template\" /></a>
      </figure>

      <h1 class=\"section\">MAIN</h1>

      <h2 class=\"text-center\">Welcome to yours new Starter template for a multi-page site!</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reprehenderit nulla alias expedita a qui, pariatur doloremque ipsa fugit laboriosam odio iure recusandae laborum delectus praesentium magni reiciendis voluptatem. Sed.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi ab temporibus delectus quaerat officia, magni corporis amet, deserunt natus, excepturi commodi deleniti quasi nisi. Ut tempora porro illo iusto asperiores quidem enim voluptatem eaque repudiandae vel. Modi, earum atque. Suscipit excepturi inventore illo expedita ducimus animi ipsa est ad.</p>

      <div class=\"text-center mt-3 mb-4\">
        <button type=\"button\" id=\"open-popup\" class=\"btn btn-primary\" title=\"viewing content of different types\">
          open popup
        </button>
        <!-- party witch popup code -->
        <div id=\"popup\" class=\"mfp-hide\">
          <p>Text popup. id=\"popup\"</p>
        </div>
      </div>
    </div>

    <!-- magnific-popup plagin gallery -->
    <div class=\"col-12\">
      <h2 class=\"text-center\">magnific-popup plagin gallery</h2>
      <div class=\"gallery popup-gallery\">
        <figure>
          <a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b2.jpg");
        echo "\" title='Townhouse \"Silverine\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b2-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b3.jpg");
        echo "\" title='Residential Complex \"Нousewarming\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b3-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b4.jpg");
        echo "\" title='Residential Complex \"Soul lift\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b4-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b1.jpg");
        echo "\" title=\"Cottage 250 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b1-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b5.jpg");
        echo "\" title=\"Typical American Single Family Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b5-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b6.jpg");
        echo "\" title=\"European house 350 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b6-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b7.jpg");
        echo "\" title=\"Modern Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b7-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter/themes/starter/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  118 => 47,  110 => 44,  102 => 41,  94 => 38,  86 => 35,  78 => 32,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-md\">
  <div class=\"row\">
    <div class=\"col-12 my-4\">
      <figure class=\"col-sm-10 mx-auto\">
        <a class=\"link-popup\" href=\"{{ 'assets/images/preview.jpg'|theme }}\" title=\"Saint-Petersburg\">
          <img class=\"img-fluid img-thumbnail d-block\" src=\"{{ 'assets/images/preview.jpg'|theme }}\" alt=\"Start Template\" /></a>
      </figure>

      <h1 class=\"section\">MAIN</h1>

      <h2 class=\"text-center\">Welcome to yours new Starter template for a multi-page site!</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reprehenderit nulla alias expedita a qui, pariatur doloremque ipsa fugit laboriosam odio iure recusandae laborum delectus praesentium magni reiciendis voluptatem. Sed.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi ab temporibus delectus quaerat officia, magni corporis amet, deserunt natus, excepturi commodi deleniti quasi nisi. Ut tempora porro illo iusto asperiores quidem enim voluptatem eaque repudiandae vel. Modi, earum atque. Suscipit excepturi inventore illo expedita ducimus animi ipsa est ad.</p>

      <div class=\"text-center mt-3 mb-4\">
        <button type=\"button\" id=\"open-popup\" class=\"btn btn-primary\" title=\"viewing content of different types\">
          open popup
        </button>
        <!-- party witch popup code -->
        <div id=\"popup\" class=\"mfp-hide\">
          <p>Text popup. id=\"popup\"</p>
        </div>
      </div>
    </div>

    <!-- magnific-popup plagin gallery -->
    <div class=\"col-12\">
      <h2 class=\"text-center\">magnific-popup plagin gallery</h2>
      <div class=\"gallery popup-gallery\">
        <figure>
          <a href=\"{{ 'assets/images/b2.jpg'|theme }}\" title='Townhouse \"Silverine\"'><img src=\"{{ 'assets/images/thumb/b2-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b3.jpg'|theme }}\" title='Residential Complex \"Нousewarming\"'><img src=\"{{ 'assets/images/thumb/b3-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b4.jpg'|theme }}\" title='Residential Complex \"Soul lift\"'><img src=\"{{ 'assets/images/thumb/b4-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b1.jpg'|theme }}\" title=\"Cottage 250 m2\"><img src=\"{{ 'assets/images/thumb/b1-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b5.jpg'|theme }}\" title=\"Typical American Single Family Cottage\"><img src=\"{{ 'assets/images/thumb/b5-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b6.jpg'|theme }}\" title=\"European house 350 m2\"><img src=\"{{ 'assets/images/thumb/b6-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"{{ 'assets/images/b7.jpg'|theme }}\" title=\"Modern Cottage\"><img src=\"{{ 'assets/images/thumb/b7-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
      </div>
    </div>
  </div>
</div>", "C:\\Disk\\webwork\\starter/themes/starter/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
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
