<?php

/* ::cart.html.twig */
class __TwigTemplate_c110a221ea85213a6cbf99905e4877e6d30a1d0464b8c6a7184a3f0f85a10bc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::cart.html.twig", 1);
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
        echo "\"><strong>1</strong> ma commande</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("cart_identification");
        echo "\" class=\"opac\"><strong>2</strong> identification</a></li>
\t\t\t\t\t<li><a href=\"\" class=\"opac\"><strong>3</strong> livraison</a></li>
\t\t\t\t\t<li><a href=\"\" class=\"opac\"><strong>4</strong> paiment</a></li>
\t\t\t\t\t<li><a href=\"\" class=\"opac\"><strong>5</strong> récapitulatif</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<div id=\"box_caddie\">
\t\t\t\t<p class=\"conseil_tel\">Besoin d’un conseil avant de finaliser votre commande ? appelez-nous : <strong>01 63 12 16 02</strong></p>
\t\t\t\t<nav class=\"breadcrumb\">
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('knp_menu')->render("breadcrumb", array("depth" => 2, "currentAsLink" => false));
        echo "
\t\t\t\t</nav>
\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("paniers");
        echo "\" id=\"continue_achat\">< Poursuivre mes achats</a>
\t\t\t\t<form action=\"\" class=\"validate_caddie\">
\t\t\t\t\t<button type=\"submit\" id=\"submit_caddie\" class=\"orange\">VALIDER MA COMMANDE</button>
\t\t\t\t</form>
\t\t\t\t<div class=\"box_table\">
\t\t\t\t\t<table class=\"table_caddie table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th id=\"caddie_table_photo\"></th>
\t\t\t\t\t\t\t\t<th id=\"caddie_table_produit\">PRODUITS(S)</th>
\t\t\t\t\t\t\t\t<th id=\"caddie_table_prix\">PRIX UNITAIRE</th>
\t\t\t\t\t\t\t\t<th id=\"caddie_table_quantite\">QUANTITé</th>
\t\t\t\t\t\t\t\t<th id=\"caddie_table_total\">total</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " <!-- Création des lignes du tableau contenant les produits -->

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th><img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["article"], "photo", array())), "html", null, true);
            echo "\" alt=\"\"></th>
\t\t\t\t\t\t\t\t\t<th>Menu hebdo (semaine du 8 juin) Formule Classique pour 2 personnes</th>
\t\t\t\t\t\t\t\t\t<th>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "prix", array()), "html", null, true);
            echo " €</th>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("quantite_cart");
            echo "\" id=\"form-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onClick=\"substract('quantite";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "');\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "moins\" class=\"quantite_cart\">-</button><!--  
\t\t\t\t\t\t\t\t\t\t\t --><input type=\"text\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "quantite", array()), "html", null, true);
            echo "\" id=\"quantite";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" size=\"2\" maxlength=\"4\" onkeypress=\"return isNumberKey(event);\" name=\"quantite\"><!-- 
\t\t\t\t\t\t\t\t\t\t\t--><button type=\"button\" onClick=\"add('quantite";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "');\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "plus\" class=\"quantite_cart\">+</button>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" name=\"article_id\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"quantite_submit\"> 
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th><span class='test'>";
            // line 55
            echo twig_escape_filter($this->env, ($this->getAttribute($context["article"], "prix", array()) * $this->getAttribute($context["article"], "quantite", array())), "html", null, true);
            echo "</span> €</th>\t\t\t            \t\t
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr class=\"green_light\">
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th>Total produits TTC</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["prix_total"]) ? $context["prix_total"] : $this->getContext($context, "prix_total")), "html", null, true);
        echo " €</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"green_dark\"> 
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th>Total HT</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["prix_total"]) ? $context["prix_total"] : $this->getContext($context, "prix_total")), "html", null, true);
        echo " €</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"green_light\">
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t<th  id=\"caddie_codereduc\">
\t\t\t\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t\t\t\t<label for=\"\">Code de réduction :</label>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t            \t\t\t\t\t<input type=\"text\" placeholder=\"Saisissez votre code\"><!-- 
\t\t\t            \t\t\t\t --><input type=\"submit\" value=\"OK\" class=\"green-button\">\t
\t\t\t            \t\t\t\t</div>
\t\t\t            \t\t\t</form>\t\t\t            \t\t\t
\t\t\t            \t\t</th>
\t\t\t            \t\t<th>TOTAL TTC</th>
\t\t\t            \t\t<th></th>
\t\t\t            \t\t<th>
\t\t\t            \t\t<strong>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["prix_total"]) ? $context["prix_total"] : $this->getContext($context, "prix_total")), "html", null, true);
        echo " €</strong>
