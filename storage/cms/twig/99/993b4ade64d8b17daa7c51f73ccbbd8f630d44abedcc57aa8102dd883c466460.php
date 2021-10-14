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

/* C:\Disk\webwork\october-starter/themes/october/pages/home.htm */
class __TwigTemplate_3574ac4d8944904a5519fa548c4b74dad07928659326c06e2ba45e316513cd54 extends \Twig\Template
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

  <div class=\"row mb-5\">
    <!-- main content -->
    <div class=\"col-12 col-lg-6 pb-4 py-lg-4\">
      <figure class=\"pswp-img w-100 h-100 m-0\">
        <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\" data-pswp-width=\"1280\" data-pswp-height=\"853\" data-cropped=\"true\" target=\"_blank\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\" alt=\"Starter Template - Saint Petersburg\" /></a>
      </figure>
    </div>
    <div class=\"col-12 col-lg-6 d-flex justify-content-between flex-column py-lg-4\">
      <h1>MAIN</h1>
      <h3>Welcome to yours new Starter template for a multi-page site!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reprehenderit nulla alias expedita a qui, pariatur doloremque ipsa fugit laboriosam odio iure recusandae laborum delectus praesentium magni reiciendis voluptatem. Sed.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi ab temporibus delectus quaerat officia, magni corporis amet, deserunt natus, excepturi commodi deleniti quasi nisi. Ut tempora porro illo iusto asperiores quidem enim voluptatem eaque repudiandae vel. Modi, earum atque. Suscipit excepturi inventore illo expedita ducimus animi ipsa est ad.</p>
      <div class=\"text-center text-lg-start mt-3\">
        <button type=\"button\" id=\"open-popup\" class=\"btn btn-primary\" title=\"viewing content of different types\">
          open popup
        </button>
        <!-- party witch popup code -->
        <div id=\"popup\" class=\"mfp-hide\">
          <p>Text popup. id=\"popup\"</p>
        </div>
      </div>
    </div>
  </div>

  <!-- magnific-popup plagin gallery -->
  <div class=\"row mb-5\">
    <div class=\"col-sm-12\">
      <h2 class=\"text-center\">magnific-popup plagin gallery</h2>
      <div class=\"gallery popup-gallery\">
        <figure>
          <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b1.jpg");
        echo "\" title=\"Cottage 250 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b1-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b2.jpg");
        echo "\" title='Townhouse \"Silverine\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b2-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b3.jpg");
        echo "\" title='Residential Complex \"Нousewarming\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b3-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b4.jpg");
        echo "\" title='Residential Complex \"Soul lift\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b4-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b5.jpg");
        echo "\" title=\"Typical American Single Family Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b5-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b6.jpg");
        echo "\" title=\"European house 350 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b6-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
        <figure>
          <a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b7.jpg");
        echo "\" title=\"Modern Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b7-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
        </figure>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-4\">
      <h3>Lorem ipsum dolor sit amet.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita exercitationem illo a dolorem nulla delectus eos enim facilis voluptatem quis nisi beatae molestias amet, nobis quia magni deleniti dolorum eum quos sint itaque dolor, quibusdam harum! Voluptas eos placeat hic, sit consectetur quisquam cupiditate dicta mollitia labore, tenetur voluptate ipsam fuga a dolor accusamus soluta, tempore iste? Cum sapiente sequi, quasi nemo inventore molestiae omnis. Accusamus commodi laudantium itaque necessitatibus dicta illo voluptatem molestias harum sit excepturi eius neque esse pariatur in libero, delectus assumenda dolorum. In commodi, nemo rerum, provident est totam quis ullam ab, rem minima veniam iure.</p>
    </div>
    <div class=\"col-sm-4\">
      <h3>Eius voluptatum neque doloribus ipsum.</h3>
      <p>Sit dolor a adipisci amet aspernatur incidunt sint rem, quibusdam cupiditate. Beatae atque vero dolore, porro quo quisquam maxime, cumque autem, nisi non suscipit eius tenetur. Nisi nostrum nobis iste accusantium nihil, voluptates perferendis assumenda, aut doloribus vitae recusandae quos eligendi illo sapiente libero id accusamus soluta quis amet quod rerum eos! Debitis natus neque cupiditate impedit, rerum quaerat. Ipsa dolor eos aliquam sequi repellat rerum, accusantium cumque culpa animi dolores impedit doloribus veniam laboriosam totam modi iusto dolorum nam eaque dicta. Quod doloremque voluptates autem eos labore magni assumenda amet blanditiis nemo maiores? Esse sit ipsum officiis aliquid. Quasi.</p>
    </div>
    <div class=\"col-sm-4\">
      <h3>Laudantium repellendus modi consequatur nisi.</h3>
      <p>Quae iusto, deserunt, explicabo delectus blanditiis perferendis aut ipsum tenetur, commodi recusandae quaerat. Debitis dolorem mollitia in maxime iure sequi tenetur cupiditate inventore repudiandae exercitationem! Dolorem aliquam voluptatibus modi officia, voluptate iste, cumque alias quod minus voluptatum commodi optio aspernatur nam molestias consectetur placeat nobis molestiae veritatis dignissimos exercitationem quae iure tenetur sequi temporibus. Consectetur sequi eius veritatis culpa odio corporis inventore. Aspernatur dolorum similique sit perspiciatis iusto cum velit porro magni adipisci quibusdam, culpa quia tempore dolore rerum voluptatum distinctio accusantium voluptatem exercitationem molestiae beatae ullam repellat accusamus harum. Ullam in, quam assumenda consequatur aperiam vel doloribus dolor asperiores.</p>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\october-starter/themes/october/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  118 => 48,  110 => 45,  102 => 42,  94 => 39,  86 => 36,  78 => 33,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-md\">

  <div class=\"row mb-5\">
    <!-- main content -->
    <div class=\"col-12 col-lg-6 pb-4 py-lg-4\">
      <figure class=\"pswp-img w-100 h-100 m-0\">
        <a href=\"{{ 'assets/images/preview.jpg'|theme }}\" data-pswp-width=\"1280\" data-pswp-height=\"853\" data-cropped=\"true\" target=\"_blank\"><img src=\"{{ 'assets/images/preview.jpg'|theme }}\" alt=\"Starter Template - Saint Petersburg\" /></a>
      </figure>
    </div>
    <div class=\"col-12 col-lg-6 d-flex justify-content-between flex-column py-lg-4\">
      <h1>MAIN</h1>
      <h3>Welcome to yours new Starter template for a multi-page site!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reprehenderit nulla alias expedita a qui, pariatur doloremque ipsa fugit laboriosam odio iure recusandae laborum delectus praesentium magni reiciendis voluptatem. Sed.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi ab temporibus delectus quaerat officia, magni corporis amet, deserunt natus, excepturi commodi deleniti quasi nisi. Ut tempora porro illo iusto asperiores quidem enim voluptatem eaque repudiandae vel. Modi, earum atque. Suscipit excepturi inventore illo expedita ducimus animi ipsa est ad.</p>
      <div class=\"text-center text-lg-start mt-3\">
        <button type=\"button\" id=\"open-popup\" class=\"btn btn-primary\" title=\"viewing content of different types\">
          open popup
        </button>
        <!-- party witch popup code -->
        <div id=\"popup\" class=\"mfp-hide\">
          <p>Text popup. id=\"popup\"</p>
        </div>
      </div>
    </div>
  </div>

  <!-- magnific-popup plagin gallery -->
  <div class=\"row mb-5\">
    <div class=\"col-sm-12\">
      <h2 class=\"text-center\">magnific-popup plagin gallery</h2>
      <div class=\"gallery popup-gallery\">
        <figure>
          <a href=\"{{ 'assets/images/b1.jpg'|theme }}\" title=\"Cottage 250 m2\"><img src=\"{{ 'assets/images/thumb/b1-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
        </figure>
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

  <div class=\"row\">
    <div class=\"col-sm-4\">
      <h3>Lorem ipsum dolor sit amet.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita exercitationem illo a dolorem nulla delectus eos enim facilis voluptatem quis nisi beatae molestias amet, nobis quia magni deleniti dolorum eum quos sint itaque dolor, quibusdam harum! Voluptas eos placeat hic, sit consectetur quisquam cupiditate dicta mollitia labore, tenetur voluptate ipsam fuga a dolor accusamus soluta, tempore iste? Cum sapiente sequi, quasi nemo inventore molestiae omnis. Accusamus commodi laudantium itaque necessitatibus dicta illo voluptatem molestias harum sit excepturi eius neque esse pariatur in libero, delectus assumenda dolorum. In commodi, nemo rerum, provident est totam quis ullam ab, rem minima veniam iure.</p>
    </div>
    <div class=\"col-sm-4\">
      <h3>Eius voluptatum neque doloribus ipsum.</h3>
      <p>Sit dolor a adipisci amet aspernatur incidunt sint rem, quibusdam cupiditate. Beatae atque vero dolore, porro quo quisquam maxime, cumque autem, nisi non suscipit eius tenetur. Nisi nostrum nobis iste accusantium nihil, voluptates perferendis assumenda, aut doloribus vitae recusandae quos eligendi illo sapiente libero id accusamus soluta quis amet quod rerum eos! Debitis natus neque cupiditate impedit, rerum quaerat. Ipsa dolor eos aliquam sequi repellat rerum, accusantium cumque culpa animi dolores impedit doloribus veniam laboriosam totam modi iusto dolorum nam eaque dicta. Quod doloremque voluptates autem eos labore magni assumenda amet blanditiis nemo maiores? Esse sit ipsum officiis aliquid. Quasi.</p>
    </div>
    <div class=\"col-sm-4\">
      <h3>Laudantium repellendus modi consequatur nisi.</h3>
      <p>Quae iusto, deserunt, explicabo delectus blanditiis perferendis aut ipsum tenetur, commodi recusandae quaerat. Debitis dolorem mollitia in maxime iure sequi tenetur cupiditate inventore repudiandae exercitationem! Dolorem aliquam voluptatibus modi officia, voluptate iste, cumque alias quod minus voluptatum commodi optio aspernatur nam molestias consectetur placeat nobis molestiae veritatis dignissimos exercitationem quae iure tenetur sequi temporibus. Consectetur sequi eius veritatis culpa odio corporis inventore. Aspernatur dolorum similique sit perspiciatis iusto cum velit porro magni adipisci quibusdam, culpa quia tempore dolore rerum voluptatum distinctio accusantium voluptatem exercitationem molestiae beatae ullam repellat accusamus harum. Ullam in, quam assumenda consequatur aperiam vel doloribus dolor asperiores.</p>
    </div>
  </div>

</div>", "C:\\Disk\\webwork\\october-starter/themes/october/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7);
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
