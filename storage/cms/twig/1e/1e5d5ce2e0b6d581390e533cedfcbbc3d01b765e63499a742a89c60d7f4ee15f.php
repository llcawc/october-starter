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

/* C:\Disk\webwork\starter/themes/starter/pages/blog/post.htm */
class __TwigTemplate_85991e43b053ee4bdced8c3f96424b047cad4f2f4294e3c300f7caa264dd6717 extends \Twig\Template
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
        $context["mnths"] = [0 => "", 1 => "января", 2 => "февраля", 3 => "марта", 4 => "апреля", 5 => "мая", 6 => "июня", 7 => "июля", 8 => "августа", 9 => "сентября", 10 => "октября", 11 => "ноября", 12 => "декабря"];
        // line 2
        $context["days"] = [0 => "", 1 => "Понедельник", 2 => "Вторник", 3 => "Среда", 4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресенье"];
        // line 3
        $context["nextPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "nextPost", [], "any", false, false, true, 3);
        // line 4
        $context["prevPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "previousPost", [], "any", false, false, true, 4);
        // line 5
        echo "
<div class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-12\">

      <div class=\"row mb-3\">
        <p class=\"col-sm-6 m-0 text-center text-sm-start\">
          <span>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["days"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 14), 14, $this->source), "N")] ?? null) : null), 14, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 15
($context["post"] ?? null), "published_at", [], "any", false, false, true, 15), 15, $this->source), ", j "), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =         // line 16
($context["mnths"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 16), 16, $this->source), "n")] ?? null) : null), 16, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 17
($context["post"] ?? null), "published_at", [], "any", false, false, true, 17), 17, $this->source), " Y"), "html", null, true);
        echo "
          </span><span class=\"ps-3\"><i class=\"bi bi-eye\"></i>&nbsp;";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</span>
        </p>
        <p class=\"col-sm-6 m-0 text-center text-sm-end\">
          <span>
            <!-- ";
        // line 22
        $context["categories"] = twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 22), 22, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 22); }), ", ");
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["categories"] ?? null), 22, $this->source);
        echo " -->
            Categories:
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 24));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 25)) {
                echo ", ";
            }
            // line 26
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          </span>
        </p>
      </div>

      ";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 31), 31, $this->source);
        echo "

      ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 33), "count", [], "any", false, false, true, 33)) {
            // line 34
            echo "      <div class=\"gallery pswp-gallery\">
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 36
                echo "        <figure>
          <a ";
                // line 37
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 37), 37, $this->source);
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\" data-cropped=\"true\" target=\"_blank\">
            <img data-src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\" />
          </a>
          <!-- <figcaption class=\"visually-hidden\">";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</figcaption> -->
        </figure>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </div>
      ";
        }
        // line 45
        echo "
    </div>
  </div>

  <div class=\"row\">

    <div class=\"col-6 text-start\">
      ";
        // line 52
        if (($context["prevPost"] ?? null)) {
            // line 53
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prevPost"] ?? null), "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\"><i class=\"bi bi-arrow-left\"></i><br><span><strong>Предыдущий пост:</strong></span><br>\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prevPost"] ?? null), "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\"</a>
      ";
        }
        // line 55
        echo "    </div>

    <div class=\"col-6 text-end\">
      ";
        // line 58
        if (($context["nextPost"] ?? null)) {
            // line 59
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\"><i class=\"bi bi-arrow-right\"></i><br><span><strong>Следующий пост:</strong></span><br>\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\"</a>
      ";
        }
        // line 61
        echo "    </div>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter/themes/starter/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 61,  201 => 59,  199 => 58,  194 => 55,  186 => 53,  184 => 52,  175 => 45,  171 => 43,  162 => 40,  153 => 38,  145 => 37,  142 => 36,  138 => 35,  135 => 34,  133 => 33,  128 => 31,  122 => 27,  108 => 26,  99 => 25,  82 => 24,  75 => 22,  68 => 18,  64 => 17,  62 => 16,  60 => 15,  58 => 14,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mnths = ['','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'] %}
{% set days = ['','Понедельник','Вторник','Среда','Четверг','Пятница', 'Суббота', 'Воскресенье'] %}
{% set nextPost = blogPost.nextPost %}
{% set prevPost = blogPost.previousPost %}

<div class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-12\">

      <div class=\"row mb-3\">
        <p class=\"col-sm-6 m-0 text-center text-sm-start\">
          <span>
            {{ days[post.published_at|date(\"N\")] }}{{
              post.published_at|date(\", j \") }}{{
              mnths[post.published_at|date(\"n\")] }}{{
              post.published_at|date(\" Y\") }}
          </span><span class=\"ps-3\"><i class=\"bi bi-eye\"></i>&nbsp;{{post.views}}</span>
        </p>
        <p class=\"col-sm-6 m-0 text-center text-sm-end\">
          <span>
            <!-- {% set categories = post.categories | map(c => \"#{c.name}\") | join(', ') %} {{categories | raw}} -->
            Categories:
            {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
            {% endfor %}
          </span>
        </p>
      </div>

      {{ post.content_html|raw }}

      {% if post.featured_images.count %}
      <div class=\"gallery pswp-gallery\">
        {% for image in post.featured_images %}
        <figure>
          <a {{ image.description|raw }} href=\"{{ image.path }}\" title=\"{{ image.title }}\" data-cropped=\"true\" target=\"_blank\">
            <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.filename }}\" />
          </a>
          <!-- <figcaption class=\"visually-hidden\">{{ image.title }}</figcaption> -->
        </figure>
        {% endfor %}
      </div>
      {% endif %}

    </div>
  </div>

  <div class=\"row\">

    <div class=\"col-6 text-start\">
      {% if prevPost %}
      <a href=\"{{ prevPost.url }}\"><i class=\"bi bi-arrow-left\"></i><br><span><strong>Предыдущий пост:</strong></span><br>\"{{ prevPost.title }}\"</a>
      {% endif %}
    </div>

    <div class=\"col-6 text-end\">
      {% if nextPost %}
      <a href=\"{{ nextPost.url }}\"><i class=\"bi bi-arrow-right\"></i><br><span><strong>Следующий пост:</strong></span><br>\"{{ nextPost.title }}\"</a>
      {% endif %}
    </div>

  </div>

</div>", "C:\\Disk\\webwork\\starter/themes/starter/pages/blog/post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 24, "if" => 25);
        static $filters = array("escape" => 14, "date" => 14, "join" => 22, "map" => 22, "raw" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date', 'join', 'map', 'raw'],
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
