<?php

/* ::vegetarien.html.twig */
class __TwigTemplate_70027d584f3171f12f48fca776d7ecf6b16f7dc9d9135b9e28b1bb546f20bd00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::vegetarien.html.twig", 1);
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
\t\t\t    <h2>NOTRE PANIER végétarien</h2>
\t\t\t</div>
\t\t    <div id=\"box_menu\">\t    \t\t   
\t\t\t    <article class=\"panier_type\">
\t\t\t    \t<p>Notre panier végétarien contient tous les ingrédients pour préparer vos repas. <strong>4 repas originaux</strong>, simples et équilibrés.</p>
\t\t\t    \t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/local.png"), "html", null, true);
        echo "\" alt=\"\" id=\"panier_type_local\">
\t\t\t    \t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/menu_veg.png"), "html", null, true);
        echo "\" alt=\"\" id=\"panier_type_photo\">
\t\t\t    \t<div class=\"panier_what\">
\t\t\t    \t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/produits.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t\t<div class=\"panier_what_trait\"></div>
\t\t\t    \t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/recettes.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t\t<div class=\"panier_what_trait\"></div>
\t\t\t    \t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/livreur.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t</div>
\t\t\t    </article>
\t\t\t    <article class=\"panier_order\">
\t\t\t    \t<div class=\"prix_paniers\">
\t\t\t    \t\t<p><strong>59 €</strong> (panier pour <strong>2</strong> pers.)</p>
\t\t\t    \t\t<form action=\"\" class=\"form_paniers\">
\t\t\t    \t\t\t<small>Choisissez le nombre de panier</small>
\t\t\t    \t\t\t<div id=\"quantite_panier\">
\t\t\t\t\t\t\t\t<a onClick=\"substract('quantite');\">-</a><!--  
\t\t\t\t\t\t\t --><input type=\"text\" value=\"1\" id=\"quantite\" size=\"2\" maxlength=\"4\" onkeypress=\"return isNumberKey(event);\"><!-- 
\t\t\t\t\t\t\t --><a onClick=\"add('quantite');\" >+</a> \t\t\t    \t\t\t\t
\t\t\t    \t\t\t</div>
\t\t\t    \t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t\t\t<SELECT name=\"fonction\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected style='display:none;'>Choisissez le nombre de personne</option>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"2\">2</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"3\">3</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"4\">4</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"5\">5</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"6\">6</OPTION>
\t\t\t\t\t\t\t\t</SELECT>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t\t\t<SELECT name=\"fonction\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected style='display:none;'>Choisissez votre fréquence de livraison</option>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"2\">1 / semaine</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"3\">2 / semaine</OPTION>
\t\t\t\t\t\t\t\t\t<OPTION VALUE=\"4\">3 / semaine</OPTION>
\t\t\t\t\t\t\t\t</SELECT>
\t\t\t\t\t\t\t</div>
\t\t\t    \t\t\t<input type=\"date\" placeholder=\"Choisissez la date de votre livraison\"><img id=\"lolol\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/small_arrow_desc.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t    \t\t\t<input type=\"submit\" value=\"AJOUTER A VOTRE COMMANDE\">
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
\t\t\t    \t<li>
\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/plat1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t<h3>Menu classique semaine du 8 Juin</h3>
\t\t\t\t\t\t\t<h4>plat 1 : Navarin de veau</h4>
\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>40 mins</span>
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Difficulté</br>Facile</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Repas complet</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t    \t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t<p class=\"plat_accroche\">Un plat léger et réconfortant pour faire le plein de vitamines!</p>\t
\t\t\t\t\t    \t<p class=\"plat_description\">Un veau parfaitement tendre et des légumes de saison (oignon blanc, pomme de terre charlotte, carotte, navet, thym, persil plat.)</p>
\t\t\t\t\t    \t<p class=\"plat_description\">Le + : du veau en directe de la ferme de l’arche, des légumes de saison</p> 
\t\t\t\t\t    \t<p class=\"sel_poivre\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>
\t\t\t\t\t    \t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
        echo "\" alt=\"\">\t\t
