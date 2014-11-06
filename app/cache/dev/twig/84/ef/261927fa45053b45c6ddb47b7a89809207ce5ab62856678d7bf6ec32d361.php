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
        // line 41
        echo "        <nav class=\"navigation\">
            <ul>
                <li class=\"nav-main\"><a href=\"http://localhost/Symfony/web/app_dev.php/\">Главная</a></li>
                <li><a href=\"http://localhost/Symfony/web/app_dev.php/cars\">Автомобили</a></li>
                ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 46
            echo "                    <li class=\"nav-add-auto\"><a href=\"http://localhost/Symfony/web/app_dev.php/add-auto\">Добавить авто</a></li>
                    <li class=\"nav-add-auto\"><a href=\"http://localhost/Symfony/web/app_dev.php/add-detail\">Добавить деталь</a></li>
                ";
        }
        // line 49
        echo "            </ul>
        </nav>
        ";
        // line 51
        $this->displayBlock('main', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 75
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
            <h1 class=\"logo\">AUTO</h1>
            <p>Авто базар</p>

            ";
        // line 35
        $this->displayBlock('auth', $context, $blocks);
        // line 38
        echo "
        </header>
        ";
    }

    // line 35
    public function block_auth($context, array $blocks = array())
    {
        // line 36
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AutoMainBundle:Auth:index"), array());
        // line 37
        echo "            ";
    }

    // line 51
    public function block_main($context, array $blocks = array())
    {
        // line 52
        echo "            <div class=\"main\">
                ";
        // line 53
        $this->displayBlock('leftbar', $context, $blocks);
        // line 62
        echo "
                ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "            </div>

        ";
    }

    // line 53
    public function block_leftbar($context, array $blocks = array())
    {
        // line 54
        echo "                    <aside class=\"leftbar\">

                        ";
        // line 56
        $this->displayBlock('filter', $context, $blocks);
        // line 59
        echo "
                    </aside>
                ";
    }

    // line 56
    public function block_filter($context, array $blocks = array())
    {
        // line 57
        echo "
                        ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "
                ";
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
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
        return array (  219 => 70,  216 => 69,  211 => 64,  208 => 63,  203 => 57,  200 => 56,  194 => 59,  185 => 53,  179 => 66,  174 => 62,  169 => 52,  166 => 51,  159 => 36,  156 => 35,  150 => 38,  148 => 35,  142 => 31,  139 => 30,  133 => 17,  129 => 16,  125 => 15,  117 => 13,  111 => 10,  107 => 9,  102 => 8,  99 => 7,  93 => 6,  85 => 75,  82 => 69,  76 => 49,  69 => 45,  48 => 19,  46 => 13,  41 => 12,  39 => 7,  35 => 6,  29 => 2,  243 => 82,  240 => 81,  237 => 80,  233 => 78,  230 => 77,  227 => 76,  223 => 74,  220 => 73,  217 => 72,  213 => 70,  210 => 69,  207 => 68,  196 => 60,  192 => 56,  188 => 54,  181 => 54,  177 => 63,  172 => 53,  168 => 50,  162 => 37,  158 => 46,  153 => 44,  149 => 43,  138 => 35,  134 => 34,  124 => 27,  120 => 14,  110 => 19,  106 => 18,  100 => 15,  96 => 14,  86 => 9,  83 => 8,  80 => 51,  73 => 83,  71 => 46,  68 => 79,  66 => 76,  63 => 41,  61 => 30,  58 => 71,  56 => 68,  53 => 67,  51 => 7,  47 => 5,  44 => 4,  40 => 87,  37 => 4,  34 => 3,);
    }
}
