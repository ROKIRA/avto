<?php

/* AutoMainBundle:Cabinet:cabinet.html.twig */
class __TwigTemplate_02357ba08c639bf1028bb7b8bf85a8198a8b544a94d1cc88ce4809a1b1dfeb73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
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
    public function block_leftbar($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->env->loadTemplate("AutoMainBundle:Cabinet:cabmenu.html.twig")->display($context);
        // line 5
        echo "    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
        <div class=\"content\">
            <h2 class=\"page_title\">Мои объявления</h2>
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "                <div class=\"success\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            ";
        if ((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto"))) {
            // line 17
            echo "                <ul class=\"cars\">
                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")));
            foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                // line 19
                echo "                        <li class=\"myitem\">
                            <div class=\"for_my_img\">
                                <a href=\"/Symfony/web/app_dev.php/auto/";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\"/></a>
                            </div><!-- .for_my_img -->
                            <h3 class=\"auto_title\"><a href=\"/Symfony/web/app_dev.php/auto/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "new") == 0)) {
                    echo " (б/у) ";
                }
                echo " </a></h3>
                            <p class=\"info about\">
                                <span class=\"price\">";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "price"), 0, ".", " "), "html", null, true);
                echo "</span> грн <br/>
                                <a href=\"/Symfony/web/app_dev.php/auto/";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\">Посмотреть</a>
                                <a href=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("auto_main_homepage");
                echo "auto-edit/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "\">Изменить</a>
                            </p>
                        </li>
                        <br class=\"clear\"/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ul>


               ";
            // line 38
            echo "
            ";
        } else {
            // line 40
            echo "                <p>Объявлений пока нет!</p>
                <p><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("auto_new");
            echo "\">Добавить объявление</a></p>
            ";
        }
        // line 43
        echo "
        </div><!-- .content -->


    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Cabinet:cabinet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  145 => 41,  142 => 40,  138 => 38,  133 => 32,  120 => 27,  112 => 26,  108 => 25,  91 => 23,  77 => 21,  73 => 19,  69 => 18,  66 => 17,  63 => 16,  54 => 13,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
