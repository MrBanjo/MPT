<?php

/* admin/adminbase.html.twig */
class __TwigTemplate_356742687ff5d77abec2f09bf9e309686728cc177d4db9730be3edcfbdf8b335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets_admin' => array($this, 'block_stylesheets_admin'),
            'sidebar_admin' => array($this, 'block_sidebar_admin'),
            'body_admin' => array($this, 'block_body_admin'),
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
        $this->displayBlock('stylesheets_admin', $context, $blocks);
        // line 29
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
 <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"\">Mon Panier Toqué</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Dashboard</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Retour au site</a></li>
            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Se déconnecter</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"menu_side tout\"><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\" id=\"tout\" >Accueil<span class=\"sr-only\">(current)</span></a></li>
            <li class=\"menu_side produits\"><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("blog_admin");
        echo "\" id=\"blog\">Blog</a></li>
            <li class=\"menu_side commandes\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("plat_admin");
        echo "\" id=\"plats\">Plats</a></li>
            <li class=\"menu_side commandes\"><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("menu_admin");
        echo "\" id=\"menus\">Menus</a></li>
          </ul>
          <ul class=\"nav nav-sidebar\">

            ";
        // line 66
        $this->displayBlock('sidebar_admin', $context, $blocks);
        echo " <!-- <li><a></a></li> -->



          </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main cat produits\">

            ";
        // line 74
        $this->displayBlock('body_admin', $context, $blocks);
        // line 75
        echo "
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap/docs.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>


<div id=\"global-zeroclipboard-html-bridge\" class=\"global-zeroclipboard-container\" title=\"\" style=\"position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;\" data-original-title=\"Copy to clipboard\">      <object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" id=\"global-zeroclipboard-flash-bridge\" width=\"100%\" height=\"100%\">         <param name=\"movie\" value=\"/assets/flash/ZeroClipboard.swf?noCache=1422712125618\">         <param name=\"allowScriptAccess\" value=\"sameDomain\">         <param name=\"scale\" value=\"exactfit\">         <param name=\"loop\" value=\"false\">         <param name=\"menu\" value=\"false\">         <param name=\"quality\" value=\"best\">         <param name=\"bgcolor\" value=\"#ffffff\">         <param name=\"wmode\" value=\"transparent\">         <param name=\"flashvars\" value=\"trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com\">         <embed src=\"/assets/flash/ZeroClipboard.swf?noCache=1422712125618\" loop=\"false\" menu=\"false\" quality=\"best\" bgcolor=\"#ffffff\" width=\"100%\" height=\"100%\" name=\"global-zeroclipboard-flash-bridge\" allowscriptaccess=\"sameDomain\" allowfullscreen=\"false\" type=\"application/x-shockwave-flash\" wmode=\"transparent\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashvars=\"trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com\" scale=\"exactfit\">                </object></div><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"200\" height=\"200\" viewBox=\"0 0 200 200\" preserveAspectRatio=\"none\" style=\"visibility: hidden; position: absolute; top: -100%; left: -100%;\"><defs></defs><text x=\"0\" y=\"10\" style=\"font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle\">200x200</text></svg></body></html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets_admin($context, array $blocks = array())
    {
        // line 10
        echo "
        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"vues/js/vendor/bootstrap/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <style type=\"text/css\"></style></head>

        ";
    }

    // line 66
    public function block_sidebar_admin($context, array $blocks = array())
    {
    }

    // line 74
    public function block_body_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 74,  182 => 66,  164 => 15,  158 => 12,  154 => 10,  151 => 9,  145 => 7,  137 => 87,  132 => 85,  128 => 84,  124 => 83,  114 => 75,  112 => 74,  101 => 66,  94 => 62,  90 => 61,  86 => 60,  82 => 59,  69 => 49,  65 => 48,  61 => 47,  41 => 30,  38 => 29,  36 => 9,  31 => 7,  23 => 1,);
    }
}
