<?php

/* AutoMainBundle:Default:comments.html.twig */
class __TwigTemplate_0f69af64770c8025397117d884f24c6b5a11ebf3337491d076a738f19bcd2507 extends Twig_Template
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
        echo "<section class=\"comments\" id=\"comments\" data-car=\"";
        echo twig_escape_filter($this->env, (isset($context["car_id"]) ? $context["car_id"] : null), "html", null, true);
        echo "\">
";
        // line 2
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method"))) {
            // line 3
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("add_comment");
            echo "\" method=\"post\" class=\"add_comment_form\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo ">
        <div class=\"fields\">
            <h4 class=\"title\">Добавить комментарий</h4>
            <div class=\"field\">
                ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
            echo "
                ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'label');
            echo "
                ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget');
            echo "
            </div>
            <div class=\"field\">
                ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
            echo "
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label');
            echo "
                ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
            echo "
            </div>
            <div class=\"field description_field\">
                ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'errors');
            echo "
                ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'label');
            echo "
                ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'widget', array("attr" => array("cols" => "30", "rows" => "3")));
            echo "
            </div>
        </div>
        <br class=\"clear\"/>
        <input type=\"submit\" value=\"Добавить\"/>
    </form>
";
        } else {
            // line 26
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("add_comment");
            echo "\" method=\"post\" class=\"add_comment_form\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo ">
        <div class=\"fields\">
            <h4 class=\"title\">Добавить комментарий</h4>
            <div class=\"field\">
                ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
            echo "
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'label');
            echo "
                ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method"), "readonly" => "readonly")));
            echo "
            </div>
            <div class=\"field description_field\">
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'errors');
            echo "
                ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'label');
            echo "
                ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'widget', array("attr" => array("cols" => "30", "rows" => "3")));
            echo "
            </div>
        </div>
        <br class=\"clear\"/>
        <input type=\"submit\" value=\"Добавить\"/>
    </form>
