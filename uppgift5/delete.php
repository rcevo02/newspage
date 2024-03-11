<?php
include_once 'includes/config.php';

if(isset($_GET['article_id'])) {
    function deleteArticle($pdo) {
        $article_id = $_GET["article_id"];
        
        $stmt_deleteArticle = $pdo->prepare('DELETE FROM news_articles WHERE article_id=:article_id');
        $stmt_deleteArticle->bindParam(':article_id', $article_id, PDO::PARAM_INT);
        $stmt_deleteArticle->execute();
    }
    deleteArticle($pdo);

    header("Location: ".$_SERVER['HTTP_REFERER']); 
    exit();
} else {
    echo "Article ID not provided!";
}
?>