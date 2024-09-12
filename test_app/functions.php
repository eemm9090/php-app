<?php
require_once('connection.php');

function createData($post)
{
  createTodoData($post['content']);
}

//データ取得
function getTodoList()
{
    return getAllRecords();
}

?>