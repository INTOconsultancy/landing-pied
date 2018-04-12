$(document).ready(function () {
    var ercp = /(^([0-9]{5,5})|^)$/;
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".botton").click(function () {
        $(".error").remove();
        if ($(".f_name").val() == "") {
            $(".f_name")
                .focus()
                .after("<div class='error'> <span>Required field</span></div>");
            return false;
        } else if ($(".l_name").val() == "") {
            $(".l_name")
                .focus()
                .after("<span class='error'>Required field</span>");
            return false;
        } else if ($(".email").val() == "" || !emailreg.test($(".email").val())) {
            $(".email")
                .focus()
                .after("<span class='error'>Required valid email</span>");
            return false;

        } else if ($(".zc").val() == "" || !ercp.test($(".zc").val())) {
            $(".zc")
                .focus()
                .after("<span class='error'>Required valid field</span>");
            return false;
        } else if ($(".p_number").val() == "") {
            $(".p_number")
                .focus()
                .after("<span class='error'>Required field </span>");
            return false;
        } else if ($(".country").val() == "") {
            $(".country")
                .focus()
                .after("<span class='error'>Required field </span>");
            return false;
        } else if ($(".f_name, .l_name, .email, .zc, .p_number, .country").val() != "") {
            $(".country")
                .focus()
                .after("<div class='succes'> <span>Thanks for being part of us </span>");
        }
    });


    $(".f_name, .l_name, .email, .zc, .country").keyup(function () {
        if ($(this).val() != "") {
            $(".error").fadeOut();
            return false;
        }

    });
    $(".email").keyup(function () {
        if ($(this).val() != "" && emailreg.test($(this).val())) {
            $(".error").fadeOut();
            return false;
        }
    });

    //scroll//
    $(function () {
        $('a[href*=#]').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500, 'linear');
        });
    });
});
