<?php
require_once('connection.php');

//データ取得
function getTodoList()
{
    return getAllRecords();
}

//データ更新
function getSelectedTodo($id)
{
    return getTodoTextById($id);
}

//データ編集
function savePostedData($post)
{
    $path = getRefererPath();
    switch ($path) {
        case '/new.php':
            createTodoData($post['content']);
            break;
        case '/edit.php':
            updateTodoData($post);
            break;
        case '/index.php': // 追記
          deleteTodoData($post['id']); // 追記
          break; // 追記
        default:
          break;
    }
}

function getRefererPath()
{
    $urlArray = parse_url($_SERVER['HTTP_REFERER']);//グローバル変数$_SERVERに配列としてサーバー情報が入っているので、HTTP_REFERERで現在のページに遷移する前にユーザーエージェントが参照していたページのアドレスを取得
    return $urlArray['path'];
}

?>