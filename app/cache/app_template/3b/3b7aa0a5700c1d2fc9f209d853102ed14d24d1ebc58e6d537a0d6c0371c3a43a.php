<?php

/* skpd.twig */
class __TwigTemplate_791cb5599df1ff983c4fde2bb628fdbbbdec6d938c4e71982728f23296e850dc extends Twig_Template
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
        $__internal_87288728921ec595c4d0104fb1a90e82b964f7e9369a03e067b015ff45a1bc83 = $this->env->getExtension("native_profiler");
        $__internal_87288728921ec595c4d0104fb1a90e82b964f7e9369a03e067b015ff45a1bc83->enter($__internal_87288728921ec595c4d0104fb1a90e82b964f7e9369a03e067b015ff45a1bc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skpd.twig"));

        // line 1
        echo "<html>
    <head>

    </head>
    <body>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <strong> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </strong>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "skpd"), "method"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </form>
    </body>
</html>";
        
        $__internal_87288728921ec595c4d0104fb1a90e82b964f7e9369a03e067b015ff45a1bc83->leave($__internal_87288728921ec595c4d0104fb1a90e82b964f7e9369a03e067b015ff45a1bc83_prof);

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
        return array (  47 => 10,  42 => 9,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/* */
/*     </head>*/
/*     <body>*/
/*         {% for message in app.session.getFlashBag.get('message') %}*/
/*             <strong> {{ message }} </strong>*/
/*         {% endfor %}*/
/*         <form action="{{app.url_generator.generate('skpd') }}" method="post" enctype="multipart/form-data">*/
/*             {{ form_widget(form) }}*/
/*         </form>*/
/*     </body>*/
/* </html>*/
