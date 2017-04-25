$(document).ready(function () {
    $('.carousel').carousel()
    var url = window.location.href;
    $('#topbar-menu ul li').each(function () {
        if ($(this).find('a').attr('href') == url)
        {
            $(this).find('a').addClass('active');
            return false;
        }
    });
    $('#resseller-sidebar ul li').each(function () {
        if ($(this).find('a').attr('href') == url)
        {
            $(this).addClass('active');
            return false;
        }
    });
    $(function () {
        $(document).on('scroll', function () {
            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });
        $('.scroll-top-wrapper').on('click', scrollToTop);
    });
    function scrollToTop() {
        verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }
});


$(function ()
{
    $('#login').submit(function (event)
    {
        event.preventDefault();
        var submit_url = $(this).attr('action');
        var $form_inputs = $(this).find(':input');
        var form_data = {};
        $form_inputs.each(function ()
        {
            form_data[this.name] = $(this).val();
        });
        var valid_login_url = $('#valid_login_url').val();
        $.ajax(
                {
                    url: submit_url,
                    type: 'POST',
                    data: form_data,
                    dataType: 'json',
                    success: function (data)
                    {
                        $('#login_message').empty();
                        $('#login_message').html('');
                        $('#login_message').removeClass('alert alert-success alert-dismissable');
                        $('#login_message').removeClass('alert alert-danger alert-dismissable');
                        if (data.login_status == true)
                        {
                            $('#login_message').addClass('alert alert-success alert-dismissable');
                            $('#login_message').append('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
                            $('#login_message').append(data.message);
                            setTimeout(function () {
                                window.location.href = valid_login_url;
                            }, 2000);
                        } else {
                            $('#login_message').addClass('alert alert-danger alert-dismissable');
                            $('#login_message').append('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
                            $('#login_message').append(data.message);
                        }
                    }
                });
    })
});