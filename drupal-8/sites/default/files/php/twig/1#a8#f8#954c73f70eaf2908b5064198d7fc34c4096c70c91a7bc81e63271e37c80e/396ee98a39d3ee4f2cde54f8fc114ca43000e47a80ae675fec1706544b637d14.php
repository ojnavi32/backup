<?php

/* modules/kuroko/templates/Porting.html.twig */
class __TwigTemplate_a8f8954c73f70eaf2908b5064198d7fc34c4096c70c91a7bc81e63271e37c80e extends Twig_Template
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
        echo "<h1>Hello</h1>
";
        // line 2
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "something", array()), "html", null, true);
        echo "
";
        // line 3
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["nodes"]) ? $context["nodes"] : null), "title", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/kuroko/templates/Porting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
