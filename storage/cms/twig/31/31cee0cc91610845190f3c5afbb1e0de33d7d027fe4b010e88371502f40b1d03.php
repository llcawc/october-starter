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

/* C:\Disk\webwork\starter-october/themes/demo/pages/home.htm */
class __TwigTemplate_3b80c9b6c31628853e88d97eb9781da38ea69cdb781c9ae1afd5f012a7b70468 extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Обзор <small>Базовые концепты</small></h2>
    </div>
    <p>
        На этой странице демонстрируются основные функции CMS. Обычно каждая страница, созданная с помощью October, представляет собой комбинацию макета (layout), страницы (page), фрагментов / \"чанков\" (partial)  и блоков содержимого (content), хотя в простых случаях вы можете просто использовать страницу без чего-либо еще.
    </p>

    <!-- Layouts -->
    <h3>МАКЕТЫ - Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Макеты определяют каркас страницы.
    </p>
    <p>
        Файл макета <code>layouts/default.htm</code> определяет каркас страницы &mdash;
        все, что повторяется на каждой странице, например, теги HTML, HEAD и BODY, таблицы стилей и ссылки на JavaScript.
    </p>
    <p>Меню страницы и нижний колонтитул в демонстрационной теме также определены в макете.</p>

    <hr />

    <!-- Pages -->
    <h3>Страницы - Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Страницы содержат контент для каждого URL.
    </p>
    <p>
        Файл страницы <code>pages/home.htm</code> определяет URL страницы (<code>/</code> для этой страницы) и контент страницы.
        Страницы отображаются внутри макетов с помощью этой функции, которая должна вызываться в коде макета:
    </p>
    <pre>";
        // line 38
        echo "{% page %}";
        echo "</pre>
    <p>Использование макета для страниц необязательно &mdash; вы можете определить все прямо в файле страницы.</p>

    <hr />

    <!-- Partials -->
    <h3>Чанки (фрагменты) - Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Чанки содержат многоразовые фрагменты разметки HTML.
    </p>
    <p>
        Чанки - это фрагменты HTML, определенные в отдельных файлах, которые могут быть включены куда угодно. Чанки отображаются с помощью вставок кода:
    </p>
    <pre>";
        // line 51
        echo "{% partial \"partial-name\" %}";
        echo "</pre>
    <p>Вы также можете размещать файл чанка внутри папок. В этом примере мы поместили содержимое нижнего колонтитула в <code>partials/site/footer.htm</code> чанк.</p>
    <pre>";
        // line 53
        echo "{% partial \"site/footer\" %}";
        echo "</pre>
    <p>Чанки могут использоваться внутри страниц, макетов или других частей.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Блоки контента - Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks (блоки с контентом) - это блоки текста или HTML, которые можно редактировать отдельно от страницы или макета.
    </p>
    <p>
        Вводный текст, используемый на этой странице, определяется в <code>content/welcome.htm</code> файле. Блоки контента определяются и отображаются с помощью:
        <pre>";
        // line 65
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Заполнители - Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Заполнители позволяют страницам вставлять контент в макет.
    </p>
    <p>
        Обычно это используется как вставка специфичных для каждой из страниц ссылок на файлы StyleSheet или JavaScript в тег HEAD, определенный в макете. 
        Заполнители определяются в файле макета, и у них есть имена, чтобы на них можно было ссылаться на странице.
        Например:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>";
        // line 83
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/layout.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>";
        // line 87
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/page.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Ресурсы/активы - Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets это файлы ресурсов, такие как изображения и таблицы стилей.
    </p>
    <p>Эта тема хранит свои файлы ресурсов (JavaScript, StyleSheet, images, fonts, и т.д.) в <code>themes/demo/assets</code> папке. В эту тему также входят полезные сторонние инструменты:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>Возможно, вы предпочтете удалить их для реализации на своем веб-сайте.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Перейти к платформе AJAX</a></p>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Disk\\webwork\\starter-october/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 109,  149 => 87,  140 => 83,  119 => 65,  104 => 53,  99 => 51,  83 => 38,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Обзор <small>Базовые концепты</small></h2>
    </div>
    <p>
        На этой странице демонстрируются основные функции CMS. Обычно каждая страница, созданная с помощью October, представляет собой комбинацию макета (layout), страницы (page), фрагментов / \"чанков\" (partial)  и блоков содержимого (content), хотя в простых случаях вы можете просто использовать страницу без чего-либо еще.
    </p>

    <!-- Layouts -->
    <h3>МАКЕТЫ - Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Макеты определяют каркас страницы.
    </p>
    <p>
        Файл макета <code>layouts/default.htm</code> определяет каркас страницы &mdash;
        все, что повторяется на каждой странице, например, теги HTML, HEAD и BODY, таблицы стилей и ссылки на JavaScript.
    </p>
    <p>Меню страницы и нижний колонтитул в демонстрационной теме также определены в макете.</p>

    <hr />

    <!-- Pages -->
    <h3>Страницы - Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Страницы содержат контент для каждого URL.
    </p>
    <p>
        Файл страницы <code>pages/home.htm</code> определяет URL страницы (<code>/</code> для этой страницы) и контент страницы.
        Страницы отображаются внутри макетов с помощью этой функции, которая должна вызываться в коде макета:
    </p>
    <pre>{{ \"{% page %}\" }}</pre>
    <p>Использование макета для страниц необязательно &mdash; вы можете определить все прямо в файле страницы.</p>

    <hr />

    <!-- Partials -->
    <h3>Чанки (фрагменты) - Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Чанки содержат многоразовые фрагменты разметки HTML.
    </p>
    <p>
        Чанки - это фрагменты HTML, определенные в отдельных файлах, которые могут быть включены куда угодно. Чанки отображаются с помощью вставок кода:
    </p>
    <pre>{{ \"{% partial \\\"partial-name\\\" %}\" }}</pre>
    <p>Вы также можете размещать файл чанка внутри папок. В этом примере мы поместили содержимое нижнего колонтитула в <code>partials/site/footer.htm</code> чанк.</p>
    <pre>{{ \"{% partial \\\"site/footer\\\" %}\" }}</pre>
    <p>Чанки могут использоваться внутри страниц, макетов или других частей.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Блоки контента - Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks (блоки с контентом) - это блоки текста или HTML, которые можно редактировать отдельно от страницы или макета.
    </p>
    <p>
        Вводный текст, используемый на этой странице, определяется в <code>content/welcome.htm</code> файле. Блоки контента определяются и отображаются с помощью:
        <pre>{{ \"{% content \\\"content-name.htm\\\" %}\" }}</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Заполнители - Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Заполнители позволяют страницам вставлять контент в макет.
    </p>
    <p>
        Обычно это используется как вставка специфичных для каждой из страниц ссылок на файлы StyleSheet или JavaScript в тег HEAD, определенный в макете. 
        Заполнители определяются в файле макета, и у них есть имена, чтобы на них можно было ссылаться на странице.
        Например:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>{% content \"placeholder/layout.txt\" %}</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>{% content \"placeholder/page.txt\" %}</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Ресурсы/активы - Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets это файлы ресурсов, такие как изображения и таблицы стилей.
    </p>
    <p>Эта тема хранит свои файлы ресурсов (JavaScript, StyleSheet, images, fonts, и т.д.) в <code>themes/demo/assets</code> папке. В эту тему также входят полезные сторонние инструменты:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>Возможно, вы предпочтете удалить их для реализации на своем веб-сайте.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"{{ 'ajax'|page }}\" class=\"btn btn-lg btn-default\">Перейти к платформе AJAX</a></p>
    </div>

</div>", "C:\\Disk\\webwork\\starter-october/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 3);
        static $filters = array("page" => 109);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['page'],
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
