<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_822ffca7f61ad88c05a03293b107b05fbcc56d434680ae5b133b8f4322ea4f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d6ebe510acf413172ed4fa81c307810dfccc3ea3f2b3d12463e08833e4ebdc = $this->env->getExtension("native_profiler");
        $__internal_72d6ebe510acf413172ed4fa81c307810dfccc3ea3f2b3d12463e08833e4ebdc->enter($__internal_72d6ebe510acf413172ed4fa81c307810dfccc3ea3f2b3d12463e08833e4ebdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_72d6ebe510acf413172ed4fa81c307810dfccc3ea3f2b3d12463e08833e4ebdc->leave($__internal_72d6ebe510acf413172ed4fa81c307810dfccc3ea3f2b3d12463e08833e4ebdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */