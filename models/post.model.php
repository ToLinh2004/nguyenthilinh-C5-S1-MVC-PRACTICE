
<?php
function createPost ($title, $description){
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
        $statement->execute([
        ':title' => $_POST['title'],
        ':description' =>  $_POST['description']
    ]);
}

function getAllPost(){
    global $connection;
$statement = $connection->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll();
return $posts;
}
function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function updatePost(){
    global $connection;
    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':id' => $_POST['id']]);
}
function editPost($id){
    global $connection;
    $statement = $connection->prepare('select * from posts where id = :id');
    $statement->execute([':id' => $id]);
    $post = $statement->fetch();
    return $post;
}
function deletePost($id){
    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);
}


 ?>