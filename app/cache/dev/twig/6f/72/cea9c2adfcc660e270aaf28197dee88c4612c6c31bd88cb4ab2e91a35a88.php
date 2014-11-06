<?php

/* AutoMainBundle:Default:index.html.twig */
class __TwigTemplate_6f72cea9c2adfcc660e270aaf28197dee88c4612c6c31bd88cb4ab2e91a35a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'filter' => array($this, 'block_filter'),
            'slider' => array($this, 'block_slider'),
            'zayavka' => array($this, 'block_zayavka'),
            'news' => array($this, 'block_news'),
            'actions' => array($this, 'block_actions'),
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
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "    ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "            <div class=\"content homepage\">

                ";
        // line 7
        $this->displayBlock('filter', $context, $blocks);
        // line 67
        echo "
                ";
        // line 68
        $this->displayBlock('slider', $context, $blocks);
        // line 71
        echo "
                ";
        // line 72
        $this->displayBlock('zayavka', $context, $blocks);
        // line 75
        echo "
                ";
        // line 76
        $this->displayBlock('news', $context, $blocks);
        // line 79
        echo "
                ";
        // line 80
        $this->displayBlock('actions', $context, $blocks);
        // line 83
        echo "
            </div><!-- .content -->
            <br class=\"clear\"/>
        ";
    }

    // line 7
    public function block_filter($context, array $blocks = array())
    {
        // line 8
        echo "                    <div class=\"filter\">
                        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("filter_auto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"filter_form\">
                            <div class=\"fields\">

                                <h3 class=\"filter_title\">Поиск авто</h3>

                                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'errors');
        echo "
                                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'widget');
        echo "

                                <div class=\"filter-field\">
                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'label');
        echo "
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_mark').prepend('<option value=\"0\" selected>Выберите марку</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field\">
                                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'label');
        echo "
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_model').empty().prepend('<option value=\"0\" selected>Выберите модель</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field\">
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
        echo "
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget');
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_region').prepend('<option value=\"0\" selected>Любой</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field-small\">
                                    <h4>Цена:</h4>
                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from"), 'errors');
        echo "
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from"), 'widget', array("attr" => array("placeholder" => "От", "name" => "price_from")));
        echo "

                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to"), 'errors');
        echo "
                                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to"), 'widget', array("attr" => array("placeholder" => "до", "name" => "price_to")));
        echo "

                                    <h4>Год выпуска:</h4>
                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'errors');
        echo "
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'widget', array("attr" => array("placeholder" => "С", "name" => "year_from")));
        echo "

                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'errors');
        echo "
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'widget', array("attr" => array("placeholder" => "по", "name" => "year_to")));
        echo "

                                </div>
                            </div>
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo"), 'errors');
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo"), 'widget');
        echo "
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo"), 'label');
        echo "

                            <input type=\"submit\" value=\"Найти\" name=\"find\" />

                        </form>
                    </div>
                ";
    }

    // line 68
    public function block_slider($context, array $blocks = array())
    {
        // line 69
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:auto_slider.html.twig")->display($context);
        // line 70
        echo "                ";
    }

    // line 72
    public function block_zayavka($context, array $blocks = array())
    {
        // line 73
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:zayavka.html.twig")->display($context);
        // line 74
        echo "                ";
    }

    // line 76
    public function block_news($context, array $blocks = array())
    {
        // line 77
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:news.html.twig")->display($context);
        // line 78
        echo "                ";
    }

    // line 80
    public function block_actions($context, array $blocks = array())
    {
        // line 81
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:actions.html.twig")->display($context);
        // line 82
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 82,  240 => 81,  237 => 80,  233 => 78,  230 => 77,  227 => 76,  223 => 74,  220 => 73,  217 => 72,  213 => 70,  210 => 69,  207 => 68,  196 => 60,  192 => 59,  188 => 58,  181 => 54,  177 => 53,  172 => 51,  168 => 50,  162 => 47,  158 => 46,  153 => 44,  149 => 43,  138 => 35,  134 => 34,  124 => 27,  120 => 26,  110 => 19,  106 => 18,  100 => 15,  96 => 14,  86 => 9,  83 => 8,  80 => 7,  73 => 83,  71 => 80,  68 => 79,  66 => 76,  63 => 75,  61 => 72,  58 => 71,  56 => 68,  53 => 67,  51 => 7,  47 => 5,  44 => 4,  40 => 87,  37 => 4,  34 => 3,);
    }
}
