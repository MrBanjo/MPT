<?php

/* ::classique.html.twig */
class __TwigTemplate_0542d22e24bd854766e58b4f375acf23e265d93f728b3a749a8948b092130e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::classique.html.twig", 1);
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
\t<section id=\"panier_class\" class=\"first_section\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>NOTRE PANIER CLASSIQUE</h2>
\t\t\t</div>
\t\t\t<nav class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('knp_menu')->render("breadcrumb", array("depth" => 2, "currentAsLink" => false));
        echo "
\t\t\t</nav>
\t\t    <div id=\"box_menu\">\t    \t\t   
\t\t\t    <article class=\"panier_type\">
\t\t\t    \t<p>Notre panier classique contient tous les ingrédients pour préparer vos repas. <strong>4 repas originaux</strong>, simples et équilibrés.</p>
\t\t\t    \t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/local.png"), "html", null, true);
        echo "\" alt=\"\" id=\"panier_type_local\">
\t\t\t    \t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/menu_classique2.png"), "html", null, true);
        echo "\" alt=\"\" id=\"panier_type_photo\">
\t\t\t    \t<div class=\"panier_what\">
\t\t\t    \t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/produits.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t\t<div class=\"panier_what_trait\"></div>
\t\t\t    \t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/recettes.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t\t<div class=\"panier_what_trait\"></div>
\t\t\t    \t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/livreur.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t</div>
\t\t\t    </article>
\t\t\t    <article class=\"panier_order\">
\t\t\t    \t<div class=\"prix_paniers\">
\t\t\t    \t\t<p><strong id=\"update_prix\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu_classique"]) ? $context["menu_classique"] : $this->getContext($context, "menu_classique")), "prix", array()), "html", null, true);
        echo "</strong><strong> €</strong> (panier pour <strong id=\"update_pers\">2</strong> pers.)</p>
\t\t\t    \t\t<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("addtocart", array("slug" => "Menu"));
        echo "\" method=\"post\" class=\"submit_product\">
\t\t\t    \t\t\t<small>Choisissez le nombre de panier</small>
\t\t\t    \t\t\t<div id=\"quantite_panier\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"green-button quantite_button\" onClick=\"substract('quantite');\" formnovalidate=\"formnovalidate\">-</button><!--  
\t\t\t\t\t\t\t --><input type=\"number\" value=\"1\" id=\"quantite\" min=\"1\" max=\"9\" name=\"quantite\" size=\"2\" maxlength=\"4\" onkeypress=\"return isNumberKey(event);\" required><!-- 
\t\t\t\t\t\t\t --><button type=\"button\" class=\"green-button quantite_button\" onClick=\"add('quantite');\" >+</button> \t\t\t    \t\t\t\t
\t\t\t    \t\t\t</div>
\t\t\t    \t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t\t\t<SELECT name=\"fonction\" id=\"nbre_pers\">
\t\t\t\t\t\t\t\t\t<option value=\"2\" disabled selected style='display:none;'>Choisissez le nombre de personne</option>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"2\">2</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"4\">4</OPTION>
\t\t\t\t\t\t\t\t</SELECT>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t\t\t<SELECT name=\"fonction\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected style='display:none;'>Choisissez votre fréquence de livraison</option>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"2\">1 semaine sur 2</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"3\">1 semaine sur 3</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"4\">1 semaine sur 4</OPTION>
\t\t\t\t\t\t\t\t</SELECT>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_product\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu_classique"]) ? $context["menu_classique"] : $this->getContext($context, "menu_classique")), "id", array()), "html", null, true);
        echo "\">
