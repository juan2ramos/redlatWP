$(function  () {
	 /* SLIDER */
        if ($('.slider').length > 0) {
                $('.slider').flexslider({
                animation: "none",
                slideshow: true
              });
        }
    /* Form */
    $('#contact-form').on("submit", function (e) {
        e.preventDefault();
        var fields = $(this).serializeArray();

        $.post("http://redlat.org/email", fields, responseForm, 'json');


    });
    function responseForm(r) {
        console.log(r);
        if (r.success == 0) {
            alert(r.message);
        }
        else {
            $('#contact-form').text('');
            $('#contact-form').append("<span class='message'>" + r.message + "<span>");
        }
    }
});