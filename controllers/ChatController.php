<?php

class ChatController //extends FrontController
{
    public function actionIndex() {
        $chat = new Chat();
        $get_message = $chat->getAllMessages();
        $data = array("messages"=>$get_message);
        $template = new Template();
        $template->render('chat/index', $data);
        return true;
    }

    public function actionAdd($id) {
        $chat = new Chat();
        $get_message = $chat->getAllMessages();
        $message = $_POST['message'];
        echo $message;
        $message = $chat->AddMessage(array("user_id"=>$id, "message"=>$message));
        $data = array("messages"=>$get_message);
        $template = new Template();
        return $template->render('chat/index', $data);
    }

    public function actionRefresh() {
        $chat = new Chat();
        $messages = $chat->getAllMessages();
        foreach ($messages as $message) {
            $user = User::getUsersByChat($message['user_id']);
            echo "<div class=\"chat-message\">".
                "<div class=\"chat-message-img col s1\">".
                    "<img src=\"".HOST.$user[0]['image']."\" alt=\"\">".
                "</div>".
                "<div class=\"chat-message-text s11\">".
                    "<p>".$user[0]['login']."</p>".
                    "<span>".$message['message']."</span>".
                "</div>".
            "</div>";
        }
        return true;
    }
}