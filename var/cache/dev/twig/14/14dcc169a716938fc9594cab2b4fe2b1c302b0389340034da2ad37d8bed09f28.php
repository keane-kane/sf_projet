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

/* etudiant/createetudiant.html.twig */
class __TwigTemplate_83ccb60f2939e4c11efd234d82876916bfa66f6d2e305d8705216e94e9805788 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/createetudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/createetudiant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/createetudiant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " New Etudiant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "     <div class=\"row align-items-center justify-content-center mt-2\">
        <div class=\"col-6\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "col-md-12 bg-light pb-2"]]);
        echo "
                <h3 class=\"text-center\">Ajouter un etudiant </h3>
                 <div class=\"form-row\">
                 <div class=\"form-group col-md-6\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'label', ["label" => "Prenom :", "label_attr" => ["class" => "foo"]]);
        // line 19
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'label', ["label" => "Nom:", "label_attr" => ["class" => "foo"]]);
        // line 25
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label', ["label" => "Email :", "label_attr" => ["class" => "foo"]]);
        // line 33
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                </div>

                <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "tel", [], "any", false, false, false, 39), 'label', ["label" => "Tel:", "label_attr" => ["class" => "foo"]]);
        // line 41
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "tel", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>  
                <div class=\"form-group col-md-6\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateNaiss", [], "any", false, false, false, 45), 'label', ["label" => "Date Naiss :", "label_attr" => ["class" => "foo"]]);
        // line 47
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateNaiss", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                </div>
                </div>

                <div class=\"form-row\">
                <div class=\"form-group col-md-6 \">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "etre", [], "any", false, false, false, 54), 'label', ["label" => "Type Etudiant:", "label_attr" => ["class" => "foo"]]);
        // line 56
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "etre", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                </div>
                <div class=\"form-group col-md-6 \" id=\"boursier\">
                       ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "boursier", [], "any", false, false, false, 60), 'label', ["label" => "Type de Bourse:", "label_attr" => ["class" => "foo"]]);
        // line 62
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "boursier", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                </div>
                 <div class=\"form-group col-md-6  \" id=\"loger\">
                       ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "loger", [], "any", false, false, false, 66), 'label', ["label" => "Addresse:", "label_attr" => ["class" => "foo"]]);
        // line 68
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "loger", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "address"]]);
        echo "
                </div>
                <div class=\"form-group col-md-6 \" id=\"habite\">
                       ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "habite", [], "any", false, false, false, 72), 'label', ["label" => "Choix du chambre:", "label_attr" => ["class" => "foo"]]);
        // line 74
        echo "
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "habite", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                </div>
               
                </div>

                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary col-6  \">
                
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'rest');
        echo "
            ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
        </div>
 
    </div>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/createetudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 83,  225 => 82,  215 => 75,  212 => 74,  210 => 72,  204 => 69,  201 => 68,  199 => 66,  193 => 63,  190 => 62,  188 => 60,  182 => 57,  179 => 56,  177 => 54,  168 => 48,  165 => 47,  163 => 45,  157 => 42,  154 => 41,  152 => 39,  144 => 34,  141 => 33,  139 => 31,  131 => 26,  128 => 25,  126 => 23,  120 => 20,  117 => 19,  115 => 17,  108 => 13,  104 => 11,  95 => 8,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} New Etudiant{% endblock %}

{% block body %}
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
     <div class=\"row align-items-center justify-content-center mt-2\">
        <div class=\"col-6\">
            {{ form_start(form,{'attr': {'class': 'col-md-12 bg-light pb-2'}})}}
                <h3 class=\"text-center\">Ajouter un etudiant </h3>
                 <div class=\"form-row\">
                 <div class=\"form-group col-md-6\">
                    {{form_label(form.prenom,null, {
                        'label': 'Prenom :',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.prenom,{'attr': {'class': 'form-control '} })}}
                </div>
                <div class=\"form-group col-md-6\">
                    {{form_label(form.nom,null, {
                        'label': 'Nom:',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.nom,{'attr': {'class': 'form-control'}})}}
                </div>
                </div>

                <div class=\"form-group\">
                    {{form_label(form.email,null, {
                        'label': 'Email :',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.email,{'attr': {'class': 'form-control '}})}}
                </div>

                <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {{form_label(form.tel,null, {
                        'label': 'Tel:',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.tel,{'attr': {'class': 'form-control'}})}}
                </div>  
                <div class=\"form-group col-md-6\">
                    {{form_label(form.dateNaiss,null, {
                        'label': 'Date Naiss :',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.dateNaiss,{'attr': {'class': 'form-control '}})}}
                </div>
                </div>

                <div class=\"form-row\">
                <div class=\"form-group col-md-6 \">
                    {{form_label(form.etre,null, {
                        'label': 'Type Etudiant:',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.etre,{'attr': {'class': 'form-control '}})}}
                </div>
                <div class=\"form-group col-md-6 \" id=\"boursier\">
                       {{form_label(form.boursier,null, {
                        'label': 'Type de Bourse:',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.boursier,{'attr': {'class': 'form-control '}})}}
                </div>
                 <div class=\"form-group col-md-6  \" id=\"loger\">
                       {{form_label(form.loger,null, {
                        'label': 'Addresse:',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.loger,{'attr': {'class': 'form-control', 'placeholder':'address'}})}}
                </div>
                <div class=\"form-group col-md-6 \" id=\"habite\">
                       {{form_label(form.habite,null, {
                        'label': 'Choix du chambre:',
                        'label_attr': {'class': 'foo'}})}}
                    {{form_widget(form.habite,{'attr': {'class': 'form-control '}})}}
                </div>
               
                </div>

                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary col-6  \">
                
            {{ form_rest(form)}}
            {{ form_end(form)}}
        </div>
 
    </div>
 
{% endblock %}

", "etudiant/createetudiant.html.twig", "C:\\xampp\\htdocs\\sf_projet\\templates\\etudiant\\createetudiant.html.twig");
    }
}
