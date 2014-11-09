<?php

/* AutoMainBundle:Cabinet:cabmenu.html.twig */
class __TwigTemplate_b03c78aaae6c01e52b5bd35d4980b639aefbe8c836bad274b1687d973da3399e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"leftbar\">
    <section class=\"cab_nav\">
        <ul>
            <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("change_profile");
        echo "\">Изменить пофиль</a></li>
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("cabinet");
        echo "\">Мои объявления</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("zayavka_list");
        echo "\">Мои заявки на авто</a></li>
            <li><a href=\"#\">Как попасть в ТОП</a></li>
        </ul>
    </section>

</aside>";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Cabinet:cabmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,  150 => 43,  145 => 41,  142 => 40,  138 => 38,  133 => 32,  120 => 27,  112 => 26,  108 => 25,  91 => 23,  77 => 21,  73 => 19,  69 => 18,  66 => 17,  63 => 16,  54 => 13,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  35 => 5,  32 => 6,  29 => 3,);
    }
}
