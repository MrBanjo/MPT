<?php

/* base.html.twig */
class __TwigTemplate_cb647d0bedc7ddd9b2608bb91231611e904f59e5b4b073a8c6e0f9b95cac336e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div class='container_small'>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/header/logo.png"), "html", null, true);
        echo "\" alt=\"logo monpaniertoque\" id=\"logo\"></a>
                <nav class=\"nav_header\">
                    <label for=\"show-menu\" class=\"show-menu\"></label>
                    <input type=\"checkbox\" id=\"show-menu\" role=\"button\">
                    <ul id=\"menu_header\">
                        <li class=\"left_li\">                         
                            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("paniers");
        echo "\">NOS PANIERS ￬</a>
                            <ul class=\"ulhidden\">
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("classique");
        echo "\">Panier classique</a></li>
                                <li><a href=\"#\">Panier végétarien</a></li>
                                <li><a href=\"#\">Panier Apéro</a></li>
                                <li><a href=\"#\">Panier Brunch</a></li>
                            </ul>               
                            <li class=\"left_li\">
                                <a href=\"#\">COMMENT CA MARCHE ￬</a>
                                <ul class=\"ulhidden\">
                                    <li><a href=\"#\">Le concept</a></li>
                                    <li><a href=\"#\">Zones de livraison</a></li>
                                    <li><a href=\"#\">Nos producteurs partenaires</a></li>
                                    <li><a href=\"#\">Nos chefs</a></li>
                                </ul>
                            </li>
                            <li class=\"left_li\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("menus");
        echo "\" id=\"menus_header\" >NOS MENUS</a></li>
                            <li><a href=\"#\" class=\"right_li\">CARTE CADEAU</a></li>
                            <li><a href=\"#\" class=\"right_li\">QUI SOMMES NOUS</a></li>
                            <li class=\"right_li\"><div id=\"barre_left\"></div><a href=\"\" id=\"question\">UNE QUESTION ? 01 63 12 16 02</a></li>
                        </li>
                    </ul>
                </nav>
                <div id=\"header_right\">
                    <div id=\"account_header\">
                        <div class=\"form_header\">
                            ";
        // line 54
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 55
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se déconnecter</a>
                            ";
        } else {
            // line 57
            echo "                                <div>
                                    ";
            // line 58
            echo twig_include($this->env, $context, "loginheaderForm.html.twig");
            echo "
                                    <p id=\"error_login_header\"></p>
                                </div>
                                <div>
                                    <a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Créer mon compte</a>
                                </div>
                            ";
        }
        // line 65
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">Admin</a>
                            ";
        }
        // line 68
        echo "                        </div>                        
                    </div>
                    ";
        // line 70
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 71
            echo "                        <p id=\"prenom_header\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 72
        echo "                 
                </div> 
                <div id=\"caddie_header\">
                    <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\">
                        <div id=\"count_caddie\">
                            ";
        // line 77
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Cart:CountCaddie"));
        echo "
                        </div>
                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/header/panier.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>                         
                </div>
            </div>
        </header>

        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
        <footer>
            <div class='container_small'>
                <section>
                    <div id=\"newsletter_footer\">
                        <p><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/lettre.png"), "html", null, true);
        echo "\" alt=\"\">Inscrivez-vous !</p>
                    </div>
                    ";
        // line 93
        echo twig_include($this->env, $context, "newsletterForm.html.twig");
        echo "
                    <div>
                        <p id=\"error_newsletter\"></p>
                    </div>
                </section><!-- 
             --><section id=\"social_footer\">
                    <p><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/plat.png"), "html", null, true);
        echo "\" alt=\"\">Suivez-nous</p>
                    <a href=\"\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/facebook.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/twitter.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/truc.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/blog.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </section><!-- 
             --><section id=\"label_footer\">
                    <p><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/picto_partenaire.png"), "html", null, true);
        echo "\" alt=\"\">Nos partenaires</p>
                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer/labels.png"), "html", null, true);
        echo "\" alt=\"\">
                </section>
                <div id=\"footer_copyright\" class='container_small'>
                    <nav>
                        <ul>
                            <li><p>Mon Panier Toqué@2015</p></li>
                            <li><a href=\"#\">Conditions générales de vente</a></li>
                            <li><a href=\"#\">Mentions légales</a></li>
                            <li><a href=\"#\">Conditions de livraison</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>

    ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\"/>

        ";
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        // line 123
        echo "
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 125,  278 => 124,  275 => 123,  272 => 122,  267 => 85,  260 => 13,  256 => 12,  252 => 11,  249 => 10,  246 => 9,  240 => 7,  233 => 128,  231 => 122,  213 => 107,  209 => 106,  203 => 103,  199 => 102,  195 => 101,  191 => 100,  187 => 99,  178 => 93,  173 => 91,  166 => 86,  164 => 85,  155 => 79,  150 => 77,  145 => 75,  140 => 72,  134 => 71,  132 => 70,  128 => 68,  122 => 66,  119 => 65,  113 => 62,  106 => 58,  103 => 57,  97 => 55,  95 => 54,  82 => 44,  65 => 30,  60 => 28,  49 => 22,  41 => 17,  38 => 16,  36 => 9,  31 => 7,  23 => 1,);
    }
}
