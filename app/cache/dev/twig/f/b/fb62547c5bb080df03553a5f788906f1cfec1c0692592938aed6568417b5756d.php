<?php

/* loginheaderForm.html.twig */
class __TwigTemplate_fb62547c5bb080df03553a5f788906f1cfec1c0692592938aed6568417b5756d extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"login_form\">
    <label for=\"username\">Votre email:</label>
    <input type=\"text\" id=\"username\" name=\"_username\"  />

    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Se souvenir de moi</label>
    ";
        // line 15
        echo "
    <input type=\"submit\" value=\"Me connecter\"></input>
   </form>



";
    }

    public function getTemplateName()
    {
        return "loginheaderForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 15,  19 => 1,);
    }
}
