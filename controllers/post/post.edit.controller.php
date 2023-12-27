<?php 
require './models/post.model.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!empty($_POST['title']) and !empty($_POST['description'])) {
            $post = updatePost();
            header('location: /post');
        }
    }
    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)){
        $post = editPost($id);
    }
?>
<?php 
    require('./views/post/post.edit.view.php') ;
?>