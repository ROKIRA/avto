//SLIDER AUTO - NEW cars =================================================================================================

    // ROTATE FORWARD
    slider_wrap.on('click', '.new_arrow_right', function(){
        $('.new_arrow_right').hide();

        var active_slide = $('.new_active_slide');

        var slider = $('.new_slide');
        slider.hide().removeClass('new_active_slide');
        $('.new_loader').show();

        if(active_slide.data('page') == slider.length ){

            var page = slider.last().data('page') + 1;
            var url =  $('.new_slider_block').data('url');

            $.post(url,{
                    page: page
                },
                function(response){
                    if(response.code == 100 && response.success){ //dummy check
                        var slide = response.slide;
                        if(response.countslide > 0){
                            var html = '<div class="slide active_slide new_slide new_active_slide" data-page="' + page + '">';
                            html += '<div class="large_car">';
                            html += '<a href="/Symfony/web/app_dev.php/auto/' + slide[0].id + '/' + slide[0].mark + '-' + slide[0].model + '">';
                            html += '<img src="/Symfony/web/bundles/auto/userfiles/' + slide[0].img + '" alt="'+ slide[0].model +'" /></a>';
                            /*html += '<h3 class="carname"><a href="/Symfony/web/app_dev.php/auto/' + slide[0].id + '/' + slide[0].mark + '-' + slide[0].model + '">';
                             html += slide[0].mark + ' ' + slide[0].model + '</a></h3>';*/
                            html += '<p class="carname"><span class="auto_field_name">Марка: </span>' + slide[0].mark + '</p>';
                            html += '<p class="carname"><span class="auto_field_name">Модель: </span>' + slide[0].model + '</p>';
                            html += '<p class="caryear">Год выпуска: ' + slide[0].year + '</p>';
                            html += '<p class="carrun">Пробег: ' + number_format(slide[0].run, 0, '.', ' ') + '</p>';
                            html += '<p class="carprice">Цена: ' + number_format(slide[0].price, 0, '.', ' ') + '</p>';
                            html += '</div>';
                            for(var i = 1; i < response.countslide; i++){
                                html += '<div class="small_car">';
                                html += '<a href="/Symfony/web/app_dev.php/auto/' + slide[i].id + '/' + slide[i].mark + '-' + slide[i].model + '">';
                                html += '<img src="/Symfony/web/bundles/auto/userfiles/' + slide[i].img + '" alt="'+ slide[i].model +'" /></a>';
                                html += '<h3 class="carname"><a href="/Symfony/web/app_dev.php/auto/' + slide[i].id + '/' + slide[i].mark + '-' + slide[i].model + '">';
                                html += slide[i].mark + ' ' + slide[i].model + '</a></h3>';
                                /*html += '<p class="caryear carrun">' + slide[i].year + ' г.в., ' + number_format(slide[i].run, 0, '.', ' ') + ' км </p>';
                                 html += '<p class="carprice">Цена: ' + number_format(slide[i].price, 0, '.', ' ') + '</p>';*/
                                html += '</div>';
                            }
                            html += '</div>';

                            $('.new_arrow_left').css('visibility', 'visible');
                        }else{
                            $('.new_loader').hide();
                            active_slide.removeClass('new_active_slide');
                            $(".new_slide[data-page=1]").show().addClass('new_active_slide');
                            $('.new_arrow_right').show();
                            $('.new_arrow_left').css('visibility', 'hidden');
                        }
                        $('.new_loader').hide();
                        $('.new_slider_body').append(html);
                        $('.new_arrow_right').show();
                    }else{
                        alert('Ошибка!');
                    }

                }, "json");
        }else{
            $('.new_loader').hide();
            var current_slide_page = active_slide.data('page');
            var next_slide_page = current_slide_page + 1;
            active_slide.removeClass('new_active_slide');
            $(".new_slide[data-page=" + next_slide_page + "]").show().addClass('new_active_slide');
            $('.new_arrow_right').show();
            $('.new_arrow_left').css('visibility', 'visible');
        }
    });

// ROTATE BACK
slider_wrap.on('click', '.new_arrow_left', function(){
    var active_slide = $('.new_active_slide');
    var current_slide_page = active_slide.data('page');
    var page = current_slide_page - 1;

    active_slide.hide().removeClass('new_active_slide');
    $(".new_slide[data-page=" + page + "]").show().addClass('new_active_slide');
    if(page == 1){
        $('.new_arrow_left').css('visibility', 'hidden');
    }
});

//SLIDER AUTO - NEW cars =================================================================================================

