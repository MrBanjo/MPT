<?php

/* ::cart-identification.html.twig */
class __TwigTemplate_feacc271dc22b6157f9281e7ed943c9ec77c7b0ffa1b5571109689be1b82ccaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::cart-identification.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<section id=\"caddie\" class=\"first_section\">
\t\t<div class=\"container_small\">
\t\t\t<nav class=\"nav_caddie\">
\t\t\t\t<label for=\"show-caddie_menu\" class=\"show-caddie_menu\">Etapes de votre commande:</label>
\t\t\t\t<input type=\"checkbox\" id=\"show-caddie_menu\" role=\"button\">
\t\t\t\t<ul id=\"menu_caddie\">
\t\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\" class=\"opac\"><strong>1</strong> ma commande</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("cart_identification");
        echo "\"><strong>2</strong> identification</a></li>
\t\t\t\t\t<li><a href=\"\" class=\"opac\"><strong>3</strong> livraison</a></li>
\t\t\t\t\t<li><a href=\"\" class=\"opac\"><strong>4</strong> paiment</a></li>
\t\t\t\t\t<li><a href=\"\" class=\"opac\"><strong>5</strong> récapitulatif</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<div id=\"box_caddie\">
\t\t\t\t<p class=\"conseil_tel\">Besoin d’un conseil avant de finaliser votre commande ? appelez-nous : <strong>01 63 12 16 02</strong></p>
                <nav class=\"breadcrumb\">
                    ";
        // line 21
        echo $this->env->getExtension('knp_menu')->render("breadcrumb", array("depth" => 5, "currentAsLink" => false));
        echo "
                </nav>
\t        </div>
<!-- \t        ";
        // line 24
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer")));
        echo "
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo " -->
            
            <div id=\"testrow\"></div>
            <div class=\"box_subs\">
                <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"login_form\">
                    <label for=\"username\">Votre email:</label>
                    <input type=\"text\" id=\"username\" name=\"_username\"  />

                    <label for=\"password\">Mot de passe:</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                    <label for=\"remember_me\">Se souvenir de moi</label>
                    
                       ";
        // line 43
        echo "                    <input type=\"submit\" value=\"Me connecter\"></input>
                </form>
            </div>
\t\t\t";
        // line 46
        echo twig_include($this->env, $context, "form/subsaccountForm.html.twig");
        echo "
\t    </div>
\t</section>

";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

\t";
        // line 54
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script type=\"text/javascript\">


    \$('.email_row').on('change', function(){

        var \$this = \$(this);
        var delay = 2000; // 2 seconds delay after last input

        clearTimeout(\$this.data('timer'));



            \$this.removeData('timer');
            \$.ajax({
                type: 'post',
                url: \"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("checkMail");
        echo "\" + \"/\" + \$(this).val(),
                data: \$(this).val(),
                beforeSend: function() {
               \$('#spinner').html('encours');
            }
                
            })
            .done(function (data) {

                \$('#spinner').html('Deja pris');
            })
            .fail(function (jqXHR, textStatus, errorThrown, data) {

                \$('#spinner').html('libre');
            })


    });





        \$(document).ready(function() 
        {
            \$('#appbundle_user_roles option:nth-child(2)').attr('selected', 'selected');
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#appbundle_user_adresses');

            // On ajoute un lien pour ajouter une nouvelle catégorie
            var \$addLink = \$('<a href=\"#\" id=\"add_adresse\" class=\"btn btn-default\">Ajouter une autre adresse de livraison</a>');
            \$container.after(\$addLink);

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            \$addLink.click(function(e) {
              addAdresse(\$container);
              e.preventDefault(); // évite qu'un # apparaisse dans l'URL
              return false;
            });

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
            if (index == 0) {
              addAdresse(\$container);
            } else {
              // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
              \$container.children('div').each(function() {
                addDeleteLink(\$(this));
              });
            }

            // La fonction qui ajoute un formulaire Categorie
            function addAdresse(\$container) 
            {
              // Dans le contenu de l'attribut « data-prototype », on remplace :
              // - le texte \"__name__label__\" qu'il contient par le label du champ
              // - le texte \"__name__\" qu'il contient par le numéro du champ
              var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Adresse n°' + (index+1))
                  .replace(/__name__/g, index));

              // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
              addDeleteLink(\$prototype);

              // On ajoute le prototype modifié à la fin de la balise <div>
              \$container.append(\$prototype);

              // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
              index++;
            }

            // La fonction qui ajoute un lien de suppression d'une catégorie
            function addDeleteLink(\$prototype) 
            {
              // Création du lien
              \$deleteLink = \$('<a href=\"#\" id=\"erase_adresse\" class=\"btn btn-danger\">Supprimer l\\'adresse</a>');

              // Ajout du lien
              \$prototype.append(\$deleteLink);

              // Ajout du listener sur le clic du lien
              \$deleteLink.click(function(e) 
              {
                \$prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
              });
            }
        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "::cart-identification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 71,  111 => 54,  105 => 52,  96 => 46,  91 => 43,  78 => 30,  71 => 26,  67 => 25,  63 => 24,  57 => 21,  45 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