\t\t\t\t\t\t</div>\t\t\t    \t
\t\t\t    \t</li>
\t\t\t    \t<li>
\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/plat1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t<h3>Menu classique semaine du 8 Juin</h3>
\t\t\t\t\t\t\t<h4>plat 2 : Navarin de veau</h4>
\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>40 mins</span>
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Difficulté</br>Facile</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Repas complet</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t    \t\t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t<p class=\"plat_accroche\">Un plat léger et réconfortant pour faire le plein de vitamines!</p>\t
\t\t\t\t\t    \t<p class=\"plat_description\">Un veau parfaitement tendre et des légumes de saison (oignon blanc, pomme de terre charlotte, carotte, navet, thym, persil plat.) Le + : du veau en directe de la ferme de l’arche, des légumes de saison</p>
\t\t\t\t\t    \t<p class=\"sel_poivre\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>
\t\t\t\t\t    \t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
        echo "\" alt=\"\">\t\t
\t\t\t\t\t\t</div>\t\t\t    \t
\t\t\t    \t</li>
\t\t\t    \t<li>
\t\t\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/plat1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t<h3>Menu classique semaine du 8 Juin</h3>
\t\t\t\t\t\t\t<h4>plat 3 : Navarin de veau</h4>
\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>40 mins</span>
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Difficulté</br>Facile</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Repas complet</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t    \t\t<img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t<p class=\"plat_accroche\">Un plat léger et réconfortant pour faire le plein de vitamines!</p>\t
\t\t\t\t\t    \t<p class=\"plat_description\">Un veau parfaitement tendre et des légumes de saison (oignon blanc, pomme de terre charlotte, carotte, navet, thym, persil plat.) Le + : du veau en directe de la ferme de l’arche, des légumes de saison</p>
\t\t\t\t\t    \t<p class=\"sel_poivre\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>
\t\t\t\t\t    \t<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
        echo "\" alt=\"\">\t\t
\t\t\t\t\t\t</div>\t\t\t    \t
\t\t\t    \t</li>
\t\t\t    \t<li>
\t\t\t\t\t\t<img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/plat1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"photo_plat\">
\t\t\t\t\t\t<div id=\"plat_detail\">\t\t\t
\t\t\t\t\t\t\t<h3>Menu classique semaine du 8 Juin</h3>
\t\t\t\t\t\t\t<h4>plat 4 : Navarin de veau</h4>
\t\t\t\t\t    \t<div class=\"plat_what\">
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/horloge.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Temps de préparation</br>40 mins</span>
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/difficulte.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Difficulté</br>Facile</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t\t    \t\t<img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/consistance.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t    \t\t<span>Repas complet</span>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t\t<div class=\"plat_what_trait\"></div>
\t\t\t\t\t    \t\t<img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/aliment.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t<p class=\"plat_accroche\">Un plat léger et réconfortant pour faire le plein de vitamines!</p>\t
\t\t\t\t\t    \t<p class=\"plat_description\">Un veau parfaitement tendre et des légumes de saison (oignon blanc, pomme de terre charlotte, carotte, navet, thym, persil plat.) Le + : du veau en directe de la ferme de l’arche, des légumes de saison</p>
\t\t\t\t\t    \t<p class=\"sel_poivre\">Prévoir du sel, du poivre et de l’huile dans votre placard</p>
\t\t\t\t\t    \t<img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/sel.png"), "html", null, true);
        echo "\" alt=\"\">\t\t