";
        }
        // line 44
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 45
            echo "
    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 47
                echo "
        ";
                // line 48
                if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "parentId") == 0)) {
                    // line 49
                    echo "            <div class=\"comment\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"), "html", null, true);
                    echo "\" data-level=\"1\">
                <div class=\"avatar\">
                    <img src=\"/Symfony/web/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                </div>
                <div class=\"comment_content\">
                    <div class=\"comment_header\">
                        <p class=\"name\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "name"), "html", null, true);
                    echo "</p>
                        <p class=\"date_published\">";
                    // line 56
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                    echo "</p>
                        <br class=\"clear\"/>
                    </div>
                    <div class=\"comment_body\">
                        <p>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "text"), "html", null, true);
                    echo "</p>
                    </div>
                </div>
                <a class=\"comment_answer\" href=\"#\">Ответить</a>
            </div>

            ";
                    // line 66
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                        // line 67
                        echo "                ";
                        if (($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "parentId") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"))) {
                            // line 68
                            echo "                    <div class=\"comment answer_comment\" data-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "id"), "html", null, true);
                            echo "\" data-level=\"2\">
                        <div class=\"avatar\">
                            <img src=\"/Symfony/web/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                        </div>
                        <div class=\"comment_content\">
                            <div class=\"comment_header\">
                                <p class=\"name\">";
                            // line 74
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "name"), "html", null, true);
                            echo "</p>
                                <p class=\"date_published\">";
                            // line 75
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                            echo "</p>
                                <br class=\"clear\"/>
                            </div>
                            <div class=\"comment_body\">
                                <p>";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "text"), "html", null, true);
                            echo "</p>
                            </div>
                        </div>
                        <a class=\"comment_answer\" href=\"#\">Ответить</a>
                    </div>

                    ";
                            // line 85
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["answer2"]) {
                                // line 86
                                echo "                        ";
                                if (($this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "parentId") == $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "id"))) {
                                    // line 87
                                    echo "                            <div class=\"comment answer2_comment\" data-id=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "id"), "html", null, true);
                                    echo "\" data-level=\"3\">
                                <div class=\"avatar\">
                                    <img src=\"/Symfony/web/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                                </div>
                                <div class=\"comment_content\">
                                    <div class=\"comment_header\">
                                        <p class=\"name\">";
                                    // line 93
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "name"), "html", null, true);
                                    echo "</p>
                                        <p class=\"date_published\">";
                                    // line 94
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                                    echo "</p>
                                        <br class=\"clear\"/>
                                    </div>
                                    <div class=\"comment_body\">
                                        <p>";
                                    // line 98
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "text"), "html", null, true);
                                    echo "</p>
                                    </div>
                                </div>
                                <a class=\"comment_answer\" href=\"#\">Ответить</a>
                            </div>

                            ";
                                    // line 104
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["answer3"]) {
                                        // line 105
                                        echo "                                ";
                                        if (($this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "parentId") == $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "id"))) {
                                            // line 106
                                            echo "                                    <div class=\"comment answer3_comment\" data-id=\"";
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "id"), "html", null, true);
                                            echo "\" data-level=\"4\">
                                        <div class=\"avatar\">
                                            <img src=\"/Symfony/web/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                                        </div>
                                        <div class=\"comment_content\">
                                            <div class=\"comment_header\">
                                                <p class=\"name\">";
                                            // line 112
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "name"), "html", null, true);
                                            echo "</p>
                                                <p class=\"date_published\">";
                                            // line 113
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                                            echo "</p>
                                                <br class=\"clear\"/>
                                            </div>
                                            <div class=\"comment_body\">
                                                <p>";
                                            // line 117
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "text"), "html", null, true);
                                            echo "</p>
                                            </div>
                                        </div>
                                    </div>

                                ";
                                        }
                                        // line 123
                                        echo "                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer3'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 124
                                    echo "                        ";
                                }
                                // line 125
                                echo "                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 126
                            echo "                ";
                        }
                        // line 127
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "
        ";
                }
                // line 130
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 132
            echo "    <p>Комментариев пока нет!</p>
";
        }
        // line 134
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 134,  314 => 132,  307 => 130,  303 => 128,  297 => 127,  294 => 126,  288 => 125,  285 => 124,  279 => 123,  270 => 117,  263 => 113,  259 => 112,  249 => 106,  246 => 105,  233 => 98,  222 => 93,  212 => 87,  209 => 86,  205 => 85,  196 => 79,  175 => 68,  168 => 66,  159 => 60,  152 => 56,  148 => 55,  138 => 49,  136 => 48,  126 => 45,  124 => 44,  114 => 37,  110 => 36,  106 => 35,  96 => 31,  72 => 19,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  44 => 9,  40 => 8,  36 => 7,  26 => 3,  24 => 2,  19 => 1,  242 => 104,  239 => 92,  234 => 87,  231 => 86,  226 => 94,  223 => 79,  217 => 82,  215 => 79,  211 => 77,  208 => 76,  202 => 89,  200 => 86,  197 => 85,  195 => 76,  192 => 75,  189 => 75,  185 => 74,  182 => 60,  179 => 59,  174 => 62,  172 => 67,  142 => 31,  139 => 30,  133 => 47,  129 => 46,  125 => 15,  120 => 14,  117 => 13,  111 => 10,  107 => 9,  102 => 8,  99 => 7,  93 => 6,  85 => 98,  82 => 26,  80 => 74,  76 => 72,  71 => 69,  69 => 68,  63 => 64,  48 => 19,  46 => 13,  41 => 12,  39 => 7,  103 => 26,  100 => 32,  97 => 24,  92 => 30,  90 => 24,  86 => 22,  81 => 19,  74 => 15,  70 => 14,  65 => 12,  61 => 30,  57 => 10,  50 => 12,  37 => 6,  35 => 6,  32 => 4,  29 => 2,);
    }
}
