<?php

/* beranda.twig */
class __TwigTemplate_3ab06605ca34b4eb984ef9c0b86b2f4d412ec503489fddf6e23a926f47b1fdb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/head.twig", "beranda.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/head.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8154d9dc211d1ce7b66021d7183245f8d64d02654fff5229fbf2ac3e22db6f55 = $this->env->getExtension("native_profiler");
        $__internal_8154d9dc211d1ce7b66021d7183245f8d64d02654fff5229fbf2ac3e22db6f55->enter($__internal_8154d9dc211d1ce7b66021d7183245f8d64d02654fff5229fbf2ac3e22db6f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "beranda.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8154d9dc211d1ce7b66021d7183245f8d64d02654fff5229fbf2ac3e22db6f55->leave($__internal_8154d9dc211d1ce7b66021d7183245f8d64d02654fff5229fbf2ac3e22db6f55_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a71feebc79d31a86937dedd6df6f868965201b2477f62105a0f251c890ef4f64 = $this->env->getExtension("native_profiler");
        $__internal_a71feebc79d31a86937dedd6df6f868965201b2477f62105a0f251c890ef4f64->enter($__internal_a71feebc79d31a86937dedd6df6f868965201b2477f62105a0f251c890ef4f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <br>
    <h1 class=\"lh30 mt15 text-center\">SELAMAT DATANG</h1>
    <p class=\"lead mb30 text-center\">Pembuatan Usulan Paket Pengadaan</p>
    <hr>

";
        
        $__internal_a71feebc79d31a86937dedd6df6f868965201b2477f62105a0f251c890ef4f64->leave($__internal_a71feebc79d31a86937dedd6df6f868965201b2477f62105a0f251c890ef4f64_prof);

    }

    public function getTemplateName()
    {
        return "beranda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layouts/head.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <br>*/
/*     <h1 class="lh30 mt15 text-center">SELAMAT DATANG</h1>*/
/*     <p class="lead mb30 text-center">Pembuatan Usulan Paket Pengadaan</p>*/
/*     <hr>*/
/* */
/* {% endblock %}*/
