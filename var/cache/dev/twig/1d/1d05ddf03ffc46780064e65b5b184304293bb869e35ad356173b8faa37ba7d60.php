<?php

/* base.html.twig */
class __TwigTemplate_2ec49c551b9c838c9b997ba329c99f3b9e68944cd6fefd34ed4dda12d6e9ed8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be1686356f815c8595fe13b532e9dc3a0d2f0bec90acc58fc3dc450da355da9 = $this->env->getExtension("native_profiler");
        $__internal_9be1686356f815c8595fe13b532e9dc3a0d2f0bec90acc58fc3dc450da355da9->enter($__internal_9be1686356f815c8595fe13b532e9dc3a0d2f0bec90acc58fc3dc450da355da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9be1686356f815c8595fe13b532e9dc3a0d2f0bec90acc58fc3dc450da355da9->leave($__internal_9be1686356f815c8595fe13b532e9dc3a0d2f0bec90acc58fc3dc450da355da9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_044ccb897f830720513b8c68de3ab48385326fa372a8e017bbac0895bbe9dfd6 = $this->env->getExtension("native_profiler");
        $__internal_044ccb897f830720513b8c68de3ab48385326fa372a8e017bbac0895bbe9dfd6->enter($__internal_044ccb897f830720513b8c68de3ab48385326fa372a8e017bbac0895bbe9dfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_044ccb897f830720513b8c68de3ab48385326fa372a8e017bbac0895bbe9dfd6->leave($__internal_044ccb897f830720513b8c68de3ab48385326fa372a8e017bbac0895bbe9dfd6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1b03f08d4101d469658685108d4a4c50688b8820bb343dd68914d41d74328c2 = $this->env->getExtension("native_profiler");
        $__internal_a1b03f08d4101d469658685108d4a4c50688b8820bb343dd68914d41d74328c2->enter($__internal_a1b03f08d4101d469658685108d4a4c50688b8820bb343dd68914d41d74328c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1b03f08d4101d469658685108d4a4c50688b8820bb343dd68914d41d74328c2->leave($__internal_a1b03f08d4101d469658685108d4a4c50688b8820bb343dd68914d41d74328c2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a235e3d0146f71302fcdbb3dee52b71f473efcc6f0ad44cc58fb1073f3d5fad = $this->env->getExtension("native_profiler");
        $__internal_4a235e3d0146f71302fcdbb3dee52b71f473efcc6f0ad44cc58fb1073f3d5fad->enter($__internal_4a235e3d0146f71302fcdbb3dee52b71f473efcc6f0ad44cc58fb1073f3d5fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a235e3d0146f71302fcdbb3dee52b71f473efcc6f0ad44cc58fb1073f3d5fad->leave($__internal_4a235e3d0146f71302fcdbb3dee52b71f473efcc6f0ad44cc58fb1073f3d5fad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9eb02f8114db89b8a3ac57bfd3882cb7c8d9e3ffc31b44e09118b96174d35c59 = $this->env->getExtension("native_profiler");
        $__internal_9eb02f8114db89b8a3ac57bfd3882cb7c8d9e3ffc31b44e09118b96174d35c59->enter($__internal_9eb02f8114db89b8a3ac57bfd3882cb7c8d9e3ffc31b44e09118b96174d35c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9eb02f8114db89b8a3ac57bfd3882cb7c8d9e3ffc31b44e09118b96174d35c59->leave($__internal_9eb02f8114db89b8a3ac57bfd3882cb7c8d9e3ffc31b44e09118b96174d35c59_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
