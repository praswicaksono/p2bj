<?php

/* skpd.twig */
class __TwigTemplate_791cb5599df1ff983c4fde2bb628fdbbbdec6d938c4e71982728f23296e850dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("layouts/head.twig", "skpd.twig", 14);
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
        $__internal_82992d61d6c6bb8b313455e7ab060cb5fac93bf4e2e1cece0550769098edf67d = $this->env->getExtension("native_profiler");
        $__internal_82992d61d6c6bb8b313455e7ab060cb5fac93bf4e2e1cece0550769098edf67d->enter($__internal_82992d61d6c6bb8b313455e7ab060cb5fac93bf4e2e1cece0550769098edf67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skpd.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82992d61d6c6bb8b313455e7ab060cb5fac93bf4e2e1cece0550769098edf67d->leave($__internal_82992d61d6c6bb8b313455e7ab060cb5fac93bf4e2e1cece0550769098edf67d_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_77c2ba51c7e2971b1c34318089daf93c23bd3f9a1ef892e7eb0b0490157bafa3 = $this->env->getExtension("native_profiler");
        $__internal_77c2ba51c7e2971b1c34318089daf93c23bd3f9a1ef892e7eb0b0490157bafa3->enter($__internal_77c2ba51c7e2971b1c34318089daf93c23bd3f9a1ef892e7eb0b0490157bafa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <br>
    <h1 class=\"lh30 mt15 text-center\">PAKET BARU</h1>
    <p class=\"lead mb30 text-center\">Pembuatan Usulan Paket Pengadaan</p>
    <hr>
<div class=\"row\">
    <div class=\"col-md-9 center-block\">

                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "                    <strong> <div class=\"alert alert-danger alert-dismissable\" >
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            Whoops Something went wrong
                        </div>
                    </strong>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
            <div class=\"admin-form theme-primary\">
                <div class=\"panel\">
                    <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "skpd"), "method"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"panel-body\">
                            <div class=\"section-divider mb40 mt20\"><span> Lengkapi Data </span></div>

                            ";
        // line 39
        echo "                                ";
        // line 40
        echo "                                ";
        // line 41
        echo "                                ";
        // line 42
        echo "                                ";
        // line 43
        echo "                                ";
        // line 44
        echo "                                ";
        // line 45
        echo "                                ";
        // line 46
        echo "                                ";
        // line 47
        echo "                                ";
        // line 48
        echo "                                ";
        // line 49
        echo "                                ";
        // line 50
        echo "                                ";
        // line 51
        echo "                                ";
        // line 52
        echo "                                ";
        // line 53
        echo "                                ";
        // line 54
        echo "                                ";
        // line 55
        echo "                                ";
        // line 56
        echo "                                ";
        // line 57
        echo "                            ";
        // line 58
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


                        </div>
                        ";
        // line 64
        echo "                            ";
        // line 65
        echo "                        ";
        // line 66
        echo "                    </form>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_77c2ba51c7e2971b1c34318089daf93c23bd3f9a1ef892e7eb0b0490157bafa3->leave($__internal_77c2ba51c7e2971b1c34318089daf93c23bd3f9a1ef892e7eb0b0490157bafa3_prof);

    }

    public function getTemplateName()
    {
        return "skpd.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 66,  126 => 65,  124 => 64,  117 => 59,  114 => 58,  112 => 57,  110 => 56,  108 => 55,  106 => 54,  104 => 53,  102 => 52,  100 => 51,  98 => 50,  96 => 49,  94 => 48,  92 => 47,  90 => 46,  88 => 45,  86 => 44,  84 => 43,  82 => 42,  80 => 41,  78 => 40,  76 => 39,  69 => 34,  64 => 31,  53 => 25,  49 => 24,  40 => 17,  34 => 16,  11 => 14,);
    }
}
/* {#<html>#}*/
/*     {#<head>#}*/
/* */
/*     {#</head>#}*/
/*     {#<body>#}*/
/*         {#{% for message in app.session.getFlashBag.get('message') %}#}*/
/*             {#<strong> {{ message }} </strong>#}*/
/*         {#{% endfor %}#}*/
/*         {#<form action="{{app.url_generator.generate('skpd') }}" method="post" enctype="multipart/form-data">#}*/
/*             {#{{ form_widget(form) }}#}*/
/*         {#</form>#}*/
/*     {#</body>#}*/
/* {#</html>#}*/
/* {% extends 'layouts/head.twig' %}*/
/* */
/* {% block content %}*/
/*     <br>*/
/*     <h1 class="lh30 mt15 text-center">PAKET BARU</h1>*/
/*     <p class="lead mb30 text-center">Pembuatan Usulan Paket Pengadaan</p>*/
/*     <hr>*/
/* <div class="row">*/
/*     <div class="col-md-9 center-block">*/
/* */
/*                 {% for message in app.session.getFlashBag.get('message') %}*/
/*                     <strong> <div class="alert alert-danger alert-dismissable" >*/
/*                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                             Whoops Something went wrong*/
/*                         </div>*/
/*                     </strong>*/
/*                 {% endfor %}*/
/* */
/*             <div class="admin-form theme-primary">*/
/*                 <div class="panel">*/
/*                     <form action="{{app.url_generator.generate('skpd') }}" method="post" enctype="multipart/form-data">*/
/*                         <div class="panel-body">*/
/*                             <div class="section-divider mb40 mt20"><span> Lengkapi Data </span></div>*/
/* */
/*                             {#<div id="skpd_form">#}*/
/*                                 {#<div>{{ form_widget(form.namaPaket) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.sumberDana) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.tahunAnggaran) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.paguAnggraran) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.kodeRekening) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.kodeRup) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.jenisPembayaran) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenSuratPermintaanLelang) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenHasilPerkiraanSendiri) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenCetakRup) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenKerangkaAcuanKerja) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenDaftarKuantitas) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenSpesifikasiTeknis) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenGambar) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenRancanganKontrak) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenSyaratSyaratUmumKontrak) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenSyaratSyaratKhususKontrak) }}</div>#}*/
/*                                 {#<div>{{ form_widget(form.dokumenPendukungLain) }}</div>#}*/
/*                             {#</div>#}*/
/* */
/*                             {{ form_widget(form) }}*/
/* */
/* */
/*                         </div>*/
/*                         {#<div class="panel-footer text-right">#}*/
/*                             {#{{ form_widget(form.kirim,{'attr':{'class' : 'mr10 pull-right'}}) }}#}*/
/*                         {#</div>#}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {#{% include "layouts/head.twig" %}#}*/
/* {#{% include "layouts/foot.twig" %}#}*/
