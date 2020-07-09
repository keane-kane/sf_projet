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

/* inc/header.html.twig */
class __TwigTemplate_86691296af67aaf47093c9c28df75e015989e7d9c8d1b3ef539b14cfd2d29ef6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/header.html.twig"));

        // line 1
        echo "<div class=\"header d-flex align-items-center justify-content-center \">
        <p class=\"text-center mx-auto pt-3 ml-2 font-weight-bold text-light w-50\"><marquee>SA GESTION</marquee></p>
    <nav class=\"navbar navbar-expand-lg navbar-expand-md navbar-light \">

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <a class=\"navbar-brand text-light bg-primary px-2\" href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant");
        echo ">Enregistrer Etudiant</a>
                <li>
                    <a class=\"navbar-brand text-light  px-2\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre_create");
        echo "\">Enregistrer Chambre</a>
                </li>
                <li>
                    <a class=\"navbar-brand text-light  px-2\" href=";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("batiment");
        echo ">Enregistrer Batiment</a>
                </li>
                <li class=\"nav-item dropdown \">
                    <a class=\"nav-link dropdown-toggle text-light \" href=\"#\" id=\"navbarDropdownMenuLink\"
                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                         Lister Etudiants
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_afficher");
        echo ">Tous les étudiants</a>
                        <a class=\"dropdown-item\" href=\"#\">Recherche Par matricule</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par bâtiment</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par chambres</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-light px-2\" href=\"#\" id=\"navbarDropdownMenuLink\"
                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Lister les Chambres</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre_afficher");
        echo ">Tous les chambres</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par type</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par batiment</a>
                        <a class=\"dropdown-item\" href=\"#\">Recherche Par numero</a>
                    </div>
                </li>
            </ul>
    </nav>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  77 => 24,  66 => 16,  60 => 13,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header d-flex align-items-center justify-content-center \">
        <p class=\"text-center mx-auto pt-3 ml-2 font-weight-bold text-light w-50\"><marquee>SA GESTION</marquee></p>
    <nav class=\"navbar navbar-expand-lg navbar-expand-md navbar-light \">

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <a class=\"navbar-brand text-light bg-primary px-2\" href={{path(\"etudiant\")}}>Enregistrer Etudiant</a>
                <li>
                    <a class=\"navbar-brand text-light  px-2\" href=\"{{path(\"chambre_create\")}}\">Enregistrer Chambre</a>
                </li>
                <li>
                    <a class=\"navbar-brand text-light  px-2\" href={{path(\"batiment\")}}>Enregistrer Batiment</a>
                </li>
                <li class=\"nav-item dropdown \">
                    <a class=\"nav-link dropdown-toggle text-light \" href=\"#\" id=\"navbarDropdownMenuLink\"
                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                         Lister Etudiants
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href={{ path('etudiant_afficher') }}>Tous les étudiants</a>
                        <a class=\"dropdown-item\" href=\"#\">Recherche Par matricule</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par bâtiment</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par chambres</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-light px-2\" href=\"#\" id=\"navbarDropdownMenuLink\"
                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Lister les Chambres</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href={{path(\"chambre_afficher\")}}>Tous les chambres</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par type</a>
                        <a class=\"dropdown-item\" href=\"#\">Lister par batiment</a>
                        <a class=\"dropdown-item\" href=\"#\">Recherche Par numero</a>
                    </div>
                </li>
            </ul>
    </nav>
</div>

", "inc/header.html.twig", "C:\\xampp\\htdocs\\sf_projet\\templates\\inc\\header.html.twig");
    }
}
