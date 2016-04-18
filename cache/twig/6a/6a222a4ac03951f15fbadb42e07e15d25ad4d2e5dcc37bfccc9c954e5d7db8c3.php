<?php

/* @Var:{{ grav.uri.path }} */
class __TwigTemplate_08724eafe4fa3907c0d9795618944f45fe35e6e0495a6e39a87eb1724ff797f8 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "uri", array()), "path", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ grav.uri.path }}";
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
/* {{ grav.uri.path }}*/
