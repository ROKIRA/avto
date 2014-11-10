function number_format(number, decimals, dec_point, thousands_sep) {
    //   example 1: number_format(1234.56);
    //   returns 1: '1,235'
    //   example 2: number_format(1234.56, 2, ',', ' ');
    //   returns 2: '1 234,56'
    //   example 3: number_format(1234.5678, 2, '.', '');
    //   returns 3: '1234.57'
    //   example 4: number_format(67, 2, ',', '.');
    //   returns 4: '67,00'
    //   example 5: number_format(1000);
    //   returns 5: '1,000'
    //   example 6: number_format(67.311, 2);
    //   returns 6: '67.31'
    //   example 7: number_format(1000.55, 1);
    //   returns 7: '1,000.6'
    //   example 8: number_format(67000, 5, ',', '.');
    //   returns 8: '67.000,00000'
    //   example 9: number_format(0.9, 0);
    //   returns 9: '1'
    //  example 10: number_format('1.20', 2);
    //  returns 10: '1.20'
    //  example 11: number_format('1.20', 4);
    //  returns 11: '1.2000'
    //  example 12: number_format('1.2000', 3);
    //  returns 12: '1.200'
    //  example 13: number_format('1 000,50', 2, '.', ' ');
    //  returns 13: '100 050.00'
    //  example 14: number_format(1e-8, 8, '.', '');
    //  returns 14: '0.00000001'

    number = (number + '')
        .replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k)
                .toFixed(prec);
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '')
        .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
            .join('0');
    }
    return s.join(dec);
}


