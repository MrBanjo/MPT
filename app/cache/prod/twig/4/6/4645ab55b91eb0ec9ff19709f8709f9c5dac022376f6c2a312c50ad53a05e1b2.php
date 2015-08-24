<?php

/* :admin:menu_admin.html.twig */
class __TwigTemplate_4645ab55b91eb0ec9ff19709f8709f9c5dac022376f6c2a312c50ad53a05e1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", ":admin:menu_admin.html.twig", 1);
        $this->blocks = array(
            'sidebar_admin' => array($this, 'block_sidebar_admin'),
            'body_admin' => array($this, 'block_body_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar_admin($context, array $blocks = array())
    {
        // line 4
        echo "
<li class=\"menu_side menu_side_down\">
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("edit_menu_admin", array("id" => "nouveau"));
        echo "\">Nouveau menu</a>
</li>

";
    }

    // line 11
    public function block_body_admin($context, array $blocks = array())
    {
        // line 12
        echo "
<h1 class=\"page-header\">Dashboard</h1>
<h2 class=\"sub-header\">Menu</h2>
<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Supprimer</th>
                <th>Editer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_menu"]) ? $context["liste_menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["menu"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <form action=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("menu_erase");
            echo "\" method=\"post\" onSubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce menu ?');\">
                        <input type=\"hidden\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "\" name=\"erase\" >
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"supprimer\" name=\"supprimer\" />
                    </form>
                </td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_menu_admin", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
</div>
</div>






";
    }

    public function getTemplateName()
    {
        return ":admin:menu_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  96 => 39,  88 => 34,  84 => 33,  79 => 31,  75 => 30,  71 => 29,  68 => 28,  64 => 27,  47 => 12,  44 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
