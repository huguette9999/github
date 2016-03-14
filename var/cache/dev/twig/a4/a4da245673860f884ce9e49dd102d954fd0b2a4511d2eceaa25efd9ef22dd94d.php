<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee2074dbb7a68c80eebaeef66320fe9fce1185b76c65724b2163c105bdec6617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9307358d74635dfa3a6cdfcc77007a3eb854dcc32ac600a1c05edc09dea311a9 = $this->env->getExtension("native_profiler");
        $__internal_9307358d74635dfa3a6cdfcc77007a3eb854dcc32ac600a1c05edc09dea311a9->enter($__internal_9307358d74635dfa3a6cdfcc77007a3eb854dcc32ac600a1c05edc09dea311a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9307358d74635dfa3a6cdfcc77007a3eb854dcc32ac600a1c05edc09dea311a9->leave($__internal_9307358d74635dfa3a6cdfcc77007a3eb854dcc32ac600a1c05edc09dea311a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cc0218f1af0d5421adf8ce6237ca9ab3002fe64a3bd53855c75d93574501b8d = $this->env->getExtension("native_profiler");
        $__internal_2cc0218f1af0d5421adf8ce6237ca9ab3002fe64a3bd53855c75d93574501b8d->enter($__internal_2cc0218f1af0d5421adf8ce6237ca9ab3002fe64a3bd53855c75d93574501b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2cc0218f1af0d5421adf8ce6237ca9ab3002fe64a3bd53855c75d93574501b8d->leave($__internal_2cc0218f1af0d5421adf8ce6237ca9ab3002fe64a3bd53855c75d93574501b8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f125b8255f2604d3ffbc721cdced21010f9b93e2449f8237d1aee068a3470262 = $this->env->getExtension("native_profiler");
        $__internal_f125b8255f2604d3ffbc721cdced21010f9b93e2449f8237d1aee068a3470262->enter($__internal_f125b8255f2604d3ffbc721cdced21010f9b93e2449f8237d1aee068a3470262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f125b8255f2604d3ffbc721cdced21010f9b93e2449f8237d1aee068a3470262->leave($__internal_f125b8255f2604d3ffbc721cdced21010f9b93e2449f8237d1aee068a3470262_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa51a0a66ffce7ed3705d4ac2046de151445a450682f8157bc15d7cd601f9089 = $this->env->getExtension("native_profiler");
        $__internal_fa51a0a66ffce7ed3705d4ac2046de151445a450682f8157bc15d7cd601f9089->enter($__internal_fa51a0a66ffce7ed3705d4ac2046de151445a450682f8157bc15d7cd601f9089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa51a0a66ffce7ed3705d4ac2046de151445a450682f8157bc15d7cd601f9089->leave($__internal_fa51a0a66ffce7ed3705d4ac2046de151445a450682f8157bc15d7cd601f9089_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
