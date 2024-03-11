<?php
include_once 'includes/config.php';

if(isset($_GET['article_id'])) {
    // Include the deleteArticle function definition
    function deleteArticle($pdo) {
        $article_id = $_GET["article_id"];
        
        $stmt_deleteArticle = $pdo->prepare('DELETE FROM news_articles WHERE article_id=:article_id');
        $stmt_deleteArticle->bindParam(':article_id', $article_id, PDO::PARAM_INT);
        $stmt_deleteArticle->execute();
    }

    // Call the deleteArticle function
    deleteArticle($pdo); // Assuming $pdo is your database connection

    // Redirect the user back to the page where they came from, or any other page
    header("Location: ".$_SERVER['HTTP_REFERER']); 
    exit(); // Stop executing further code after redirection
} else {
    // Handle the case when article_id is not provided in the URL
    echo "Article ID not provided!";
}
?>