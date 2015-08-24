<?php

/* ::menus.html.twig */
class __TwigTemplate_99cdd94c191253173065644d9bb493267d9ec4309cdc41d6dde7edb47c381912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::menus.html.twig", 1);
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
\t<section  class=\"alter_first_section\">
\t\t<div class=\"container_small\" id=\"panier_detail\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>NOS MENUS</h2>
\t\t\t</div>
\t\t\t<nav class=\"slider_menu\">\t
\t\t\t\t<ul class=\"bxslider \">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_classique"]) ? $context["liste_classique"] : $this->getContext($context, "liste_classique")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 13
            echo "\t\t\t\t    \t<li>
\t\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["plat"], "photo", array())), "html", null, true);
            echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t\t<h3>Menu classique semaine du ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["menu_classique"]) ? $context["menu_classique"] : $this->getContext($context, "menu_classique")), "date", array()), "d"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<h4>plat ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "titre", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t\t    \t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "temps", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t\t    \t\t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t    \t\t<span>Difficulté</br>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "difficulte", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t\t    \t\t<img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t    \t\t<span>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "consistance", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t<p class=\"plat_accroche\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "accroche", array()), "html", null, true);
            echo "</p>\t
\t\t\t\t\t\t    \t<p class=\"plat_description\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t    \t<p class=\"plat_description\"> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "plus", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t    \t<p class=\"sel_poivre\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
            echo "\" alt=\"\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>
\t\t\t\t\t\t    \t<a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("classique");
            echo "\" class=\"discovery orange\">découvrir notre panier classique</a>\t\t
\t\t\t\t\t\t\t</div>\t\t\t    \t
\t\t\t\t    \t</li>
\t\t\t\t    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t    \t
\t\t\t\t</ul>\t    \t\t   
\t\t\t</nav>
\t\t</div>
\t</section>\t
\t<section id=\"panier_suivant\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>Les semaines à venir</h2>
\t\t\t</div>\t    \t\t   
\t\t\t<div class=\"plat_suivant\">
\t\t\t\t<h3>Semaine du 15 au 21 juin</h3>
\t\t    \t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/semaine1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat_suivant\">
\t\t    \t<p class=\"plat_titre_suivant\">Tarte saumon et légumes</p>
\t\t    \t<a class=\"next_menu\">voir le menu</a><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\">\t\t\t
\t\t\t</div>
\t\t\t<div class=\"plat_suivant\">
\t\t\t\t<h3>Semaine du 22 au 28 juin</h3>
\t\t    \t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/semaine2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat_suivant\">
\t\t    \t<p class=\"plat_titre_suivant\">Brochettes poulet-carottes</p>
\t\t    \t<a class=\"next_menu\">voir le menu</a><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\">\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"container_small\" id=\"panier_detail\">
\t\t\t<nav class=\"slider_menu\">\t
\t\t\t\t<ul class=\"bxslider \">

\t\t\t\t";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_vegan"]) ? $context["liste_vegan"] : $this->getContext($context, "liste_vegan")));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 73
            echo "
\t\t\t    \t<li>
\t\t\t\t\t\t<img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/ratatouille.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t<h3>Menu végétarien semaine du 7 Juin</h3>
\t\t\t\t\t\t\t<h4>plat 1 : ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "titre", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<img src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "temps", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Difficulté</br>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "difficulte", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "consistance", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t    \t\t<img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment_veg.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t<p class=\"plat_accroche\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "accroche", array()), "html", null, true);
            echo "</p>\t
\t\t\t\t\t    \t<p class=\"plat_description\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t    \t<p class=\"plat_description\"> ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "plus", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t    \t<p class=\"sel_poivre\"><img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
            echo "\" alt=\"\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>
\t\t\t\t\t    \t<a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("classique");
            echo "\" class=\"discovery orange\">découvrir notre panier végétarien</a>\t\t
\t\t\t\t\t\t</div>\t\t\t    \t
\t\t\t    \t</li>

\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
\t\t\t\t</ul>\t    \t\t   
\t\t\t</nav>
\t\t</div>
\t</section>\t
\t<section id=\"panier_suivant\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>Les semaines à venir</h2>
\t\t\t</div>\t    \t\t   
\t\t\t<div class=\"plat_suivant\">
\t\t\t\t<h3>Semaine du 15 au 21 juin</h3>
\t\t    \t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/paella.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat_suivant\">
\t\t    \t<p class=\"plat_titre_suivant\">Paëlla végétarienne</p>
\t\t    \t<a class=\"next_menu\">voir le menu</a><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\">\t\t\t
\t\t\t</div>
\t\t\t<div class=\"plat_suivant\">
\t\t\t\t<h3>Semaine du 22 au 28 juin</h3>
\t\t    \t<img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/feuillete.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat_suivant\">
\t\t    \t<p class=\"plat_titre_suivant\">Feuilleté de légumes</p>
\t\t    \t<a class=\"next_menu\">voir le menu</a><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\">\t\t
\t\t\t</div>
\t\t</div>
\t</section>

";
    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

\t";
        // line 135
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
    <script>
\t    \$(document).ready(function(){
\t\t  \$('.bxslider').bxSlider({
\t\t  \tcaptions: true

\t\t  });
\t\t 
\t\t});

\t\tfunction add( nom ) { 
\t\t\tdocument.getElementById( nom ).value ++; 
\t\t}

\t\tfunction substract( nom ) { 
\t\t\tdocument.getElementById( nom ).value --; 
\t\t} 

\t\tfunction isNumberKey(evt) 
\t\t{ 
\t\t\tvar charCode = (evt.which) ? evt.which : event.keyCode 
\t\t\tif (charCode > 31 && (charCode < 48 || charCode > 57)) 
\t\t\treturn false; 

\t\t\treturn true; 
\t\t}
\t</script>
\t 
";
    }

    public function getTemplateName()
    {
        return "::menus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 136,  324 => 135,  318 => 133,  308 => 126,  303 => 124,  296 => 120,  291 => 118,  277 => 106,  266 => 101,  262 => 100,  258 => 99,  254 => 98,  250 => 97,  245 => 95,  239 => 92,  235 => 91,  228 => 87,  224 => 86,  217 => 82,  213 => 81,  207 => 78,  201 => 75,  197 => 73,  193 => 72,  181 => 63,  176 => 61,  169 => 57,  164 => 55,  150 => 43,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  111 => 34,  105 => 31,  101 => 30,  94 => 26,  90 => 25,  83 => 21,  79 => 20,  71 => 17,  67 => 16,  62 => 14,  59 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
