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

    <!-- main content -->
    <div class=\"col-sm-12 my-4\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <figure class=\"pswp-img\">
            <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\" data-pswp-width=\"1280\" data-pswp-height=\"853\" data-cropped=\"true\" target=\"_blank\"><img class=\"img-fluid d-block\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/preview.jpg");
        echo "\" alt=\"Starter Template - Saint Petersburg\" /></a>
          </figure>
        </div>
        <div class=\"col-sm-6\">
          <h1>MAIN</h1>
          <h2>Welcome to yours new Starter template for a multi-page site!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reprehenderit nulla alias expedita a qui, pariatur doloremque ipsa fugit laboriosam odio iure recusandae laborum delectus praesentium magni reiciendis voluptatem. Sed.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi ab temporibus delectus quaerat officia, magni corporis amet, deserunt natus, excepturi commodi deleniti quasi nisi. Ut tempora porro illo iusto asperiores quidem enim voluptatem eaque repudiandae vel. Modi, earum atque. Suscipit excepturi inventore illo expedita ducimus animi ipsa est ad.</p>
        </div>
      </div>
    </div>

    <!-- photoswipe gallery -->
    <div class=\"col-12\">
      <h2 class=\"text-center\">photoswipe plagin gallery</h2>
      <div class=\"gallery pswp-gallery\">
        <figure>
          <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b2.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Townhouse \"Silverine\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b2-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Townhouse \"Silverine\"</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b3.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Residential Complex \"Нousewarming\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b3-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Residential Complex \"Нousewarming\"</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b4.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title='Residential Complex \"Soul lift\"'><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b4-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Residential Complex \"Soul lift\"</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b1.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Cottage 250 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b1-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Cottage 250 m2</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b5.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Typical American Single Family Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b5-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Typical American Single Family Cottage</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b6.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"European house 350 m2\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b6-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">European house 350 m2</figcaption>
        </figure>
        <figure>
          <a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b7.jpg");
        echo "\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Modern Cottage\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/thumb/b7-640x400.jpg");
        echo "\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Modern Cottage</figcaption>
        </figure>
      </div>
    </div>

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
        return "C:\\Disk\\webwork\\starter/themes/starter/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  116 => 46,  107 => 42,  98 => 38,  89 => 34,  80 => 30,  71 => 26,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-md\">
  <div class=\"row\">

    <!-- main content -->
    <div class=\"col-sm-12 my-4\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <figure class=\"pswp-img\">
            <a href=\"{{ 'assets/images/preview.jpg'|theme }}\" data-pswp-width=\"1280\" data-pswp-height=\"853\" data-cropped=\"true\" target=\"_blank\"><img class=\"img-fluid d-block\" src=\"{{ 'assets/images/preview.jpg'|theme }}\" alt=\"Starter Template - Saint Petersburg\" /></a>
          </figure>
        </div>
        <div class=\"col-sm-6\">
          <h1>MAIN</h1>
          <h2>Welcome to yours new Starter template for a multi-page site!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reprehenderit nulla alias expedita a qui, pariatur doloremque ipsa fugit laboriosam odio iure recusandae laborum delectus praesentium magni reiciendis voluptatem. Sed.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi ab temporibus delectus quaerat officia, magni corporis amet, deserunt natus, excepturi commodi deleniti quasi nisi. Ut tempora porro illo iusto asperiores quidem enim voluptatem eaque repudiandae vel. Modi, earum atque. Suscipit excepturi inventore illo expedita ducimus animi ipsa est ad.</p>
        </div>
      </div>
    </div>

    <!-- photoswipe gallery -->
    <div class=\"col-12\">
      <h2 class=\"text-center\">photoswipe plagin gallery</h2>
      <div class=\"gallery pswp-gallery\">
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
          <a href=\"{{ 'assets/images/b1.jpg'|theme }}\" data-pswp-width=\"1920\" data-pswp-height=\"1200\" target=\"_blank\" title=\"Cottage 250 m2\"><img src=\"{{ 'assets/images/thumb/b1-640x400.jpg'|theme }}\" alt=\"Фото\" /></a>
          <figcaption class=\"visually-hidden\">Cottage 250 m2</figcaption>
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
</div>", "C:\\Disk\\webwork\\starter/themes/starter/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 9);
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
