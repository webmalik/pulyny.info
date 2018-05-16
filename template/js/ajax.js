scrollBottom();
setInterval(function () {
    refresh();
},5000);

$("#send_chat").click(function (e) {
    e.preventDefault();
    var message = $('#message').val();
    message.trim();
    if(message.length > 1 ) {
        var id = $(this).attr("data-user");
        console.log(id);
        $.post("/chat/add/"+id, {message:message}, function (data) {
            setInterval(refresh(), 2000);
            $('#message').val("");
        });
        return false;
    }else {
        alert("Введіть текст повідомлення!");
    }

});

function refresh() {
    $.post("/chat/refresh", {}, function (data) {
        $(".chat-window").html(data);
        scrollBottom();
    });
    return false;
}

function scrollBottom(){
    $('.chat-window').scrollTop(999999);
}