/*--------------------------------------------------------------------------------------------------------------------------------*/

//SLIDER AUTO - BU cars =================================================================================================

// ROTATE FORWARD
slider_wrap.on('click', '.bu_arrow_right', function(){
    $('.bu_arrow_right').hide();

    var active_slide = $('.bu_active_slide');

    var slider = $('.bu_slide');
    slider.hide().removeClass('bu_active_slide');
    $('.bu_loader').show();

    if(active_slide.data('page') == slider.length ){

        var page = slider.last().data('page') + 1;
        var url =  $('.bu_slider_block').data('url');

        $.post(url,{
                page: page
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    var slide = response.slide;
                    if(response.countslide > 0){
                        var html = '<div class="slide active_slide bu_slide bu_active_slide" data-page="' + page + '">';
                        html += '<div class="large_car">';
                        html += '<a href="/Symfony/web/app_dev.php/auto/' + slide[0].id + '/' + slide[0].mark + '-' + slide[0].model + '">';
                        html += '<img src="/Symfony/web/bundles/auto/userfiles/' + slide[0].img + '" alt="'+ slide[0].model +'" /></a>';
                        /* html += '<h3 class="carname"><a href="/Symfony/web/app_dev.php/auto/' + slide[0].id + '/' + slide[0].mark + '-' + slide[0].model + '">';
                         html +=  slide[0].mark + ' ' + slide[0].model + '</a></h3>';*/
                        html += '<p class="carname"><span class="auto_field_name">Марка: </span>' + slide[0].mark + '</p>';
                        html += '<p class="carname"><span class="auto_field_name">Модель: </span>' + slide[0].model + '</p>';
                        html += '<p class="caryear">Год выпуска: ' + slide[0].year + '</p>';
                        html += '<p class="carrun">Пробег: ' + number_format(slide[0].run, 0, '.', ' ') + '</p>';
                        html += '<p class="carprice">Цена: ' + number_format(slide[0].price, 0, '.', ' ') + '</p>';
                        html += '</div>';
                        for(var i = 1; i < response.countslide; i++){
                            html += '<div class="small_car">';
                            html += '<a href="/Symfony/web/app_dev.php/auto/' + slide[i].id + '/' + slide[i].mark + '-' + slide[i].model + '">';
                            html += '<img src="/Symfony/web/bundles/auto/userfiles/' + slide[i].img + '" alt="'+ slide[i].model +'" /></a>';
                            html += '<h3 class="carname"><a href="/Symfony/web/app_dev.php/auto/' + slide[i].id + '/' + slide[i].mark + '-' + slide[i].model + '">';
                            html += slide[i].mark + ' ' + slide[i].model + '</a></h3>';
                            /*html += '<p class="caryear carrun">' + slide[i].year + ' г.в., ' + number_format(slide[i].run, 0, '.', ' ') + ' км </p>';
                             html += '<p class="carprice">Цена: ' + number_format(slide[i].price, 0, '.', ' ') + '</p>';*/
                            html += '</div>';
                        }
                        html += '</div>';

                        $('.bu_arrow_left').css('visibility', 'visible');
                    }else{
                        $('.bu_loader').hide();
                        active_slide.removeClass('bu_active_slide');
                        $(".bu_slide[data-page=1]").show().addClass('bu_active_slide');
                        $('.bu_arrow_right').show();
                        $('.bu_arrow_left').css('visibility', 'hidden');
                    }
                    $('.bu_loader').hide();
                    $('.bu_slider_body').append(html);
                    $('.bu_arrow_right').show();
                }else{
                    alert('Ошибка!');
                }

            }, "json");
    }else{
        $('.bu_loader').hide();
        var current_slide_page = active_slide.data('page');
        var next_slide_page = current_slide_page + 1;
        active_slide.removeClass('bu_active_slide');
        $(".bu_slide[data-page=" + next_slide_page + "]").show().addClass('bu_active_slide');
        $('.bu_arrow_right').show();
        $('.bu_arrow_left').css('visibility', 'visible');
    }
});

// ROTATE BACK
slider_wrap.on('click', '.bu_arrow_left', function(){
    var active_slide = $('.bu_active_slide');
    var current_slide_page = active_slide.data('page');
    var page = current_slide_page - 1;

    active_slide.hide().removeClass('bu_active_slide');
    $(".bu_slide[data-page=" + page + "]").show().addClass('bu_active_slide');
    if(page == 1){
        $('.bu_arrow_left').css('visibility', 'hidden');
    }
});

//SLIDER AUTO - BU cars =================================================================================================