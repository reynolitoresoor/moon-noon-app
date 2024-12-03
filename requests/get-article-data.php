<?php 
require_once('../database.php');
require_once('../classes.php');

if($_POST) {
	$data = $_POST;
    $article_id = intval($data['article_id']);
    $article = new Articles();
    $result = $article->getArticleData($article_id);
    echo json_encode($result);
}
?>