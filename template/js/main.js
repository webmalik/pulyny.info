$( document ).ready(function() {
    setTimeout(function () {
        $(".progress").css("visibility", "hidden");
    },1000);

    $('textarea').froalaEditor();

    $(".button-collapse").sideNav({
            menuWidth: 300,
            edge: 'left',
            closeOnClick: true,
            draggable: true
        }
    );
    $('.collapsible').collapsible();
    $('.carousel').carousel();
    setInterval(function () {
        $('.carousel').carousel('next');
    }, 10000);
    M.updateTextFields();
});