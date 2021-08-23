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

/* C:\Disk\webwork\starter/themes/starter/partials/blog/posts.htm */
class __TwigTemplate_74b871b6777c515242b098ce0c3a6e3e62a24a6b6d1d3a5c4492b3279c1980b1 extends \Twig\Template
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
<div class=\"post-list\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <div class=\"media\">

            <div class=\"media-body\">
                <h3 class=\"media-heading\">
                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a>
                </h3>
                <p class=\"info\">
                    Posted
                    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 15), "count", [], "any", false, false, true, 15)) {
                echo " in ";
            }
            // line 16
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 16));
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
                // line 17
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 17)) {
                    echo ", ";
                }
                // line 18
                echo "                    ";
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
            // line 19
            echo "                    on <span class=\"date\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["days"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 20), 20, $this->source), "N")] ?? null) : null), 20, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 21
$context["post"], "published_at", [], "any", false, false, true, 21), 21, $this->source), ", j "), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             // line 22
($context["mnths"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 22), 22, $this->source), "n")] ?? null) : null), 22, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 23
$context["post"], "published_at", [], "any", false, false, true, 23), 23, $this->source), " Y"), "html", null, true);
            echo "</span>
                    
                      <!--   ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "M d, Y"), "html", null, true);
            echo " -->
                </p>

                ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 28)) {
                // line 29
                echo "                
                  <div class=\"media-left float-start me-3\">
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\">
                      ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 32), "count", [], "any", false, false, true, 32) > 0)) {
                    // line 33
                    echo "                          <img class=\"media-object\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 33), "first", [], "any", false, false, true, 33), "getThumb", [0 => 100, 1 => "auto"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "\" />
                      ";
                } else {
                    // line 35
                    echo "                          <img class=\"media-object\" src=\"https://via.placeholder.com/100x120\" />
                      ";
                }
                // line 37
                echo "                    </a>
                    </div>
                
                    <p class=\"excerpt\">";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</p>
                    
                ";
            } else {
                // line 43
                echo "                    <div class=\"content\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 43), 43, $this->source);
                echo "</div>
                    
                ";
            }
            // line 46
            echo "            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "        <div class=\"no-data\">
            <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 50, $this->source), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</div>

";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 55) > 1)) {
            // line 56
            echo "    <ul class=\"pagination\">
        ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 57) > 1)) {
                // line 58
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "baseFileName", [], "any", false, false, true, 58), 58, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 58) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 60
            echo "
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 61)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 62
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 62) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 63
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 63), "baseFileName", [], "any", false, false, true, 63), 63, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 63, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
        ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 67) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 67))) {
                // line 68
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 68), "baseFileName", [], "any", false, false, true, 68), 68, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 68) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 70
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter/themes/starter/partials/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 70,  238 => 68,  236 => 67,  233 => 66,  222 => 63,  217 => 62,  213 => 61,  210 => 60,  204 => 58,  202 => 57,  199 => 56,  197 => 55,  193 => 53,  184 => 50,  181 => 49,  174 => 46,  167 => 43,  161 => 40,  156 => 37,  152 => 35,  146 => 33,  144 => 32,  140 => 31,  136 => 29,  134 => 28,  128 => 25,  123 => 23,  121 => 22,  119 => 21,  117 => 20,  114 => 19,  100 => 18,  91 => 17,  73 => 16,  69 => 15,  60 => 11,  54 => 7,  49 => 6,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
{% set mnths = ['','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'] %}
{% set days = ['','Понедельник','Вторник','Среда','Четверг','Пятница', 'Суббота', 'Воскресенье'] %}

<div class=\"post-list\">
    {% for post in posts %}
        <div class=\"media\">

            <div class=\"media-body\">
                <h3 class=\"media-heading\">
                    <a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h3>
                <p class=\"info\">
                    Posted
                    {% if post.categories.count %} in {% endif %}
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    on <span class=\"date\">
                        {{ days[post.published_at|date(\"N\")] }}{{
                        post.published_at|date(\", j \") }}{{
                        mnths[post.published_at|date(\"n\")] }}{{
                        post.published_at|date(\" Y\") }}</span>
                    
                      <!--   {{ post.published_at|date('M d, Y') }} -->
                </p>

                {% if post.excerpt %}
                
                  <div class=\"media-left float-start me-3\">
                    <a href=\"{{ post.url }}\">
                      {% if post.featured_images.count > 0 %}
                          <img class=\"media-object\" src=\"{{ post.featured_images.first.getThumb(100, 'auto') }}\" />
                      {% else %}
                          <img class=\"media-object\" src=\"https://via.placeholder.com/100x120\" />
                      {% endif %}
                    </a>
                    </div>
                
                    <p class=\"excerpt\">{{ post.excerpt }}</p>
                    
                {% else %}
                    <div class=\"content\">{{ post.content_html|raw }}</div>
                    
                {% endif %}
            </div>
        </div>
    {% else %}
        <div class=\"no-data\">
            <p>{{ noPostsMessage }}</p>
        </div>
    {% endfor %}
</div>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "C:\\Disk\\webwork\\starter/themes/starter/partials/blog/posts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 6, "if" => 15);
        static $filters = array("escape" => 11, "date" => 20, "raw" => 43, "page" => 58);
        static $functions = array("range" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date', 'raw', 'page'],
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
