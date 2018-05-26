<?php

class CommentsController
{
    public function actionAdd($id) {
        $articles = new Articles();
        $message = $_POST['message'];
        $news = $_POST['article'];
        $date = date("Y-m-d H:i:s");
        $result = $articles->addCommentsArticle(array("user"=>$id, "text"=>$message, "news"=>$news, "date"=>$date));
        $comments = $articles->getCommentsArticle($news);
        foreach ($comments as $comment) {
            $user = User::getUserById($comment['user']);
            $time = strtotime($comment['date']);
            $date_comm = date("H:i d.m.Y", $time);
            echo "<div class=\"comments-message\">
                    <div class=\"comments-message-img col s1\">
                        <img src=\"" . HOST . $user[0]['image'] . "\" alt=\"\">
                    </div>
                    <div class=\"comments-message-text s11\">
                        <p class=\"com_user_info\">" . $user[0]['login'] . " <span>" . $date_comm . "</span></p>
                        <span>".$comment['text']."</span>
                    </div>
                </div>";
        }
        return true;
    }
}