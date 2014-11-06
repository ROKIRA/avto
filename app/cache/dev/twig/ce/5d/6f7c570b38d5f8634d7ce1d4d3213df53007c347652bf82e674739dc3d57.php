<?php

/* AutoMainBundle:Default:zayavka.html.twig */
class __TwigTemplate_ce5d6f7c570b38d5f8634d7ce1d4d3213df53007c347652bf82e674739dc3d57 extends Twig_Template
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
        echo "<div class=\"zayavka\">
    <h2>Оставить заявку на авто</h2>
    <div class=\"for_img\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/images/"), "html", null, true);
        echo "porshe_zayavka.jpg\" alt=\"\"/>
    </div>
    <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pellentesque id quam vitae ullamcorper. Maecenas a facilisis nisl. Sed nec velit a purus rutrum pulvinar. Integer tristique magna venenatis nisl commodo, quis dignissim diam faucibus. Proin a risus et justo pellentesque pulvinar. Etiam ut vestibulum purus, vitae volutpat velit. Phasellus sagittis elit a sollicitudin sodales. Vivamus tempor ornare aliquet. Aenean in posuere nisl. Aliquam orci nisi, molestie ut neque vel, dignissim convallis purus. Donec metus enim, tempus et tincidunt non, faucibus sed urna. Praesent sit amet sapien et lorem gravida commodo ut at velit.</article>
    <button id=\"submit_zayavka\">Оставить заявку</button>
</div>
<br class=\"clear\"/>

