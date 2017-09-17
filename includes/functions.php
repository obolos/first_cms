<?php

function Post_search($connection, $search) {

if(isset($search))
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%{$search}%'";


    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    return $result;


}

function Select_all ($connection, $table) {

    $query = "SELECT * FROM {$table}";
    $result = mysqli_query($connection, $query);

    if (!$result)
        die ("QUERY FAILED" . mysqli_error($connection));

    return $result;
}



?>