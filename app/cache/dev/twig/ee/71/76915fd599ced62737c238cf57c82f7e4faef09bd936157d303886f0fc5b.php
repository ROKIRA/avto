<?php

/* AutoMainBundle:Default:auth.html.twig */
class __TwigTemplate_ee7176915fd599ced62737c238cf57c82f7e4faef09bd936157d303886f0fc5b extends Twig_Template
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
        if (array_key_exists("form", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "html", null, true);
        }
        // line 2
        echo "<div class=\"auth_form auth\">
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 4
            echo "        <p>Добро пожаловать, <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method"), "html", null, true);
            echo "</span></p>
        <p><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("cabinet");
            echo "\" id=\"goto_cabinet\">Кабинет</a></p>
        <p><a href=\"#\" id=\"logout\">Выйти</a></p>
    ";
        } else {
            // line 8
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("auth");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), 'enctype');
            echo " id=\"auth_form\">

            ";
            // line 10
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'errors')) {
                // line 11
                echo "                <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'errors');
                echo "</div>
            ";
            }
            // line 13
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'label');
            echo "
            ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'widget');
            echo "

            ";
            // line 16
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'errors')) {
                // line 17
                echo "                <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'errors');
                echo "</div>
            ";
            }
            // line 19
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'label');
            echo "
            ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'widget');
            echo "

            <input type=\"submit\" value=\"Войти\" />

        </form>

        <p><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
    ";
        }
        // line 28
        echo "
</div>
<br class=\"clear\"/>

";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  79 => 20,  74 => 19,  50 => 11,  27 => 3,  24 => 2,  19 => 1,  242 => 93,  239 => 92,  234 => 87,  231 => 86,  226 => 80,  215 => 79,  211 => 77,  208 => 76,  202 => 89,  200 => 86,  197 => 85,  195 => 76,  189 => 74,  185 => 61,  182 => 60,  179 => 59,  174 => 62,  142 => 31,  139 => 30,  133 => 17,  129 => 16,  125 => 15,  117 => 13,  111 => 10,  107 => 9,  102 => 8,  99 => 7,  93 => 28,  85 => 98,  82 => 92,  76 => 72,  69 => 68,  48 => 10,  46 => 13,  41 => 12,  39 => 7,  35 => 6,  29 => 4,  243 => 82,  240 => 81,  237 => 80,  233 => 78,  230 => 77,  227 => 76,  223 => 79,  220 => 73,  217 => 82,  213 => 70,  210 => 69,  207 => 68,  196 => 60,  192 => 75,  188 => 58,  181 => 54,  177 => 53,  172 => 59,  168 => 50,  162 => 47,  158 => 46,  153 => 44,  149 => 43,  138 => 35,  134 => 34,  124 => 27,  120 => 14,  110 => 19,  106 => 18,  100 => 15,  96 => 14,  86 => 9,  83 => 8,  80 => 74,  73 => 83,  71 => 69,  68 => 17,  66 => 16,  63 => 64,  61 => 14,  58 => 71,  56 => 13,  53 => 67,  51 => 7,  47 => 5,  44 => 4,  40 => 8,  37 => 4,  34 => 5,);
    }
}