\t\t\t            \t\t</th>
\t\t\t        \t\t</tr>\t\t\t            \t\t\t\t            \t
\t\t\t    \t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"recette_radio\">
\t\t\t\t\t\t<span >Je souhaite recevoir les recettes par email :</span>\t 
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"male\" checked>OUI
\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"female\">NON
\t\t\t\t\t\t</form>\t\t\t\t\t        \t
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("paniers");
        echo "\" id=\"continue_achat\">< Poursuivre mes achats</a>
\t\t\t\t\t<div class=\"validate_caddie\">
\t\t\t\t\t\t<form action=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("cart_identification");
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t<button type=\"submit\" id=\"submit_caddie\" class=\"orange\">VALIDER MA COMMANDE</button>
\t\t\t\t\t\t</form>\t\t        \t
\t\t\t\t\t</div>\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t<section id=\"engagement_panier\">
\t\t<div class=\"container_small\">
\t\t\t<article id=\"engagements\">
\t\t\t\t<div class=\"title_section\">
\t\t\t\t\t<h2>NOS ENGAGEMENTS</h2>
\t\t\t\t\t<p>renouer avec les plaisirs gustatifs des produits de notre région !</p>
\t\t\t\t</div>
\t\t\t\t<img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/local.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t<div id=\"engagement\">
\t\t\t\t\t<div>
\t\t\t\t\t<p>NOS PRODUITS
\t\t\t\t\t\t<br>Des ingrédients de qualité
\t\t\t\t\t\t<br> et des recettes accessibles,
\t\t\t\t\t\t<br>le tout livré chez vous pour
\t\t\t\t\t\t<br> vous simplifier la vie.</p>
\t\t\t\t\t\t<a href=\"#\">Lire la suite ></a>
\t\t\t\t\t\t<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/panier_garni.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/producteur.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<p>Des produits de
\t\t\t\t\t\t\t<br> saison issus des
\t\t\t\t\t\t\t<br> PRODUCTEURS locaux.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"#\">Lire la suite ></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Des recettes simples,
\t\t\t\t\t\t\t<br> pour tous les goûts,
\t\t\t\t\t\t\t<br> élaborées par NOS CHEFS.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"#\">Lire la suite ></a>
\t\t\t\t\t\t<img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/chef.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</section>

";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "
\t";
        // line 155
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script>
\t    \$(document).ready(function () {
\t\t\t\$('.quantite_cart').on('click', function() {
\t\t\t\t\$(this).parent().submit();
\t\t\t});

\t\t\tvar prix = 0;
\t\t\tfor (var i=0; i < \$('.test').length; i++) {
\t\t\t\tprix += parseFloat(\$('.test')[i].innerHTML);
\t\t\t}
\t    });
\t</script>

";
    }

    public function getTemplateName()
    {
        return "::cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 155,  267 => 154,  264 => 153,  252 => 144,  236 => 131,  230 => 128,  218 => 119,  200 => 104,  195 => 102,  180 => 90,  161 => 74,  151 => 67,  141 => 59,  131 => 55,  124 => 51,  118 => 50,  112 => 49,  106 => 48,  100 => 47,  95 => 45,  90 => 43,  82 => 40,  62 => 23,  57 => 21,  45 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