<section id=\"zayavka_form_layout\">
        <div class=\"zayavka_form\" id=\"zayavka_form\">
            <div class=\"zayavka_form_header\">
                <h2 class=\"page_title_popup\">Оставление заявки на авто</h2>
                <p class=\"close_zayavka_form\">Закрыть</p>
            </div>
            <div id=\"zayavka_form_content\">
                ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 19
            echo "                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("zayavka_new");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " class=\"add_form\" id=\"form_zayavka\">
                        <fieldset>
                            <legend>Заполните поля</legend>
                            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 23
                echo "                                <div class=\"success\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
                            <div class=\"add_auto\">
                                <div class=\"field\">
                                    ";
            // line 30
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "region"), 'errors')) {
                // line 31
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "region"), 'errors');
                echo "</div>
                                    ";
            }
            // line 33
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "region"), 'label');
            echo "
                                    ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "region"), 'widget');
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_region').prepend('<option value=\"any\" selected>Любой</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 41
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mark"), 'errors')) {
                // line 42
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mark"), 'errors');
                echo "</div>
                                    ";
            }
            // line 44
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mark"), 'label');
            echo "
                                    ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_mark').prepend('<option value=\"0\" selected>Выберите марку</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 52
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "model"), 'errors')) {
                // line 53
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "model"), 'errors');
                echo "</div>
                                    ";
            }
            // line 55
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "model"), 'label');
            echo "
                                    ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_model').empty().prepend('<option value=\"0\" selected>Выберите модель</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 63
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "year"), 'errors')) {
                // line 64
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'errors');
                echo "</div>
                                    ";
            }
            // line 66
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "year"), 'label');
            echo "
                                    ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "year"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля")));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_year').empty().prepend('<option value=\"0\" selected>Укажите год выпуска</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 74
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "body"), 'errors')) {
                // line 75
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
                echo "</div>
                                    ";
            }
            // line 77
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "body"), 'label');
            echo "
                                    ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "body"), 'widget', array("attr" => array("placeholder" => "Тип кузова: ")));
            echo "
                                </div>

                                <div class=\"field\">
                                    ";
            // line 82
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "run"), 'errors')) {
                // line 83
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'errors');
                echo "</div>
                                    ";
            }
            // line 85
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "run"), 'label');
            echo "
                                    ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "run"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                                </div>
                                <div class=\"field color\">
                                    ";
            // line 89
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "color"), 'errors')) {
                // line 90
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors');
                echo "</div>
                                    ";
            }
            // line 92
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "color"), 'label');
            echo "
                                    ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "color"), 'widget', array("attr" => array("placeholder" => "Цвет автомобиля", "class" => "add_zayavka_color_field")));
            echo "
                                    <span class=\"color_box\"></span>
                                </div>
                                <div class=\"field\">
                                    ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "new"), 'label');
            echo "
                                    ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "new"), 'widget');
            echo "
                                </div>
                                <div class=\"field\">
                                    ";
            // line 101
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "price"), 'errors')) {
                // line 102
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "price"), 'errors');
                echo "</div>
                                    ";
            }
            // line 104
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "price"), 'label');
            echo "
                                    ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "price"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                                </div>
                                <div class=\"field description_field\">
                                    ";
            // line 108
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "description"), 'errors')) {
                // line 109
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "description"), 'errors');
                echo "</div>
                                    ";
            }
            // line 111
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "description"), 'label');
            echo "
                                    ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                                </div>

                                ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "_token"), 'row');
            echo "

                                <input type=\"submit\" value=\"Добавить\" id=\"send_zayavka\"/>
                            </div><!-- .add_auto -->

                        </fieldset>

                    </form>
                ";
        } else {
            // line 124
            echo "                    <p class=\"notice\">Для добавления заявки необходимо авторизоваться!</p>
                ";
        }
        // line 126
        echo "            </div>

        </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:zayavka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 124,  272 => 115,  261 => 111,  247 => 105,  242 => 104,  236 => 102,  234 => 101,  228 => 98,  224 => 97,  206 => 90,  193 => 85,  187 => 83,  178 => 78,  173 => 77,  167 => 75,  165 => 74,  155 => 67,  127 => 55,  98 => 42,  75 => 31,  52 => 22,  43 => 19,  267 => 79,  256 => 70,  198 => 86,  190 => 55,  132 => 56,  92 => 27,  67 => 18,  59 => 24,  55 => 15,  49 => 14,  36 => 13,  31 => 10,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 85,  290 => 5,  288 => 126,  285 => 3,  281 => 409,  278 => 408,  276 => 393,  273 => 392,  271 => 80,  268 => 373,  266 => 112,  263 => 365,  260 => 363,  258 => 354,  255 => 109,  253 => 108,  250 => 341,  248 => 336,  245 => 335,  238 => 312,  235 => 311,  225 => 298,  222 => 297,  215 => 65,  212 => 92,  204 => 89,  202 => 58,  199 => 265,  197 => 249,  191 => 246,  189 => 240,  186 => 239,  184 => 54,  176 => 223,  171 => 53,  164 => 49,  161 => 202,  154 => 189,  151 => 188,  146 => 181,  144 => 64,  141 => 175,  136 => 40,  131 => 160,  126 => 147,  121 => 53,  119 => 52,  116 => 116,  114 => 111,  109 => 45,  104 => 44,  101 => 89,  94 => 57,  91 => 56,  89 => 47,  84 => 41,  81 => 33,  64 => 3,  88 => 26,  79 => 32,  74 => 20,  50 => 11,  27 => 3,  24 => 4,  19 => 1,  219 => 70,  216 => 69,  211 => 64,  208 => 63,  203 => 57,  200 => 56,  194 => 56,  185 => 82,  179 => 224,  174 => 217,  169 => 210,  166 => 50,  159 => 196,  156 => 195,  150 => 66,  148 => 35,  142 => 63,  139 => 169,  133 => 17,  129 => 148,  125 => 15,  117 => 13,  111 => 110,  107 => 9,  102 => 8,  99 => 68,  93 => 28,  85 => 26,  82 => 69,  76 => 24,  69 => 13,  48 => 10,  46 => 13,  41 => 18,  39 => 7,  35 => 6,  29 => 9,  243 => 327,  240 => 326,  237 => 80,  233 => 304,  230 => 303,  227 => 67,  223 => 74,  220 => 66,  217 => 93,  213 => 70,  210 => 270,  207 => 269,  196 => 60,  192 => 56,  188 => 54,  181 => 232,  177 => 63,  172 => 53,  168 => 50,  162 => 37,  158 => 45,  153 => 42,  149 => 182,  138 => 35,  134 => 161,  124 => 132,  120 => 14,  110 => 19,  106 => 104,  100 => 15,  96 => 41,  86 => 34,  83 => 8,  80 => 25,  73 => 30,  71 => 19,  68 => 27,  66 => 12,  63 => 17,  61 => 2,  58 => 71,  56 => 23,  53 => 67,  51 => 7,  47 => 5,  44 => 4,  40 => 8,  37 => 4,  34 => 5,);
    }
}
