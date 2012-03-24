<?php

/* RndBoxAuthBundle:Default:index.html.twig */
class __TwigTemplate_70ce8daceaa94fe9542c324cfd54226b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "RndBoxAuthBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