\t\t\t    \t\t\t<input type=\"date\" onfocus=\"(this.type='date')\" placeholder=\"Choisissez la date de votre livraison\"><img id=\"lolol\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/small_arrow_desc.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t\t\t<input type=\"submit\" value=\"AJOUTER A VOTRE COMMANDE\" class=\"orange\">
\t\t\t    \t\t</form>
\t\t\t    \t\t<small>A commander jusqu'au 5 juin</small>
\t\t\t    \t</div>
\t\t\t    </article>
\t\t    </div>
\t    </div>
\t</section>
\t<section id=\"panier_detail\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>MENU DE NOTRE PANIER</h2>
\t\t\t</div>
\t\t\t<nav class=\"slider_menu\">\t
\t\t\t\t<ul class=\"bxslider \">

\t\t\t\t\t";
        // line 69
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
            // line 70
            echo "
\t\t\t\t    \t<li>
\t\t\t\t\t\t\t<img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["plat"], "photo", array())), "html", null, true);
            echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t\t<h3>Menu classique semaine du ";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["menu_classique"]) ? $context["menu_classique"] : $this->getContext($context, "menu_classique")), "date", array()), "d"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<h4>plat ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "titre", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t\t    \t\t<img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "temps", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t\t    \t\t<img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t    \t\t<span>Difficulté</br>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "difficulte", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t\t    \t\t<img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t    \t\t<span>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "consistance", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t<p class=\"plat_accroche\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "accroche", array()), "html", null, true);
            echo "</p>\t
\t\t\t\t\t\t    \t<p class=\"plat_description\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t    \t<p class=\"plat_description\"> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "plus", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t    \t<p class=\"sel_poivre\"><img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
            echo "\" alt=\"\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>\t\t
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
        // line 102
        echo "
\t\t\t\t</ul>\t    \t\t   
\t\t\t</nav>
\t\t</div>
\t</section>\t
\t<section id=\"upsell\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>POUR COMPLéTER VOTRE PANIER</h2>
\t\t\t    <p>vous aimerez également</p>
\t\t\t</div>

\t\t\t";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_upsell"]) ? $context["liste_upsell"] : $this->getContext($context, "liste_upsell")));
        foreach ($context['_seq'] as $context["categorie"] => $context["upsell"]) {
            echo "<!-- 
\t\t\t
\t\t\t --><article> 
\t\t\t\t\t<img src=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["upsell"], "photo", array())), "html", null, true);
            echo "\" alt=\"\" class=\"img_upsell\">
\t\t\t\t\t<p class=\"upsell_titre\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["upsell"], "titre", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p class=\"provenance\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["upsell"], "origine", array()), "html", null, true);
            echo " <small>(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["upsell"], "departement", array()), "html", null, true);
            echo ")</small></p>
\t\t\t\t\t<span class=\"prix_upsell\">";
            // line 120
            echo twig_escape_filter($this->env, twig_localized_number_filter($this->getAttribute($context["upsell"], "prix", array())), "html", null, true);
            echo " € <small>ttc (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["upsell"], "contenance", array()), "html", null, true);
            echo ")</small></span>
\t\t\t\t\t<form action=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("addtocart", array("slug" => "Upsell"));
            echo "\" method=\"post\" class=\"submit_product\">
\t\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"quantite\" >
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_product\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["upsell"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" class=\"upsell_add orange\" value=\"AJOUTER A MA COMMANDE\">
\t\t\t\t\t</form>
\t\t\t\t\t<p><a class=\"next_menu\">voir notre sélection de ";
            // line 126
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["categorie"]), "html", null, true);
            echo "s</a><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
            echo "\" alt=\"\"></p>
\t\t\t\t</article><!--