\t\t\t\t\t\t</div>\t\t\t    \t
\t\t\t    \t</li>\t\t\t    \t\t\t\t    \t
\t\t\t\t</ul>\t    \t\t   
\t\t\t</nav>
\t\t</div>
\t</section>\t
\t<section id=\"upsell\">
\t\t<div class=\"container_small\">
\t\t\t<div class=\"title_section\">
\t\t\t    <h2>POUR COMPLéTER VOTRE PANIER</h2>
\t\t\t    <p>vous aimerez également</p>
\t\t\t</div>\t    \t\t   
\t\t\t<article>
\t\t\t\t<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/brie.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_upsell\">
\t\t\t\t<p class=\"upsell_titre\">Notre Brie de Melun</p>
\t\t\t\t<p class=\"provenance\">Fromagerie Loiseau <small>(77760 Achère-la-forêt)</small></p>
\t\t\t\t<span class=\"prix_upsell\">8,99 € <small>ttc (250g)</small></span>
\t\t\t\t<form action=\"\">
\t\t\t\t\t<input type=\"hidden\" value=\"\">
\t\t\t\t\t<input type=\"submit\" class=\"upsell_add\" value=\"AJOUTER A MA COMMANDE\">
\t\t\t\t</form>
\t\t\t\t<p><a class=\"next_menu\">voir notre sélection de fromages</a><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\"></p>
\t\t\t</article><!-- 
\t\t\t --><article>
\t\t\t\t<img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/creme.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_upsell\">
\t\t\t\t<p class=\"upsell_titre\">Notre crème brûlée</p>
\t\t\t\t<p class=\"provenance\">Fromagerie Loiseau <small>(77760 Achère-la-forêt)</small></p>
\t\t\t\t<span class=\"prix_upsell\">10,99 € <small>ttc (4 pots)</small></span>
\t\t\t\t<form action=\"\">
\t\t\t\t\t<input type=\"hidden\" value=\"\">
\t\t\t\t\t<input type=\"submit\" class=\"upsell_add\" value=\"AJOUTER A MA COMMANDE\">
\t\t\t\t</form>
\t\t\t\t<p><a class=\"next_menu\">voir notre sélection de desserts</a><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\"></p>\t\t\t\t
\t\t\t</article><!-- 
\t\t\t --><article>
\t\t\t\t<img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/vin.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_upsell\">
\t\t\t\t<p class=\"upsell_titre\">Notre vin des Coteaux de Suresnes</p>
\t\t\t\t<p class=\"provenance\">Clos du Pas Saint-Maurice <small>(92150 Suresnes)</small></p>
\t\t\t\t<span class=\"prix_upsell\">12,99 € <small>ttc (75cl)</small></span>
\t\t\t\t<form action=\"\">
\t\t\t\t\t<input type=\"hidden\" value=\"\">
\t\t\t\t\t<input type=\"submit\" class=\"upsell_add\" value=\"AJOUTER A MA COMMANDE\">
\t\t\t\t</form>
\t\t\t\t<p><a class=\"next_menu\">voir notre sélection de fromages</a><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/arrow_next.png"), "html", null, true);
        echo "\" alt=\"\"></p>\t\t\t\t
\t\t\t</article>
\t\t</div>
\t</section>
\t<section id=\"plat_comment\">
\t\t<div class=\"title_section\">
\t\t\t<h2>nos clients témoignent</h2>
\t\t</div>\t\t
\t\t<img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/comment1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t<img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/comment2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t<img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/menus/comment3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</section>\t

";
    }

    // line 240
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

\t";
        // line 242
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
    <script>
\t    \$(document).ready(function(){
\t\t  \$('.bxslider').bxSlider({
\t\t  \tcaptions: true

\t\t  });
\t\t  /*\$('.bx-wrapper').first().css('max-width', '800px');*/
\t\t 

\t\t});
    </script>
\t<script type=\"text/javascript\"> 
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
";
    }

    public function getTemplateName()
    {
        return "::vegetarien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 243,  393 => 242,  387 => 240,  379 => 235,  375 => 234,  371 => 233,  360 => 225,  349 => 217,  343 => 214,  332 => 206,  326 => 203,  315 => 195,  298 => 181,  290 => 176,  283 => 172,  275 => 167,  267 => 162,  258 => 156,  251 => 152,  243 => 147,  236 => 143,  228 => 138,  220 => 133,  211 => 127,  204 => 123,  196 => 118,  189 => 114,  181 => 109,  173 => 104,  164 => 98,  157 => 94,  148 => 88,  141 => 84,  133 => 79,  125 => 74,  116 => 68,  96 => 51,  62 => 20,  57 => 18,  52 => 16,  47 => 14,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
