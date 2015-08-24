<?php

/* newsletterForm.html.twig */
class __TwigTemplate_8808bdb58b97a1d2920c04deed4749df9496b7ed4521f2865ab21a00a4d5a0d0 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\" method=\"post\" id=\"newsletter_form\">
    <input type=\"email\" name=\"appbundle_newsletter[email]\"/><!-- 
     --><input type=\"submit\" value=\"Envoyer\" name=\"Envoyer\"></input>
</form>

";
    }

    public function getTemplateName()
    {
        return "newsletterForm.html.twig";
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
