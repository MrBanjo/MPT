<?php

/* accueil.html.twig */
class __TwigTemplate_8073284b22ead3b3ab1082e35264259f7df4cfc2103239dbdad8cddc70f41566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueil.html.twig", 1);
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
<div class=\"accueil\">
    <section id=\"banner\">
        <div class=\"container_small\">
            <div id=\"title_banner\">
                <h1>CUISINEZ COMME UN CHEF !</h1>
                <p>les produits de notre région</p>
            </div>
            <div id=\"show_panier\" class=\"orange\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("paniers");
        echo "\">VOIR NOS PANIERS</a>
            </div>
        </div>
    </section>
    <section id=\"howitworks\">
        <div class=\"container_small\">
            <div class=\"title_section\">
                <h2>COMMENT CA MARCHE</h2>
                <p>Le panier à la semaine pour concocter de délicieux repas, livré directement chez soi !</p>
            </div>
            <div id=\"show_how\">
                <div class=\"afterarrow howdiv\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/toque.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Chaque semaine, nos chefs créent de nouvelles recettes pour réaliser 4 plats.</p>
                </div>
                <div class=\"afterarrow howdiv\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/panier.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Vous choisissez votre panier contenant des produits locaux et de saison</p>
                </div>
                <div class=\"afterarrow howdiv\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/camion.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Nous vous livrons à domicile</p>
                </div>
                <div class=\"howdiv\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/assiette.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Vous cuisinez un repas original. Comme un chef!</p>
                </div>
            </div>
        </div>
    </section>
    <section id=\"last_section\">
        <div class=\"container_small\">
            <article id=\"plat\">
                <div class=\"title_section\">
                    <h2>NOS MENUS</h2>
                    <p>Chaque semaine, nous créons de délicieuses recettes.</p>
                </div>
                <div id=\"slider_start\">
                    <nav id=\"slider_start_nav\">
                        <ul class=\"bxslider\">
                            <li><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/plat/semaine/plat.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                            <li><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/plat/semaine/plat2.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                            <li><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/plat/semaine/plat3.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                        </ul>
                    </nav>
                    <div id=\"slider_button\">
                        <div id=\"show_menus_slider\">
                        \t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("menus");
        echo "\" class=\"white-button\">VOIR NOS MENUS</a>
                        </div>
                        <div id=\"show_paniers_slider\">
                        \t<a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("paniers");
        echo "\" class=\"orange\">VOIR NOS PANIERS</a>
                        </div>
                    </div>
                </div>
            </article><!-- 
         --><article id=\"jeu\">
                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/event.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </article>

\t\t\t";
        // line 72
        if ( !twig_test_empty((isset($context["liste_blog"]) ? $context["liste_blog"] : $this->getContext($context, "liste_blog")))) {
            // line 73
            echo "
\t            <article id=\"blog_accueil\">
\t                <div id=\"title_blog_accueil\">
\t                    <h2>LES DERNIERS ARTICLES DE NOTRE BLOG</h2>
\t                </div>
\t                ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_blog"]) ? $context["liste_blog"] : $this->getContext($context, "liste_blog")));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 79
                echo "\t                    <div class=\"blog_accueil_box\">
\t                        <h5>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "titre", array()), "html", null, true);
                echo "</h5>
\t                        <small>Publié le <strong>";
                // line 81
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["blog"], "date", array()), "medium", "none", "fr"), "html", null, true);
                echo "</strong>
\t                            dans la rubrique <strong>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blog"], "rubriqueblog", array()), "nom", array()), "html", null, true);
                echo "</strong></small>
\t                        <p>";
                // line 83
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["blog"], "article", array()), 145, false, " (...)"), "html", null, true);
                echo "</p>
\t                        <a href=\"\">lire la suite</a>
\t                        <img src=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["blog"], "image", array())), "html", null, true);
                echo "\" alt=\"\">
\t                    </div>
\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t            </article>

            ";
        }
        // line 91
        echo "
            <article id=\"commentaire\">
                <h4>NOS CLIENTS</br>
                    <small>témoignent</small>
                </h4>
                <div><p>« Très pratique pour éviter les courses et toute la famille est contente ! Une nourriture
                        saine et je reprends plaisir à cuisiner comme un chef ! » <br><span>Marie (77450)</span></p>
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/3stars.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div><p>« Vraiment sympa ! Pratique, rapide à préparer je reprends plaisir à cuisiner ! Les produits
                        du terroirs sont tops ! » <br><span>Nadia (75013)</span></p>
                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/4stars.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div><p>« Au départ assez sceptique sur le coût ... mais après quelques semaines, je ne regrette
                        rien ! » <br><span>Charles (75004)</span></p>
                    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/3stars.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div id=\"youradvice\">
                    <a href=\"#\">Donnez-nous votre avis<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/medium_arrow_white.png"), "html", null, true);
        echo "\"
                                                           alt=\"\"></a>
                </div>

            </article><!-- 
         --><article id=\"engagements\">
                <div class=\"title_section\">
                    <h2>NOS ENGAGEMENTS</h2>

                    <p>renouer avec les plaisirs gustatifs des produits de notre région !</p>
                </div>
                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/local.png"), "html", null, true);
        echo "\" alt=\"\">

                <div id=\"engagement\">
                    <div>
                        <p>NOS PRODUITS<br>Des ingrédients de qualité <br> et des recettes accessibles, <br>le tout livré chez vous pour<br> vous simplifier la vie.</p>
                        <a href=\"#\">Lire la suite ></a>
                        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/panier_garni.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div>
                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/producteur.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Des produits de <br> saison issus des <br> PRODUCTEURS locaux.</p>
                        <a href=\"#\">Lire la suite ></a>
                    </div>
                    <div>
                        <p>Des recettes simples, <br> pour tous les goûts, <br> élaborées par NOS CHEFS.</p>
                        <a href=\"#\">Lire la suite ></a>
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil/chef.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>

";
    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        // line 147
        echo "
\t";
        // line 148
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t    \$(document).ready(function () {
\t        \$('.bxslider').bxSlider({
\t            captions: true
\t        });
\t    });
\t</script>

";
    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 150,  269 => 148,  266 => 147,  263 => 146,  250 => 136,  240 => 129,  234 => 126,  225 => 120,  211 => 109,  205 => 106,  198 => 102,  191 => 98,  182 => 91,  177 => 88,  168 => 85,  163 => 83,  159 => 82,  155 => 81,  151 => 80,  148 => 79,  144 => 78,  137 => 73,  135 => 72,  129 => 69,  120 => 63,  114 => 60,  106 => 55,  102 => 54,  98 => 53,  79 => 37,  72 => 33,  65 => 29,  58 => 25,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
