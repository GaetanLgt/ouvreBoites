$(document).ready(function() {
    $('.dropright button').on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();

        if (!$(this).next('div').hasClass('show')) {
            $(this).next('div').addClass('show');
        } else {
            $(this).next('div').removeClass('show');
        }

    });
    (function(d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    })(document, "script", "facebook-jssdk");
});