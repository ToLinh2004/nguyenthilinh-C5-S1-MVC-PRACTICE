<?php

$heading = "Post Page";
require "database/database.php";
require 'models/post.model.php';
$posts = getAllPost();
require './views/post/post.view.php';