$(document).ready(function(){

    $('body').fadeIn(1000);


    //АВТОРИЗАЦИЯ
    /*var auth_form = $(".auth_form");

    auth_form.on('click', 'input[type=submit]', function(e){
        e.preventDefault();

        $(this).attr('disabled', 'disabled');
        $('.loading').css('visibility', 'visible');

        var form = $(".auth_form");
        var email = $("#user_name_email").val();
        var password = $("#user_name_password").val();
        var url = $("#auth_form").attr('action');

        $.post(url,{
                email: email,
                password: password
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    if(response.error == 'OK'){
                        var user = response.user;
                        var html = '<p>Добро пожаловать, <span>' + user.name + '</span></p>' + '<p><a href="http://localhost/Symfony/web/app_dev.php/cabinet" id="goto_cabinet">Кабинет</a></p>' + "<p><a href='#' id='logout'>Выйти</a></p>";
                        form.fadeOut(500);
                        setTimeout(function(){
                            form.html(html);
                            form.fadeIn(500);
                            $('.nav-main').parent().append('<li class="nav-add-auto"><a href="http://localhost/Symfony/web/app_dev.php/add-auto">Добавить авто</a></li>');
                        }, 500);
                        if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/add-auto'){
                            window.location.href = 'http://localhost/Symfony/web/app_dev.php/add-auto';
                        }
                        if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/'){
                            window.location.href = 'http://localhost/Symfony/web/app_dev.php/';
                        }
                        if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/profile'){
                            window.location.href = 'http://localhost/Symfony/web/app_dev.php/profile';
                        }

                    }else{
                        $('.loading').css('visibility', 'hidden');
                        auth_form.find('input[type=submit]').removeAttr('disabled');
                        alert(response.error);
                    }

                }else{
                    alert('An undefined error has been occured!');
                }

            }, "json");
    });*/

    //АВТОРИЗАЦИЯ - Выход
    /*auth_form.on('click', '#logout', function(e){
        e.preventDefault();

        var form = $(".auth_form");
        var url = '/Symfony/web/app_dev.php/update/data/from/ajax/call/logout';

        $.post(url,{
          data: 'logout'
        },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                 var html = '<form action="/Symfony/web/app_dev.php/update/data/from/ajax/call/auth" method="post"  id="auth_form">' + '<span class="loading"><img src="/Symfony/web/bundles/auto/images/loading.gif" /></span>' + '<label for="user_name_email" class="required">E-mail: </label>' + '<input type="email" id="user_name_email" name="user_name[email]" required="required" />' + '<label for="user_name_password" class="required">Пароль: </label>' + '<input type="password" id="user_name_password" name="user_name[password]" required="required" />' + '<input type="submit" value="Войти" />' + '</form>' + '<p><a href="/Symfony/web/app_dev.php/reg">Зарегестрироваться</a></p>';
                 var add_form_html = '<div class="notice_wrapper"><p class="notice">Для добавления автомобиля необходимо сначала <strong>авторизоваться</strong></p>' + '<p><a href="/Symfony/web/app_dev.php/reg">Зарегестрироваться</a></p></div>';

                        form.fadeOut(500);
                        $('.add_form').fadeOut(500);
                        $('.nav-add-auto').fadeOut(500);

                    $('.add').after(add_form_html);
                        setTimeout(function(){
                            form.html(html);
                            $('.add_form').remove();
                            $('.nav-add-auto').remove();
                            form.fadeIn(500);
                            $('.notice_wrapper').fadeIn(500);
                        }, 500);

                    if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/'){
                        window.location.href = 'http://localhost/Symfony/web/app_dev.php/';
                    }
                    if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/profile'){
                        window.location.href = 'http://localhost/Symfony/web/app_dev.php/';
                    }
                    if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/cabinet'){
                        window.location.href = 'http://localhost/Symfony/web/app_dev.php/';
                    }
                    if(window.location.href == 'http://localhost/Symfony/web/app_dev.php/zayavka-list'){
                        window.location.href = 'http://localhost/Symfony/web/app_dev.php/';
                    }

                }else{
                    alert('An undefined error has been occured!');
                }

            }, "json");
    });*/


    /* ZAYAVKA FORM */
    var zayavka_form_layout = $('#zayavka_form_layout');
    var zayavka_form = $('#form_zayavka');

    $('#submit_zayavka').click(function(e) {
        e.preventDefault();

        zayavka_form_layout.fadeIn(500);

    });
    $('.close_zayavka_form').click(function(e) {
        e.preventDefault();
        e.stopPropagation();

        if(!zayavka_form_layout.is(':animated')){
            zayavka_form_layout.fadeOut(500);
        }

    });
    // MODEL FIELD
    function gettingModels(select){
        var model_select = $("#add_zayavka_auto_model");
        model_select.attr('disabled', 'disabled');

        var url = select.data('url');
        var mark_id = select.val();
        var model = model_select.data('model');

        getModels(model_select, url, mark_id, model);

    }

        zayavka_form.on('change', '#add_zayavka_auto_mark', function(){
            gettingModels($(this));
        });

        var add_zayavka_mark_select = $("#add_zayavka_auto_mark");
        var add_zayavka_model_select = $("#add_zayavka_auto_model");
            var mark = add_zayavka_mark_select.data('mark');
            var model = add_zayavka_model_select.data('model');
                gettingModels(add_zayavka_mark_select);

    // YEAR FIELD
        zayavka_form.on('change', '#add_zayavka_auto_model', function(){
            if($(this).val() != '0'){
                var year_select = $("#add_zayavka_auto_year");
                year_select.attr('disabled', 'disabled');

                var url = $(this).data('url');
                var model_id = $(this).val();

                getYear(year_select, url, model_id);
            }
        });

        // SENDING ZAYAVKA
            zayavka_form.on('click', '#send_zayavka', function(e){

                $(this).attr('disabled', 'disabled');

                var region = $("#add_zayavka_auto_region option:selected").text();
                var mark = $("#add_zayavka_auto_mark option:selected").text();
                var model = $("#add_zayavka_auto_model option:selected").text();
                var year = $("#add_zayavka_auto_year option:selected").text();
                var body = $("#add_zayavka_auto_body").val();
                var run = $("#add_zayavka_auto_run").val();
                var color = $("#add_zayavka_auto_color").val();
                var new_old;
                if($("#add_zayavka_auto_new").prop("checked")){
                    new_old = '1';
                }else{
                    new_old = '0';
                }
                var price = $("#add_zayavka_auto_price").val();
                var description = $("#add_zayavka_auto_description").val();
                var url = $("#form_zayavka").attr('action');

                //alert(region + ' ' + mark + ' ' + model + ' ' + year + ' ' + body + ' ' + run + ' ' + color + ' ' + price + ' ' + new_old + ' ' + description);

                $.post(url,{
                        region: region,
                        mark: mark,
                        model: model,
                        year: year,
                        body: body,
                        run: run,
                        color: color,
                        price: price,
                        new_old: new_old,
                        description: description
                    },
                    function(response){
                        if(response.code == 100 && response.success){ //dummy check

                            $('#zayavka_form_content').fadeOut(500, function(){
                               $(this).empty().append('<p class="success">Ваша заявка успешно отправлена! Мы рассмотрим ее в ближайшее время.</p>').fadeIn(500);
                            });
                            //alert('new: ' + response.new + ' userid: ' + response.user_id + ' region: ' + response.region + ' mark: ' + response.mark + ' model: ' + response.model + ' year: ' + response.year + ' body: ' + response.body + ' run: ' + response.run + ' color: ' + response.color + ' price: ' + response.price +  ' description: ' + response.description);
                        }else{
                            alert(response.error);
                        }
                        zayavka_form.find('input[type=submit]').removeAttr('disabled');
                    }, "json");

                return false;
            });


    function getModels(select, url, mark_id, model){
        select.attr('disabled', 'disabled');
        $.post(url,{
                mark_id: mark_id
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    //alert(typeof(response.models));
                    var models = response.models;
                    var html = '<option value="0">Выберете модель</option>';
                    for(var i = 0; i < models.length; i++) {
                        html += "<option value='" + models[i].id + "'>" + models[i].model + "</option>"
                    }
                    select.empty().html(html).removeAttr('disabled');
                    if(model != ''){
                        select.find('option:contains('+ model +')').attr('selected', 'selected');
                    }
                }else{
                    alert('An undefined error has been occured!');
                }
                select.removeAttr('disabled');

            }, "json");
    }

    function getYear(select, url, model_id){
        $.post(url,{
                model_id: model_id
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    //alert(typeof(response.models));
                    var year = response.year;
                    var html = "";
                    for(var i = 0; i < year.length; i++) {
                        html += "<option value='" + year[i].id + "'>" + year[i].year + "</option>"
                    }
                    select.empty().html(html).removeAttr('disabled');
                }else{
                    alert('An undefined error has been occured!');
                }

            }, "json");
    }

    // ДОБАВЛЕНИЕ АВТО - ПОЛЕ ВЫБОРА МОДЕЛИ
        var add_form = $('.add_auto');

        add_form.on('change', '#add_auto_mark', function(){
            var model_select = $("#add_auto_model");

            var url = $(this).data('url');
            var mark_id = $(this).val();
            var model = model_select.data('model');
            getModels(model_select, url, mark_id, model);
        });

        var add_auto_mark_select = $("#add_auto_mark");
        var add_auto_model_select = $("#add_auto_model");
            model = add_auto_model_select.data('model');
            getModels(add_auto_model_select, add_auto_mark_select.data('url'), add_auto_mark_select.val(), model);


    // ДОБАВЛЕНИЕ АВТО - ПОЛЕ ВЫБОРА ГОДА ВЫПУСКА
    add_form.on('change', '#add_auto_model', function(){
        var year_select = $("#add_auto_year");
            year_select.attr('disabled', 'disabled');

        var url = $(this).data('url');
        var model_id = $(this).val();

        getYear(year_select, url, model_id);
    });

    /* ДОБАВЛЕНИЕ АВТО, ЗАЯВКИ -  ПОЛЕ ВЫБОРА ЦВЕТА  */
        $('#add_auto_color, #add_zayavka_auto_color').ColorPicker({
            onSubmit: function(hsb, hex, rgb, el) {
                $(el).val(hex);
                $(el).ColorPickerHide();
            },
            onBeforeShow: function () {
                $(this).ColorPickerSetColor(this.value);
            },
            onChange: function (hsb, hex, rgb) {
                $('.color_box').css('backgroundColor', '#' + hex);
            }
        })
            .bind('keyup', function(){
                $(this).ColorPickerSetColor(this.value);
            });


    // REGISTRATION NEW USER - CITY FORM FIELD
    $('.add_form').on('change', '#user_name_region', function(){
        var city_select = $("#user_name_city");
        city_select.attr('disabled', 'disabled');
        var url = $(this).data('url');
        var region_id = $(this).val();
        $.post(url,{
                region_id: region_id
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    var city = response.city;
                    var html = "";
                    for(var i = 0; i < city.length; i++) {
                        html += "<option value='" + city[i].id + "'>" + city[i].name + "</option>"
                    }
                    city_select.empty().html(html).removeAttr('disabled');
                }else{
                    alert('An undefined error has been occured!');
                }

            }, "json");
    });



    // SLIDER AUTO =-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=--=-=-=-=-=--=-=-=
    var slider_wrap = $('.slider-wrapper');

        //SLIDER AUTO - tabs switch
        slider_wrap.on('click', '.tab_slider', function(e){
            e.preventDefault();

            $('.tab_slider').removeClass('active_slider');
            $(this).addClass('active_slider');
            $('.slider-block').hide();
            if($(this).data('slider') == 'new'){
                $('.new_slider_block').show();
            }else{
                $('.bu_slider_block').show();
            }

        });


    // FILTER AUTO - MODEL FORM FIELD
    var filter_form = $('.filter_form');

    filter_form.on('change', '#filter_auto_mark', function(){
        var model_select = $("#filter_auto_model");
        model_select.attr('disabled', 'disabled');
        var url = $(this).data('url');
        var mark_id = $(this).val();
        $.post(url,{
                mark_id: mark_id
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    //alert(typeof(response.models));
                    var models = response.models;
                    var html = '<option value="0" selected >Выберете модель</option>';
                    for(var i = 0; i < models.length; i++) {
                        html += "<option value='" + models[i].id + "'>" + models[i].model + "</option>"
                    }
                    model_select.empty().html(html).removeAttr('disabled');
                }else{
                    alert('An undefined error has been occured!');
                }

            }, "json");
    });


        /* MINI SLIDER-CAROUSEL  BU cars*/
            var bu_mini_slider = $('.bu_mini_slider');
            var bu_items_block = $('.bu_mini_slider .mini_slider_items');
            var bu_header_block = $('.bu_slider_block .headers_slider');

            //ROTATE FORWARD
            bu_mini_slider.on('click', '.next_car', function(){
                if(!bu_items_block.is(':animated')){
                    bu_items_block.animate({'left' : '-=110px'}, 400, function(){
                        bu_items_block
                            .find('.small_car:first')
                            .appendTo(bu_items_block)
                            .parent()
                            .css('left', '0');
                    });
                    bu_header_block.animate({'left' : '-=110px'}, 400, function(){
                        bu_header_block
                            .find('.carname:first')
                            .appendTo(bu_header_block)
                            .parent()
                            .css('left', '0');
                    });
                }
            });

            //ROTATE BACKWARD
            bu_mini_slider.on('click', '.previous_car', function(){
                if(!bu_items_block.is(':animated')){
                    bu_items_block
                        .css('left', '-110px')
                        .find('.small_car:last')
                        .prependTo(bu_items_block)
                        .parent()
                        .animate({'left' : '0'}, 400);
                    bu_header_block
                            .css('left', '-110px')
                            .find('.carname:last')
                            .prependTo(bu_header_block)
                            .parent()
                        .animate({'left' : '0'}, 400);
                }
            });

            // SHOW BIGCAR ONCLICK SMALL PICTURE
            var bu_main_block = $('.bu_slide .large_car');

            bu_mini_slider.on('click', '.small_car', function(e){
                e.preventDefault();
               var info_car = $(this).find('.info_about_car');

               var link = info_car.data('link');
               var mark = info_car.data('mark');
               var model = info_car.data('model');
               var year = info_car.data('year');
               var run = info_car.data('run');
               var price = info_car.data('price');
               var img = $(this).find('img').attr('src');
                //alert(mark + ' ' + model + ' ' + year + ' ' + price + ' ' + img);

                bu_main_block.find('img').attr('src', img).attr('alt', model);
                bu_main_block.find('a').attr('href', link);
                bu_main_block.find('.car_mark').text(mark);
                bu_main_block.find('.car_model').text(model);
                bu_main_block.find('.car_year').text(year);
                bu_main_block.find('.car_run').text(run);
                bu_main_block.find('.car_price').text(price);
            });

        /* MINI SLIDER-CAROUSEL  NEW cars*/
        var new_mini_slider = $('.new_mini_slider');
        var new_items_block = $('.new_mini_slider .mini_slider_items');
        var new_header_block = $('.new_slider_block .headers_slider');

        //ROTATE FORWARD
        new_mini_slider.on('click', '.next_car', function(){
            if(!new_items_block.is(':animated')){
                new_items_block.animate({'left' : '-=110px'}, 400, function(){
                    new_items_block
                        .find('.small_car:first')
                        .appendTo(new_items_block)
                        .parent()
                        .css('left', '0');
                });
                new_header_block.animate({'left' : '-=110px'}, 400, function(){
                    new_header_block
                        .find('.carname:first')
                        .appendTo(new_header_block)
                        .parent()
                        .css('left', '0');
                });
            }
        });

        //ROTATE BACKWARD
        new_mini_slider.on('click', '.previous_car', function(){
            if(!new_items_block.is(':animated')){
                new_items_block
                    .css('left', '-110px')
                    .find('.small_car:last')
                    .prependTo(new_items_block)
                    .parent()
                    .animate({'left' : '0'}, 400);
                new_header_block
                    .css('left', '-110px')
                    .find('.carname:last')
                    .prependTo(new_header_block)
                    .parent()
                    .animate({'left' : '0'}, 400);
            }
        });

        // SHOW BIGCAR ONCLICK SMALL PICTURE
        var new_main_block = $('.new_slide .large_car');

        new_mini_slider.on('click', '.small_car', function(e){
            e.preventDefault();

            var info_car = $(this).find('.info_about_car');

            var link = info_car.data('link');
            var mark = info_car.data('mark');
            var model = info_car.data('model');
            var year = info_car.data('year');
            var run = info_car.data('run');
            var price = info_car.data('price');
            var img = $(this).find('img').attr('src');
            //alert(mark + ' ' + model + ' ' + year + ' ' + price + ' ' + img);

            new_main_block.find('img').attr('src', img).attr('alt', model);
            new_main_block.find('a').attr('href', link);
            new_main_block.find('.car_mark').text(mark);
            new_main_block.find('.car_model').text(model);
            new_main_block.find('.car_year').text(year);
            new_main_block.find('.car_run').text(run);
            new_main_block.find('.car_price').text(price);
        });

    /* ADD COMMENT */
    var comments = $("#comments");

    comments.on('click', 'input[type=submit]', function(e){
        e.preventDefault();

        var form = comments.find('form');
        var level = parseInt(form.prev().data('level'));
            if(isNaN(level)){
                level = 0;
            }

        var parent_id = 0;
        var margin = '0px';
        if (form.hasClass('form_answer')){
            parent_id = form.prev().data('id');
            margin = (level * 50) + 'px';
        }

        var url = form.attr('action');

        var name = form.find('#comment_name').val();
        var email = form.find('#comment_email').val();
        var text = form.find('#comment_text').val();
        var auto_id = comments.data('car');

        $.post(url,{
                auto_id: auto_id,
                parent_id: parent_id,
                name: name,
                email: email,
                text: text
            },
            function(response){
                if(response.code == 100 && response.success){ //dummy check
                    var datalevel = ++level;
                    var html ='';
                    if(parent_id != 0){
                        html += '<div class="comment answer_comment" data-id="' + response.comment_id + '" data-level="' + datalevel + '">';
                    }else{
                        html += '<div class="comment" data-id="' + response.comment_id + '" data-level="' + datalevel + '">';
                    }
                    html += '<div class="avatar">';
                    html += '<img src="/bundles/auto/images/avatar-50x50.gif" alt="avatar" />';
                    html += '</div>';
                    html += '<div class="comment_content">';
                    html += '<div class="comment_header">';
                    html += '<p class="name">' + response.name + '</p>';
                    html += '<p class="date_published">' + response.date + '</p>';
                    html += '<br class="clear"/></div>';
                    html += '<div class="comment_body">';
                    html += '<p>' + response.text + '</p>';
                    html += '</div></div>';
                    if(level < 4){
                        html += '<a class="comment_answer" href="#">Ответить</a>';
                    }
                    html += '</div>';

                    form[0].reset();
                    form.after(html);
                    form.next('.comment').css('marginLeft', margin).hide().fadeIn(800)
                }else{
                    alert(response.error);
                }

            }, "json");

    });

    // ADD COMENT - ANSWER
    comments.on('click', '.comment_answer', function(e){
        e.preventDefault();

        var form = comments.find('form');
        comments.find('#add_comment_button').remove();
        $(this).parent().after(form);
        var margin = (parseInt(form.prev().data('level')) * 50) + 'px';
        form.addClass('form_answer');
        form.css('marginLeft', margin);
        $(this).parent().parent().prepend('<a href="#" id="add_comment_button">Добавить комментарий</a>');
    });

    comments.on('click', '#add_comment_button', function(e){
        e.preventDefault();

        var form = comments.find('form');
        form.insertAfter($(this));
        form.removeClass('form_answer').css('marginLeft', '0');
        $(this).remove();
    });

}); // end ready
