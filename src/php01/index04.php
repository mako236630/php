<?php
$request_type = "update";

switch($request_type){
    case "create":
        echo "新しいデータをデータベースに登録します。";
        break;

    case "update":
        echo "既存のデータを更新します。";
        break;

    case "delete":
        echo "データを完全に削除します。(要確認)";
        break;

    default:
    echo "無効なリクエストです。";
    break;
}
