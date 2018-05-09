$( document ).ready(function() {
    $('.collapsible').collapsible();
    $('.carousel').carousel();
    $('.sidenav').sidenav();
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
    setInterval(function () {
        $('.carousel').carousel('next');
    }, 10000);
    M.updateTextFields();
});

function is_admin() {
    if(document.getElementById('is_admin').checked) {
        console.log("12");
        $('.pin').css('display', 'block');
    }else {
        console.log("0");
        $('.pin').css('display', 'none');
    }
}
$('#is_admin').click(function () {
    is_admin();
});