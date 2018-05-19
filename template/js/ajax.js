var s = 0;
scrollBottom();

$("#send_chat").click(function (e) {
    s = 0;
    e.preventDefault();
    var message = $('#message').val();
    message.trim();
    if(message.length > 1 ) {
        var id = $(this).attr("data-user");
        console.log(id);
        $.post("/chat/add/"+id, {message:message}, function (data) {
            setInterval(function () {
                refresh();
            },1000);
            $('#message').val(" ");
            $('div.fr-view').empty();
        });
        return false;
    }else {
        alert("Введіть текст повідомлення!");
    }

});

function refresh() {
    $.post("/chat/refresh", {}, function (data) {
        $(".chat-window").html(data);
        if(s == 0) {
            s = 1;
            scrollBottom();
        }
    });
    return false;
}

function scrollBottom(){
    $('.chat-window').scrollTop(999999);
}