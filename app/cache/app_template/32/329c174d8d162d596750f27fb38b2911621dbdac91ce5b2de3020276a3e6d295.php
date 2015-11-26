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
        $__internal_2d356166ded5f7611ac644a3ba2247648fcb739b0db27a71ae1cdda1ff058a59 = $this->env->getExtension("native_profiler");
        $__internal_2d356166ded5f7611ac644a3ba2247648fcb739b0db27a71ae1cdda1ff058a59->enter($__internal_2d356166ded5f7611ac644a3ba2247648fcb739b0db27a71ae1cdda1ff058a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "beranda.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d356166ded5f7611ac644a3ba2247648fcb739b0db27a71ae1cdda1ff058a59->leave($__internal_2d356166ded5f7611ac644a3ba2247648fcb739b0db27a71ae1cdda1ff058a59_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d6d6440725de61c160b8c7c63c2ddc0d736d300edddf6e47b823a3338cfd733 = $this->env->getExtension("native_profiler");
        $__internal_8d6d6440725de61c160b8c7c63c2ddc0d736d300edddf6e47b823a3338cfd733->enter($__internal_8d6d6440725de61c160b8c7c63c2ddc0d736d300edddf6e47b823a3338cfd733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <br>
    <h1 class=\"lh30 mt15 text-center\">SELAMAT DATANG</h1>
    <p class=\"lead mb30 text-center\">Pembuatan Usulan Paket Pengadaan</p>
    <hr>

";
        
        $__internal_8d6d6440725de61c160b8c7c63c2ddc0d736d300edddf6e47b823a3338cfd733->leave($__internal_8d6d6440725de61c160b8c7c63c2ddc0d736d300edddf6e47b823a3338cfd733_prof);

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
