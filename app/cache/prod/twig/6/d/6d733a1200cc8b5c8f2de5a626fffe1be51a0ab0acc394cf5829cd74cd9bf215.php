<?php

/* :form:subsaccountForm.html.twig */
class __TwigTemplate_6d733a1200cc8b5c8f2de5a626fffe1be51a0ab0acc394cf5829cd74cd9bf215 extends Twig_Template
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
        echo "
";
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "form/subsaccountField.html.twig"));
        echo " 
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo " 
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<div class=\"box_form_user\">
    <div class=\"box_form_user_small\">
        <p id=\"asterix_reminder\">Champ obligatoire : <span>*</span>
        </p>
        <p class=\"title_box_form\">VOS IDENTIFIANTS</p>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "email_row")));
        echo "
        <span id=\"spinner\"></span> 
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'row');
        echo "
        <div class=\"row_login_form\">
            <div class=\"label_login_form\">
                <strong>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'label');
        echo "</strong>
            </div>
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'errors');
        echo " 
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'widget');
        echo "
        </div>
    </div>
</div>
<div class=\"box_form_user\">
    <div class=\"box_form_user_small\">
        <p class=\"title_box_form\">VOS INFORMATIONS PERSONELLES</p>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civilite", array()), 'row');
        echo " 
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'row');
        echo " 
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'row');
        echo "
        <div class=\"row_login_form\" id=\"birthday_form\">
            <div class=\"label_login_form\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthdate", array()), 'label');
        echo "
            </div>
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthdate", array()), 'errors');
        echo " 
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthdate", array()), 'widget');
        echo "
        </div>
    </div>
</div>
<div class=\"box_form_user\">
    <div class=\"box_form_user_small\">
        <p class=\"title_box_form\">VOTRE ADRESSE</p>
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresses", array()), 'row');
        echo "
    </div>
</div>
<div class=\"box_form_user\">
    <div class=\"box_form_user_small\">
        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return ":form:subsaccountForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  102 => 40,  92 => 33,  88 => 32,  83 => 30,  77 => 27,  73 => 26,  69 => 25,  59 => 18,  55 => 17,  50 => 15,  44 => 12,  39 => 10,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
