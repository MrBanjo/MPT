<?php

/* :admin:edit.html.twig */
class __TwigTemplate_377ac0384e62fab077f561029cba495b1301a39c0d09cb7c2081bc4f3eb9b5fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", ":admin:edit.html.twig", 1);
        $this->blocks = array(
            'body_admin' => array($this, 'block_body_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body_admin($context, array $blocks = array())
    {
        // line 5
        echo "

<h1 class=\"page-header\">Dashboard</h1>
<h2 class=\"sub-header\">Edition</h2>
";
        // line 9
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != "")) {
            // line 10
            echo "    <p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "


";
    }

    public function getTemplateName()
    {
        return ":admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  11 => 1,);
    }
}
