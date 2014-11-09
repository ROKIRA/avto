<?php

/* ::base.html.twig */
class __TwigTemplate_f69bc9a7c46abac7ef820d3a62c3410c1d2fd323c65511f4d32e8099d63b2182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'auth' => array($this, 'block_auth'),
            'main' => array($this, 'block_main'),
            'leftbar' => array($this, 'block_leftbar'),
            'filter' => array($this, 'block_filter'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    <!--[if gte IE 9]>
    <style type=\"text/css\">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->
</head>
<body>

    <div class=\"wrapper\">
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "        <nav class=\"navigation\">
            <ul>
                <li class=\"nav-main\"><a href=\"http://localhost/Symfony/web/app_dev.php/\">Главная</a></li>
                <li><a href=\"http://localhost/Symfony/web/app_dev.php/cars\">Автомобили</a></li>
                ";
        // line 68
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method")) {
            // line 69
            echo "                    <li class=\"nav-add-auto\"><a href=\"http://localhost/Symfony/web/app_dev.php/add-auto\">Добавить авто</a></li>
                    <li class=\"nav-add-auto\"><a href=\"http://localhost/Symfony/web/app_dev.php/add-detail\">Добавить деталь</a></li>
                ";
        }
        // line 72
        echo "            </ul>
        </nav>
        ";
        // line 74
        $this->displayBlock('main', $context, $blocks);
        // line 92
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "    </div>


</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Auto";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/css/main_style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/css/colorpicker.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/main_script.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/colorpicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/jquery.lightbox_me.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "        <header class=\"header\">
            <section class=\"header_top\">
                    <h1 class=\"logo\"><a href=\"#\">AutoName.com</a></h1>
                    <nav>
                        <ul>
                            <li><a href=\"#\" class=\"active\">Новости</a></li>
                            <li><a href=\"#\">Автозапчасти</a></li>
                            <li><a href=\"#\">Тест-драйв</a></li>
                            <li><a href=\"#\">Новинки</a></li>
                            <li><a href=\"#\">Предложения</a></li>
                        </ul>
                    </nav>
                    <p id=\"auth\">
                        <a href=\"#\">Войти</a>
                        или
                        <a href=\"#\">Зарегестрироваться</a>
                    </p>
            </section>

            <section class=\"slider\">
                <p class=\"logo_slide\">autorich.com.ua</p>
                <div class=\"text\">
                    <p>За последние <strong>24</strong> часа</p>
                    <p>добавлено <strong>256</strong> объявлений</p>
                </div>
                <a href=\"#\">+ добавить объявление</a>
            </section>

            ";
        // line 59
        $this->displayBlock('auth', $context, $blocks);
        // line 62
        echo "        </header>
        ";
    }

    // line 59
    public function block_auth($context, array $blocks = array())
    {
        // line 60
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AutoMainBundle:Auth:index"), array());
        // line 61
        echo "            ";
    }

    // line 74
    public function block_main($context, array $blocks = array())
    {
        // line 75
        echo "            <div class=\"main\">
                ";
        // line 76
        $this->displayBlock('leftbar', $context, $blocks);
        // line 85
        echo "
                ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "            </div>

        ";
    }

    // line 76
    public function block_leftbar($context, array $blocks = array())
    {
        // line 77
        echo "                    <aside class=\"leftbar\">

                        ";
        // line 79
        $this->displayBlock('filter', $context, $blocks);
        // line 82
        echo "
                    </aside>
                ";
    }

    // line 79
    public function block_filter($context, array $blocks = array())
    {
        // line 80
        echo "
                        ";
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        // line 87
        echo "
                ";
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "            <br class=\"clear\"/>
            <footer class=\"footer\">
                <p>&copy; Харьков 2014</p>
            </footer>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 93,  239 => 92,  234 => 87,  231 => 86,  226 => 80,  223 => 79,  217 => 82,  215 => 79,  211 => 77,  208 => 76,  202 => 89,  200 => 86,  197 => 85,  195 => 76,  192 => 75,  189 => 74,  185 => 61,  182 => 60,  179 => 59,  174 => 62,  172 => 59,  142 => 31,  139 => 30,  133 => 17,  129 => 16,  125 => 15,  120 => 14,  117 => 13,  111 => 10,  107 => 9,  102 => 8,  99 => 7,  93 => 6,  85 => 98,  82 => 92,  80 => 74,  76 => 72,  71 => 69,  69 => 68,  63 => 64,  48 => 19,  46 => 13,  41 => 12,  39 => 7,  103 => 26,  100 => 25,  97 => 24,  92 => 27,  90 => 24,  86 => 22,  81 => 19,  74 => 15,  70 => 14,  65 => 12,  61 => 30,  57 => 10,  50 => 9,  37 => 6,  35 => 6,  32 => 4,  29 => 2,);
    }
}
