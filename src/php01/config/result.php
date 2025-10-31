<?php
$search_term = $_GET['keyword'];

echo "あなたが検索したのは: <strong>" . htmlspecialchars($search_term) . "</strong> です。";
?>