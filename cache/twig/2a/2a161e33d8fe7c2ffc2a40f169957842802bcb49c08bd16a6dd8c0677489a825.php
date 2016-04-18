<?php

/* partials/comments.html.twig */
class __TwigTemplate_fd5e8066192fe54a65a6bc296203e6dc6777fd551126bac3bed655d1a714c009 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "enable", array())) {
            // line 2
            echo "    <h3>";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.ADD_COMMENT");
            echo "</h3>
    

    <form name=\"";
            // line 5
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
          action=\"";
            // line 6
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
            echo "\"
          method=\"";
            // line 7
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 9
                echo "
        ";
                // line 10
                $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 11
                echo "        ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 12
                    echo "            ";
                    $context["value"] = $this->env->getExtension('GravTwigExtension')->evaluateFunc($this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 13
                    echo "        ";
                }
                // line 14
                echo "        <div>
            ";
                // line 15
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 15)->display($context);
                // line 16
                echo "        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
        <div class=\"buttons\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 21
                echo "            <button class=\"button\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo (($this->getAttribute($context["button"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", array()), "Submit")) : ("Submit"));
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>

        ";
            // line 25
            echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    <div class=\"alert\">";
            // line 28
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>

    ";
            // line 30
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array()))) {
                // line 31
                echo "
        <h3>";
                // line 32
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.COMMENTS");
                echo "</h3>

        <table>
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 36
                    echo "            <tr>
                <td>
                    ";
                    // line 38
                    echo $this->getAttribute($context["comment"], "text", array());
                    echo "
                    <br />
                    ";
                    // line 40
                    echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo " ";
                    echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.BY");
                    echo " ";
                    echo $this->getAttribute($context["comment"], "author", array());
                    echo "
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        </table>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 44,  149 => 40,  144 => 38,  140 => 36,  136 => 35,  130 => 32,  127 => 31,  125 => 30,  120 => 28,  114 => 25,  110 => 23,  99 => 21,  95 => 20,  91 => 18,  76 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if grav.twig.enable %}*/
/*     <h3>{{'PLUGIN_COMMENTS.ADD_COMMENT'|t}}</h3>*/
/*     */
/* */
/*     <form name="{{ grav.config.plugins.comments.form.name }}"*/
/*           action="{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}"*/
/*           method="{{ grav.config.plugins.comments.form.method|upper|default('POST') }}">*/
/*     {% for field in grav.config.plugins.comments.form.fields %}*/
/* */
/*         {% set value = form.value(field.name) %}*/
/*         {% if field.evaluateDefault %}*/
/*             {% set value = evaluate(field.evaluateDefault) %}*/
/*         {% endif %}*/
/*         <div>*/
/*             {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*         <div class="buttons">*/
/*         {% for button in grav.config.plugins.comments.form.buttons %}*/
/*             <button class="button" type="{{ button.type|default('submit') }}">{{ button.value|default('Submit') }}</button>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*         {{ nonce_field('form', 'form-nonce') }}*/
/*     </form>*/
/* */
/*     <div class="alert">{{ form.message }}</div>*/
/* */
/*     {% if grav.twig.comments|length %}*/
/* */
/*         <h3>{{'PLUGIN_COMMENTS.COMMENTS'|t}}</h3>*/
/* */
/*         <table>*/
/*             {% for comment in grav.twig.comments|array_reverse %}*/
/*             <tr>*/
/*                 <td>*/
/*                     {{comment.text}}*/
/*                     <br />*/
/*                     {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}} {{'PLUGIN_COMMENTS.BY'|t}} {{comment.author}}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* {% endif %}*/
