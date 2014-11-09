<?php

/* AutoMainBundle:Default:auto_slider.html.twig */
class __TwigTemplate_1029b97d983407cdabede4d646e14f8a5e41607f4fa6f4b922b74f9b18e01595 extends Twig_Template
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
        echo "<div class=\"slider-wrapper\">
    <nav>
        <ul>
            <li class=\"tab_slider active_slider\" data-slider=\"bu\" ><a href=\"#\" >С ПРОБЕГОМ</a></li>
            <li class=\"tab_slider\" data-slider=\"new\"><a href=\"#\" >Новые</a></li>
        </ul>
    </nav>
    <section class=\"slider-block new_slider_block\">
        ";
        // line 9
        if (((isset($context["slidecount_new"]) ? $context["slidecount_new"] : $this->getContext($context, "slidecount_new")) != 0)) {
            // line 10
            echo "            <div class=\"slider-body new_slider_body\">
                <div class=\"slide active_slide new_slide new_active_slide\" data-page=\"1\">
                    <div class=\"large_car\">
                        <a href=\"/Symfony/web/app_dev.php/auto/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "mark"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "model"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "model"), "html", null, true);
            echo "\" /></a>
                        <p class=\"carname\">";
            // line 14
            echo "<span class=\"auto_field_name\">Марка:</span> <span class=\"car_mark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "mark"), "html", null, true);
            echo "</span>";
            echo "</p>
                        <p class=\"carname\"><span class=\"auto_field_name\">Модель:</span> <span class=\"car_model\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "model"), "html", null, true);
            echo "</span></p>
                        <p class=\"caryear\"><span class=\"auto_field_name\">Год выпуска:</span> <span class=\"car_year\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "year"), "html", null, true);
            echo "</span></p>
                        <p class=\"carrun\"><span class=\"auto_field_name\">Пробег:</span> <span class=\"car_run\">";
            // line 17
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "run"), 0, ".", " "), "html", null, true);
            echo " км</span></p>
                        <p class=\"carprice\"><span class=\"auto_field_name\">Цена:</span> <span class=\"car_price\">";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "price"), 0, ".", " "), "html", null, true);
            echo " грн</span></p>
                    </div>
                    <div class=\"mini_slider new_mini_slider\">
                        <div class=\"previous_car\"></div>
                        <div class=\"body_mini_slider\">
                            <div class=\"mini_slider_items\">
                                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_new"]) ? $context["slidecount_new"] : $this->getContext($context, "slidecount_new")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                echo "                                    <div class=\"small_car\" id=\"car-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "\">
                                        <a href=\"#\"><img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"/></a>
                                        <p class=\"info_about_car\" data-link=\"/Symfony/web/app_dev.php/auto/";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-mark=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "\" data-model=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-year=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo "\" data-run=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo " г.в., ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo " км, цена: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo " грн</p>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                            </div>
                        </div>
                        <div class=\"next_car\"></div>
                    </div>

                </div>
            </div>
            <div class=\"items_headers\">
                <div class=\"headers_slider\">
                    ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_new"]) ? $context["slidecount_new"] : $this->getContext($context, "slidecount_new")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "                        <h3 class=\"carname\"><a href=\"/Symfony/web/app_dev.php/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"><span class=\"car_mark\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "</span> <span class=\"car_model\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "</span></a></h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </div>
            </div>
        ";
        }
        // line 45
        echo "        <br class=\"clear\"/>
    </section>

    <section class=\"slider-block bu_slider_block\">
        ";
        // line 49
        if (((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : $this->getContext($context, "slidecount_bu")) != 0)) {
            // line 50
            echo "            <div class=\"slider-body bu_slider_body\">
                <div class=\"slide active_slide bu_slide bu_active_slide\" data-page=\"1\">
                        <div class=\"large_car\">
                            <a href=\"/Symfony/web/app_dev.php/auto/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "mark"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "model"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "model"), "html", null, true);
            echo "\" /></a>
                            <p class=\"carname\">";
            // line 54
            echo "<span class=\"auto_field_name\">Марка:</span> <span class=\"car_mark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "mark"), "html", null, true);
            echo "</span>";
            echo "</p>
                            <p class=\"carname\"><span class=\"auto_field_name\">Модель:</span> <span class=\"car_model\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "model"), "html", null, true);
            echo "</span></p>
                            <p class=\"caryear\"><span class=\"auto_field_name\">Год выпуска:</span> <span class=\"car_year\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "year"), "html", null, true);
            echo "</span></p>
                            <p class=\"carrun\"><span class=\"auto_field_name\">Пробег:</span> <span class=\"car_run\">";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "run"), 0, ".", " "), "html", null, true);
            echo " км</span></p>
                            <p class=\"carprice\"><span class=\"auto_field_name\">Цена:</span> <span class=\"car_price\">";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "price"), 0, ".", " "), "html", null, true);
            echo " грн</span></p>
                        </div>
                        <div class=\"mini_slider bu_mini_slider\">
                            <div class=\"previous_car\"></div>
                            <div class=\"body_mini_slider\">
                                <div class=\"mini_slider_items\">
                                    ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : $this->getContext($context, "slidecount_bu")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 65
                echo "                                        <div class=\"small_car\" id=\"car-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "\">
                                            <a href=\"#\"><img src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"/></a>
                                            <p class=\"info_about_car\" data-link=\"/Symfony/web/app_dev.php/auto/";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-mark=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "\" data-model=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-year=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo "\" data-run=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo " г.в., ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo " км, цена: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo " грн</p>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                </div>
                            </div>
                            <div class=\"next_car\"></div>
                        </div>

                </div>
            </div>
            <div class=\"items_headers\">
                <div class=\"headers_slider\">
                    ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : $this->getContext($context, "slidecount_bu")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 80
                echo "                        <h3 class=\"carname\"><a href=\"/Symfony/web/app_dev.php/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"><span class=\"car_mark\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "</span> <span class=\"car_model\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "</span></a></h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                </div>
            </div>
        ";
        }
        // line 85
        echo "        <br class=\"clear\"/>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:auto_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 79,  256 => 70,  198 => 57,  190 => 55,  132 => 39,  92 => 27,  67 => 18,  59 => 16,  55 => 15,  49 => 14,  36 => 13,  31 => 10,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 85,  290 => 5,  288 => 82,  285 => 3,  281 => 409,  278 => 408,  276 => 393,  273 => 392,  271 => 80,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  238 => 312,  235 => 311,  225 => 298,  222 => 297,  212 => 279,  204 => 267,  199 => 265,  194 => 56,  191 => 246,  186 => 239,  184 => 54,  176 => 223,  171 => 53,  169 => 210,  166 => 50,  164 => 49,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  151 => 188,  146 => 181,  144 => 176,  141 => 175,  136 => 40,  131 => 160,  126 => 147,  121 => 30,  119 => 117,  116 => 116,  114 => 111,  109 => 105,  104 => 90,  101 => 89,  94 => 57,  91 => 56,  89 => 47,  84 => 41,  81 => 40,  64 => 3,  88 => 26,  79 => 32,  74 => 20,  50 => 11,  27 => 3,  24 => 2,  19 => 1,  242 => 93,  239 => 92,  234 => 87,  231 => 86,  226 => 80,  215 => 65,  211 => 64,  208 => 76,  202 => 58,  200 => 86,  197 => 249,  195 => 76,  189 => 240,  185 => 61,  182 => 60,  179 => 224,  174 => 217,  142 => 31,  139 => 169,  133 => 17,  129 => 148,  125 => 15,  117 => 13,  111 => 110,  107 => 9,  102 => 8,  99 => 68,  93 => 28,  85 => 26,  82 => 92,  76 => 24,  69 => 13,  48 => 10,  46 => 13,  41 => 12,  39 => 7,  35 => 6,  29 => 9,  243 => 327,  240 => 326,  237 => 80,  233 => 304,  230 => 303,  227 => 67,  223 => 79,  220 => 66,  217 => 289,  213 => 70,  210 => 270,  207 => 269,  196 => 60,  192 => 75,  188 => 58,  181 => 232,  177 => 53,  172 => 59,  168 => 50,  162 => 47,  158 => 45,  153 => 42,  149 => 182,  138 => 35,  134 => 161,  124 => 132,  120 => 14,  110 => 19,  106 => 104,  100 => 15,  96 => 67,  86 => 46,  83 => 8,  80 => 25,  73 => 83,  71 => 19,  68 => 17,  66 => 12,  63 => 17,  61 => 2,  58 => 71,  56 => 13,  53 => 67,  51 => 7,  47 => 5,  44 => 4,  40 => 8,  37 => 4,  34 => 5,);
    }
}
