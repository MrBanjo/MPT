<?php

/* ::paniers.html.twig */
class __TwigTemplate_a46b832fd5e391dee7c6df038a4901f90ca9f588cea59898585b50fd6200f62e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::paniers.html.twig", 1);
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
\t<section id=\"paniers_menu_soir\" class=\"first_section\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>NOS PANIERS MENUS DU SOIR</h2>
\t\t\t    <p>Pour vous simplifier la vie !</p>
\t\t\t</div>
\t\t\t<nav class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('knp_menu')->render("breadcrumb", array("depth" => 2, "currentAsLink" => false));
        echo "
\t\t\t</nav>
\t\t    <div id=\"box_menu\">\t    \t\t   
\t\t\t    <article class=\"menu_soir\">
\t\t\t    \t<h3>Classique</h3>
\t\t\t    \t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/menu_classique.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/detail.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t<div class=\"prix_paniers_box\">
\t\t\t    \t\t<span><strong>2</strong> pers. (59 €) | <strong>4</strong> pers. (89 €)<br><strong>4</strong> repas / semaine</span>
\t\t\t    \t\t<div class=\"plus_soir\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("classique");
        echo "\" class=\"orange\">découvrir ce panier</a></div>
\t\t\t    \t</div>
\t\t\t    </article>
\t\t\t    <article class=\"menu_soir\">
\t\t\t    \t<h3>Végétarien</h3>
\t\t\t    \t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/menu_veg.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/detail2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t<div class=\"prix_paniers_box\">
\t\t\t    \t\t<span><strong>2</strong> pers. (59 €) | <strong>4</strong> pers. (89 €) <br><strong>4</strong> repas / semaine</span>
\t\t\t    \t\t<div class=\"plus_soir\"><a href=\"#\" class=\"orange\">découvrir ce panier</a></div>
\t\t\t    \t</div>
\t\t\t    </article>
\t\t    </div>
\t    </div>
\t</section>
\t<section id=\"panier_menu_autre\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>NOS PANIERS convivialité</h2>
\t\t\t    <p>Pour vous simplifier la vie !</p>
\t\t\t</div>
\t\t    <div id=\"box_menu\">\t    \t\t   
\t\t\t    <article class=\"menu_autre\">
\t\t\t    \t<h3>Apéro</h3>
\t\t\t    \t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/apero.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t<div class=\"prix_paniers_box\">
\t\t\t    \t\t<span><strong>49 €</strong> le panier / <strong>4</strong> pers.</span>
\t\t\t    \t\t<div class=\"plus_convi\"><a href=\"#\" class=\"white-button\">découvrir ce panier</a></div>
\t\t\t    \t</div>
\t\t\t    </article>
\t\t\t    <article class=\"menu_autre\">
\t\t\t    \t<h3>Brunch</h3>
\t\t\t    \t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/brunch.jpg"), "html", null, true);
        echo "\" alt=\"\" id=\"brunch_img\">
\t\t\t    \t<div class=\"prix_paniers_box\">
\t\t\t    \t\t<span><strong>49 €</strong> le panier / <strong>4</strong> pers.</span>
\t\t\t    \t\t<div class=\"plus_convi\"><a href=\"#\" class=\"white-button\">découvrir ce panier</a></div>
\t\t\t    \t</div>
\t\t\t    </article>
\t\t    </div>
\t\t</div>
\t</section>\t
\t<section id=\"engagement_panier\">
\t    <div class=\"container_small\">
\t        <article id=\"engagements\">
\t            <div class=\"title_section\">
\t                <h2>NOS ENGAGEMENTS</h2>
\t                <p>renouer avec les plaisirs gustatifs des produits de notre région !</p>
\t            </div>
\t            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/local.png"), "html", null, true);
        echo "\" alt=\"\">
\t            <div id=\"engagement\">
\t                <div>
\t                    <p>NOS PRODUITS
\t                        <br>Des ingrédients de qualité
\t                        <br> et des recettes accessibles,
\t                        <br>le tout livré chez vous pour
\t                        <br> vous simplifier la vie.</p>
\t                    <a href=\"#\">Lire la suite ></a>
\t                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/panier_garni.png"), "html", null, true);
        echo "\" alt=\"\">
\t                </div>
\t                <div>
\t                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/producteur.png"), "html", null, true);
        echo "\" alt=\"\">
\t                    <p>Des produits de
\t                        <br> saison issus des
\t                        <br> PRODUCTEURS locaux.</p>
\t                    <a href=\"#\">Lire la suite ></a>
\t                </div>
\t                <div>
\t                    <p>Des recettes simples,
\t                        <br> pour tous les goûts,
\t                        <br> élaborées par NOS CHEFS.</p>
\t                    <a href=\"#\">Lire la suite ></a>
\t                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/chef.png"), "html", null, true);
        echo "\" alt=\"\">
\t                </div>
\t            </div>
\t        </article>
\t    </div>
\t</section>

";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

\t";
        // line 103
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\t\$(document).ready(function() {
\t\t    
\t\t});
\t</script>

";
    }

    public function getTemplateName()
    {
        return "::paniers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 103,  167 => 101,  155 => 92,  141 => 81,  135 => 78,  123 => 69,  104 => 53,  93 => 45,  72 => 27,  68 => 26,  60 => 21,  54 => 18,  50 => 17,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
