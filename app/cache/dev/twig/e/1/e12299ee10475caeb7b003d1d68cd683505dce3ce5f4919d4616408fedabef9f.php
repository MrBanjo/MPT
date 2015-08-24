<?php

/* ::newsletterForm.html.twig */
class __TwigTemplate_e12299ee10475caeb7b003d1d68cd683505dce3ce5f4919d4616408fedabef9f extends Twig_Template
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
        return "::newsletterForm.html.twig";
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
