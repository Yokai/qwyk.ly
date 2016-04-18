<?php

/* @Var:{{ grav.language.getLanguage }} */
class __TwigTemplate_ba5525ddfcd8ce32f5936f80e4ef18ba0a0ffcd1b4ab1eb7849937e8478233f3 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ grav.language.getLanguage }}";
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
/* {{ grav.language.getLanguage }}*/
