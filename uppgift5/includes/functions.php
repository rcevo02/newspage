<?php
function addArticle($pdo){
    $stmt_addArticle = $pdo->prepare('INSERT INTO news_articles (article_heading, article_text, article_date, article_author_fname, article_author_lname, article_img, article_img_text) VALUES (:aheading, :atext, :adate, :aauthorfname, :aauthorlname, :aimg, :aimgtext)');
    $stmt_addArticle->bindParam(':aheading', $_POST['aheading'], PDO::PARAM_STR);
    $stmt_addArticle->bindParam(':atext', $_POST['atext'], PDO::PARAM_STR);
    $stmt_addArticle->bindParam(':adate', $_POST['adate'], PDO::PARAM_STR);
    $stmt_addArticle->bindParam(':aauthorfname', $_POST['aauthorfname'], PDO::PARAM_STR);
    $stmt_addArticle->bindParam(':aauthorlname', $_POST['aauthorlname'], PDO::PARAM_STR);
    $stmt_addArticle->bindParam(':aimg', $_POST['aimg'], PDO::PARAM_STR);
    $stmt_addArticle->bindParam(':aimgtext', $_POST['aimgtext'], PDO::PARAM_STR);
    $stmt_addArticle->execute();
}

?>