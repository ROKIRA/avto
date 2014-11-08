<?php

/* ::base.html.twig */
class __TwigTemplate_84ef261927fa45053b45c6ddb47b7a89809207ce5ab62856678d7bf6ec32d361 extends Twig_Template
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
        // line 58
        echo "        <nav class=\"navigation\">
            <ul>
                <li class=\"nav-main\"><a href=\"http://localhost/Symfony/web/app_dev.php/\">Главная</a></li>
                <li><a href=\"http://localhost/Symfony/web/app_dev.php/cars\">Автомобили</a></li>
                ";
        // line 62
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 63
            echo "                    <li class=\"nav-add-auto\"><a href=\"http://localhost/Symfony/web/app_dev.php/add-auto\">Добавить авто</a></li>
                    <li class=\"nav-add-auto\"><a href=\"http://localhost/Symfony/web/app_dev.php/add-detail\">Добавить деталь</a></li>
                ";
        }
        // line 66
        echo "            </ul>
        </nav>
        ";
        // line 68
        $this->displayBlock('main', $context, $blocks);
        // line 86
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 92
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
            <div class=\"header_top\">
                <div class=\"site_size\">
                    <h1 class=\"logo\"><a href=\"#\">AutoName.com</a></h1>
                    <nav>
                        <ul>
                            <li><a href=\"#\">Новости</a></li>
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
                </div>
            </div>
            <p>Авто базар</p>

            ";
        // line 53
        $this->displayBlock('auth', $context, $blocks);
        // line 56
        echo "        </header>
        ";
    }

    // line 53
    public function block_auth($context, array $blocks = array())
    {
        // line 54
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AutoMainBundle:Auth:index"), array());
        // line 55
        echo "            ";
    }

    // line 68
    public function block_main($context, array $blocks = array())
    {
        // line 69
        echo "            <div class=\"main\">
                ";
        // line 70
        $this->displayBlock('leftbar', $context, $blocks);
        // line 79
        echo "
                ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "            </div>

        ";
    }

    // line 70
    public function block_leftbar($context, array $blocks = array())
    {
        // line 71
        echo "                    <aside class=\"leftbar\">

                        ";
        // line 73
        $this->displayBlock('filter', $context, $blocks);
        // line 76
        echo "
                    </aside>
                ";
    }

    // line 73
    public function block_filter($context, array $blocks = array())
    {
        // line 74
        echo "
                        ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "
                ";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
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
        return array (  236 => 87,  233 => 86,  228 => 81,  225 => 80,  220 => 74,  217 => 73,  211 => 76,  209 => 73,  205 => 71,  202 => 70,  196 => 83,  194 => 80,  191 => 79,  189 => 70,  186 => 69,  183 => 68,  179 => 55,  176 => 54,  173 => 53,  168 => 56,  166 => 53,  142 => 31,  139 => 30,  133 => 17,  129 => 16,  125 => 15,  120 => 14,  117 => 13,  111 => 10,  107 => 9,  102 => 8,  99 => 7,  93 => 6,  85 => 92,  82 => 86,  80 => 68,  76 => 66,  71 => 63,  69 => 62,  63 => 58,  61 => 30,  48 => 19,  46 => 13,  41 => 12,  39 => 7,  35 => 6,  29 => 2,);
    }
}
