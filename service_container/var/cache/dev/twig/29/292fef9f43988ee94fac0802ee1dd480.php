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

/* @WebProfiler/Icon/serializer.svg */
class __TwigTemplate_4728c94afddc588b1d8066802c6cd680 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/serializer.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/serializer.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-arrows-right\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
  <line x1=\"21\" y1=\"17\" x2=\"3\" y2=\"17\"></line>
  <path d=\"M18 4l3 3l-3 3\"></path>
  <path d=\"M18 20l3 -3l-3 -3\"></path>
  <line x1=\"21\" y1=\"7\" x2=\"3\" y2=\"7\"></line>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/serializer.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-arrows-right\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
  <line x1=\"21\" y1=\"17\" x2=\"3\" y2=\"17\"></line>
  <path d=\"M18 4l3 3l-3 3\"></path>
  <path d=\"M18 20l3 -3l-3 -3\"></path>
  <line x1=\"21\" y1=\"7\" x2=\"3\" y2=\"7\"></line>
</svg>
", "@WebProfiler/Icon/serializer.svg", "/Users/garykovar/projects/linkedinlearning/symfony/symfony-6-essential-training-4404688/service_container/vendor/symfony/web-profiler-bundle/Resources/views/Icon/serializer.svg");
    }
}
