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

/* book/index.html.twig */
class __TwigTemplate_3a7e5c0bec3a72eb430b0d9ba9b520a0c87f2fb0f998e86211c7c0dd3eb50b0a extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<title>Список книг</title>
</head>
<body>
<div class=\"col-lg-12\">
\t<table class=\"table table-bordered\">
\t  <thead>
\t    <tr>
\t      <th scope=\"col\">#</th>
\t      <th scope=\"col\">Название</th>
\t      <th scope=\"col\">Автор</th>
\t      <th scope=\"col\">Год</th>
\t      <th></th>
\t    </tr>
\t  </thead>
\t  <tbody>
\t  \t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 22
            echo "\t  \t<tr>
\t      <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</th>
\t      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t      <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "year", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t      <td>
\t      \t<a class=\"btn btn-warning\" href=\"/update/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" role=\"button\">Изменить</a>
\t      </td>
\t    </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t<td><a class=\"btn btn-success\" href=\"/create\" role=\"button\">Добавить</a></td>
\t  </tbody>
\t</table>
</div>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "book/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  86 => 28,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  66 => 22,  62 => 21,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<title>Список книг</title>
</head>
<body>
<div class=\"col-lg-12\">
\t<table class=\"table table-bordered\">
\t  <thead>
\t    <tr>
\t      <th scope=\"col\">#</th>
\t      <th scope=\"col\">Название</th>
\t      <th scope=\"col\">Автор</th>
\t      <th scope=\"col\">Год</th>
\t      <th></th>
\t    </tr>
\t  </thead>
\t  <tbody>
\t  \t{% for book in books %}
\t  \t<tr>
\t      <th scope=\"row\">{{book.id}}</th>
\t      <td>{{book.name}}</td>
\t      <td>{{book.author}}</td>
\t      <td>{{book.year}}</td>
\t      <td>
\t      \t<a class=\"btn btn-warning\" href=\"/update/{{book.id}}\" role=\"button\">Изменить</a>
\t      </td>
\t    </tr>
\t\t{% endfor %}
\t\t<td><a class=\"btn btn-success\" href=\"/create\" role=\"button\">Добавить</a></td>
\t  </tbody>
\t</table>
</div>

</body>
</html>", "book/index.html.twig", "E:\\Projects\\TZ\\artvizo\\library\\templates\\book\\index.html.twig");
    }
}
