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

/* C:\Disk\webwork\october-starter/themes/october/pages/blog.htm */
class __TwigTemplate_f1bca307018588d9940f50a61cfbec82f0fa1bbd3fe4c6680e5c3ab6c5a1490c extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        $context["mnths"] = [0 => "", 1 => "января", 2 => "февраля", 3 => "марта", 4 => "апреля", 5 => "мая", 6 => "июня", 7 => "июля", 8 => "августа", 9 => "сентября", 10 => "октября", 11 => "ноября", 12 => "декабря"];
        // line 3
        $context["days"] = [0 => "", 1 => "Понедельник", 2 => "Вторник", 3 => "Среда", 4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресенье"];
        // line 4
        echo "
<main class=\"container-md\">
  <div class=\"row\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "    <section class=\"col-sm-12 mt-5\">
      <h3 class=\"mb-3 text-center text-sm-start\"><a class=\"text-decoration-none\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</a></h3>
      <div class=\"row mb-3\">
        <p class=\"col-12 col-sm-6 m-0 text-center text-sm-start\">
          <span>
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["days"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 14), 14, $this->source), "N")] ?? null) : null), 14, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 15
$context["post"], "published_at", [], "any", false, false, true, 15), 15, $this->source), ", j "), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             // line 16
($context["mnths"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 16), 16, $this->source), "n")] ?? null) : null), 16, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 17
$context["post"], "published_at", [], "any", false, false, true, 17), 17, $this->source), " Y"), "html", null, true);
            echo "
          </span>
          <span class=\"pe-3\"><i class=\"bi bi-eye\"></i>&nbsp;";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</span>
        </p>
        <p class=\"col-12 col-sm-6 m-0 text-center text-sm-end\">
          ";
            // line 22
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 22), 22, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 22), 22, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 22), 22, $this->source)) . "</a>"); }), ", ");
            // line 23
            echo "          <span>Category: ";
            echo $this->sandbox->ensureToStringAllowed(($context["categoryLinks"] ?? null), 23, $this->source);
            echo "</span>
        </p>
      </div>
      <div class=\"row\">
        <figure class=\"col-sm-4 mb-0\">
          <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">
            ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 29), "count", [], "any", false, false, true, 29) > 0)) {
                // line 30
                echo "            <img class=\"d-block img-thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 30), "first", [], "any", false, false, true, 30), "getThumb", [0 => 320, 1 => "auto"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\" />
            ";
            } else {
                // line 32
                echo "            <img class=\"d-block img-thumbnail\" src=\"https://via.placeholder.com/320x200\" />
            ";
            }
            // line 34
            echo "          </a>
        </figure>
        <div class=\"col-sm-8\">
          ";
            // line 37
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 37), 37, $this->source);
            echo "
          <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\">
            <p class=\"mb-0\">Продолжить чтение <i class=\"bi bi-arrow-right\"></i></p>
          </a>
        </div>
      </div>
    </section>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "    <div class=\"text-center\">
      <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

    <div class=\"col-sm-12 py-5\">
      ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 52) > 1)) {
            // line 53
            echo "      <ul class=\"pagination mb-0\">
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 54) > 1)) {
                // line 55
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "baseFileName", [], "any", false, false, true, 55), 55, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 55) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 55) - 1)]);
                echo "\">&larr; Prev</a>
        </li>
        ";
            }
            // line 58
            echo "
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 59)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 60
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 60) == $context["page"])) ? ("active") : (null));
                echo "\">
          <a href=\"";
                // line 61
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 61), "baseFileName", [], "any", false, false, true, 61), 61, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 61) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 61, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
        ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 65) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 65))) {
                // line 66
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "baseFileName", [], "any", false, false, true, 66), 66, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 66) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 66) + 1)]);
                echo "\">Next &rarr;</a>
        </li>
        ";
            }
            // line 69
            echo "      </ul>
      ";
        }
        // line 71
        echo "    </div>

  </div>
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\october-starter/themes/october/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 71,  199 => 69,  192 => 66,  190 => 65,  187 => 64,  176 => 61,  171 => 60,  167 => 59,  164 => 58,  157 => 55,  155 => 54,  152 => 53,  150 => 52,  145 => 49,  136 => 46,  133 => 45,  121 => 38,  117 => 37,  112 => 34,  108 => 32,  102 => 30,  100 => 29,  96 => 28,  87 => 23,  85 => 22,  79 => 19,  74 => 17,  72 => 16,  70 => 15,  68 => 14,  59 => 10,  56 => 9,  51 => 8,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
{% set mnths = ['','января','февраля','марта','апреля','мая','июня','июля','августа', 'сентября','октября','ноября','декабря'] %}
{% set days = ['','Понедельник','Вторник','Среда','Четверг','Пятница', 'Суббота', 'Воскресенье'] %}

<main class=\"container-md\">
  <div class=\"row\">

    {% for post in posts %}
    <section class=\"col-sm-12 mt-5\">
      <h3 class=\"mb-3 text-center text-sm-start\"><a class=\"text-decoration-none\" href=\"{{ post.url }}\">{{ post.title}}</a></h3>
      <div class=\"row mb-3\">
        <p class=\"col-12 col-sm-6 m-0 text-center text-sm-start\">
          <span>
            {{ days[post.published_at|date(\"N\")] }}{{
            post.published_at|date(\", j \") }}{{
            mnths[post.published_at|date(\"n\")] }}{{
            post.published_at|date(\" Y\") }}
          </span>
          <span class=\"pe-3\"><i class=\"bi bi-eye\"></i>&nbsp;{{post.views}}</span>
        </p>
        <p class=\"col-12 col-sm-6 m-0 text-center text-sm-end\">
          {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}
          <span>Category: {{ categoryLinks | raw }}</span>
        </p>
      </div>
      <div class=\"row\">
        <figure class=\"col-sm-4 mb-0\">
          <a href=\"{{ post.url }}\">
            {% if post.featured_images.count > 0 %}
            <img class=\"d-block img-thumbnail\" src=\"{{ post.featured_images.first.getThumb(320, 'auto') }}\" />
            {% else %}
            <img class=\"d-block img-thumbnail\" src=\"https://via.placeholder.com/320x200\" />
            {% endif %}
          </a>
        </figure>
        <div class=\"col-sm-8\">
          {{ post.summary|raw }}
          <a href=\"{{ post.url }}\">
            <p class=\"mb-0\">Продолжить чтение <i class=\"bi bi-arrow-right\"></i></p>
          </a>
        </div>
      </div>
    </section>
    {% else %}
    <div class=\"text-center\">
      <p>{{ blogPosts.noPostsMessage }}</p>
    </div>
    {% endfor %}


    <div class=\"col-sm-12 py-5\">
      {% if posts.lastPage > 1 %}
      <ul class=\"pagination mb-0\">
        {% if posts.currentPage > 1 %}
        <li><a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a>
        </li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
        <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
          <a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
        <li><a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a>
        </li>
        {% endif %}
      </ul>
      {% endif %}
    </div>

  </div>
</main>", "C:\\Disk\\webwork\\october-starter/themes/october/pages/blog.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 8, "if" => 29);
        static $filters = array("escape" => 10, "date" => 14, "join" => 22, "map" => 22, "raw" => 23, "page" => 55);
        static $functions = array("range" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date', 'join', 'map', 'raw', 'page'],
                ['range']
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
