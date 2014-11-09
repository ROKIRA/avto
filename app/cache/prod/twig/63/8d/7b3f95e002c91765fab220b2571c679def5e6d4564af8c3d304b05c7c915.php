<?php

/* AutoMainBundle:Default:about.html.twig */
class __TwigTemplate_638d7b3f95e002c91765fab220b2571c679def5e6d4564af8c3d304b05c7c915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'comments' => array($this, 'block_comments'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 5
        if ((isset($context["auto"]) ? $context["auto"] : null)) {
            // line 6
            echo "        <h2 class=\"page_title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "mark"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "model"), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "new") == 0)) {
                echo " (б/у) ";
            }
            echo "</h2>

        <div class=\"auto\">
            <img class=\"auto_img\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "model"), "html", null, true);
            echo "\"/>
            <p class=\"info\"><span>Год выпуска:</span> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "year"), "html", null, true);
            echo "</p>
            <p class=\"info\"><span>Пробег:</span> ";
            // line 11
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "run"), 0, ".", " "), "html", null, true);
            echo " км</p>
            <p class=\"info\"><span>Цвет:</span> <span class=\"color_box\" data-hex=\"#";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "color"), "html", null, true);
            echo "\"></span> </p>
            <script type=\"text/javascript\"> \$(\".color_box\").css('background', \$('.color_box').data('hex')); </script>
            <article class=\"description\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "description"), "html", null, true);
            echo "</article>
            <p class=\"info clearfix\"><span>Цена:</span>  <span class=\"price\">";
            // line 15
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "price"), 0, ".", " "), "html", null, true);
            echo "</span> грн </p>
        </div>

        ";
        } else {
            // line 19
            echo "        <h2 class=\"page_title\">Ошибка!!!</h2>
        <p class=\"not_find\">Нет запрашиваемого автомобиля!!!</p>
        ";
        }
        // line 22
        echo "
        <hr/>
    ";
        // line 24
        $this->displayBlock('comments', $context, $blocks);
        // line 27
        echo "
    ";
    }

    // line 24
    public function block_comments($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->env->loadTemplate("AutoMainBundle:Default:comments.html.twig")->display($context);
        // line 26
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  100 => 25,  97 => 24,  92 => 27,  90 => 24,  86 => 22,  81 => 19,  74 => 15,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  50 => 9,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