\t\t-->";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['categorie'], $context['upsell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
\t\t</div>
\t</section>
\t<section id=\"plat_comment\">
\t\t<div class=\"title_section\">
\t\t\t<h2>nos clients témoignent</h2>
\t\t</div>\t\t
\t\t<img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/comment1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t<img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/comment2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t<img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/comment3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</section>
\t<a href=\"#popup-cart\" class=\"open-popup-link\" id=\"popup-link\">Show inline popup</a>
\t<div id=\"popup-cart\" class=\"addtocart-popup mfp-hide \">
\t\t<p>Vous venez d'ajouter à votre panier:</p>
\t\t<div id=\"popup-box\">
\t\t\t<img id=\"popup-photo\">
\t\t\t<span id=\"popup-quantite\"></span>
\t\t\t<span>-</span>
\t\t\t<span id=\"popup-titre\"></span>
\t\t\t<a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\" id=\"popup-end\">Terminer ma commande ></a>
\t\t\t<a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" id=\"popup-continue\">Poursuivre mes achats ></a>\t\t
\t\t</div>
\t</div>


";
    }

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

\t";
        // line 159
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <script>
\t    \$(document).ready(function(){

\t    \t// Sliders + Popup plugin
\t\t\t\$('.bxslider').bxSlider({
\t\t\tcaptions: true
\t\t\t});
\t\t
\t\t    \$('.open-popup-link').magnificPopup({
\t\t\t  type:'inline',
\t\t\t  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
\t\t\t});


\t\t    // Mis à jour du prix du panier
\t\t\t\$('.quantite_button').on(\"click\", function() {
\t\t\t\tif(\$('#nbre_pers').val() == null || \$('#nbre_pers').val() == 2) {
\t\t\t\t\t\$('#update_prix').html(\$('#quantite').val()*";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu_classique"]) ? $context["menu_classique"] : $this->getContext($context, "menu_classique")), "prix", array()), "html", null, true);
        echo ");
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$('#update_prix').html(\$('#quantite').val()*89);
\t\t\t\t}\t
\t\t\t});
\t\t\t
\t\t\t\$('#nbre_pers').on(\"change\", function() {
\t\t\t\tif(\$('#nbre_pers').val() == null || \$('#nbre_pers').val() == 2) {
\t\t\t\t\t\$('#update_prix').html(\$('#quantite').val()*";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu_classique"]) ? $context["menu_classique"] : $this->getContext($context, "menu_classique")), "prix", array()), "html", null, true);
        echo ");
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$('#update_prix').html(\$('#quantite').val()*89);
\t\t\t\t}
\t\t\t\t\$('#update_pers').html(\$('#nbre_pers').val());\t
\t\t\t});


\t\t\t// Requete AJAX pour ajouter le produit au caddie
\t\t\t\$(\".submit_product\").submit(function(e){
\t\t\t\te.preventDefault();
\t        \t\$.ajax({
\t                type: 'post',
\t                url: \$(this).attr('action'),
\t                data: \$(this).serialize(),
\t                
\t        \t})
\t        \t.done(function (data) {
\t            \t\$('#popup-photo').attr('src', \"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "\" + data.photo);
\t            \t\$('#popup-quantite').html(data.quantite);
\t            \t\$('#popup-titre').html(data.titre);
\t            \t\$('a.open-popup-link').trigger('click');
\t        \t})
\t        \t.fail(function (jqXHR, textStatus, errorThrown) {
\t\t\t
\t\t\t\t})
\t\t\t})

\t\t});

\t</script>

";
    }

    public function getTemplateName()
    {
        return "::classique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 207,  391 => 188,  379 => 179,  358 => 161,  354 => 160,  350 => 159,  344 => 157,  334 => 150,  330 => 149,  317 => 139,  313 => 138,  309 => 137,  300 => 130,  288 => 126,  282 => 123,  277 => 121,  271 => 120,  265 => 119,  261 => 118,  257 => 117,  249 => 114,  235 => 102,  216 => 97,  212 => 96,  208 => 95,  204 => 94,  199 => 92,  193 => 89,  189 => 88,  182 => 84,  178 => 83,  171 => 79,  167 => 78,  159 => 75,  155 => 74,  150 => 72,  146 => 70,  129 => 69,  109 => 52,  105 => 51,  80 => 29,  76 => 28,  68 => 23,  63 => 21,  58 => 19,  53 => 17,  49 => 16,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
