<?php

/* login.html.twig */
class __TwigTemplate_69b8eae0df3a260a9bfb6d9f3428984fe1a5fa87ae539898b76aa48bf7bd3497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        echo "    ";
        if (array_key_exists("error", $context)) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <section class=\"first_section\">
        <div class='container_small'>
            <div class=\"box_subs\">
                ";
        // line 11
        echo twig_include($this->env, $context, "form/subsaccountForm.html.twig");
        echo "
            </div>
        </div>
    </section>

";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    
    ";
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 22
        echo "    <script type=\"text/javascript\">

    \$('#appbundle_user_roles option:nth-child(2)').attr('selected', 'selected');

      \$(document).ready(function() {
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
        function addAdresse(\$container) {
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
        function addDeleteLink(\$prototype) {
          // Création du lien
          \$deleteLink = \$('<a href=\"#\" id=\"erase_adresse\" class=\"btn btn-danger\">Supprimer l\\'adresse</a>');

          // Ajout du lien
          \$prototype.append(\$deleteLink);

          // Ajout du listener sur le clic du lien
          \$deleteLink.click(function(e) {
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
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  63 => 20,  60 => 19,  57 => 18,  47 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
