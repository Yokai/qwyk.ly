<?php

/* @Var:{{ grav.page.header.title }} */
class __TwigTemplate_e3f8a49f51aaac672460ffab25a2e7c21be091e4a33d20a70ca6753232d9ddd9 extends Twig_Template
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
        // line 1
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "header", array()), "title", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ grav.page.header.title }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ grav.page.header.title }}*/
