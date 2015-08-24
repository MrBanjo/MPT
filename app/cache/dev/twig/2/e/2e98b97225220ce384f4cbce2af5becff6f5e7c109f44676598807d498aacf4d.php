<?php

/* :admin:blog_admin.html.twig */
class __TwigTemplate_2e98b97225220ce384f4cbce2af5becff6f5e7c109f44676598807d498aacf4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", ":admin:blog_admin.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("edit_blog_admin", array("id" => "nouveau"));
        echo "\">Nouveau blog</a>
</li>
<li>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("categorie_blog_admin");
        echo "\">Nouvelle catégorie</a>
</li>

";
    }

    // line 14
    public function block_body_admin($context, array $blocks = array())
    {
        // line 15
        echo "
<h1 class=\"page-header\">Dashboard</h1>
<h2 class=\"sub-header\">Blog</h2>
<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Rubrique</th>
                <th>Date</th>
                <th>Supprimer</th>
                <th>Editer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_blog"]) ? $context["liste_blog"] : $this->getContext($context, "liste_blog")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blog"], "rubriqueblog", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>
                    <form action=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("blog_erase");
            echo "\" method=\"post\" onSubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce blog ?');\">
                        <input type=\"hidden\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
            echo "\" name=\"erase\" >
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"supprimer\" name=\"supprimer\" />
                    </form>
                </td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_blog_admin", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return ":admin:blog_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 48,  107 => 44,  99 => 39,  95 => 38,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  75 => 32,  71 => 31,  53 => 15,  50 => 14,  42 => 9,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
