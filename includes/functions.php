<?php

class CoreTemplate {
    protected $connection = null;

     protected function  getConnection () {
//        $db['db_host'] = 'localhost';
//        $db['db_user'] = 'root';
//        $db['db_pass'] = '';
//        $db['db_name'] = 'cms';

//        foreach($db as $key => $values) {
//            define(strtoupper($key), $values);
//        }

        if ($this->connection !== null) return $this->connection;
        else {
            if (!$this->connection = mysqli_connect('localhost', 'root', '', 'cms'))
                die ("DB Connection FAILED" . mysqli_error());
            return $this->connection;
        }


    }

} // End class

class Categories extends CoreTemplate
{
    protected $table;
    private $result;


    function __construct()
    {
        $this->getConnection();
        $this->table = 'categories';
    }

    function getAll()
    {
        $query = "SELECT * FROM {$this->table} ";

        $this->result = mysqli_query($this->connection, $query);

        if (!$this->result)
            die ("QUERY FAILED" . mysqli_error($this->connection));


        return $this->result;
    }

    function getById($id) {
        $query = "SELECT * FROM {$this->table} WHERE cat_id={$id}";
        $this->result = mysqli_query($this->connection, $query);
        if (!$this->result)
            die ("QUERY FAILED" . mysqli_error($this->connection));

        $row = mysqli_fetch_assoc($this->result);
        return $row['cat_title'];
    }

    function deleteCategory()
    {
        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $query = "DELETE FROM categories WHERE cat_id={$delete}";
            if (!mysqli_query($this->connection, $query)) die ("QUERY FALED" . mysqli_error($this->connection));
            header("Location:category.php");

        }
    }

    function insertCategory()
    {
        $message = "Should not be empty";

        if (isset($_POST['submit'])) {
            $title = trim($_POST['cat_title']);

            if ($title == "" || empty($title)) return $message;

            else {
                $query = "INSERT INTO categories(cat_title) ";
                $query .= "VALUE('{$title}') ";
                if (!mysqli_query($this->connection, $query)) die ("QUERY FAILED" . mysqli_error($this->connection));

            }
        }

    }

    function updateCategory($id) {
        if(isset($_POST['update'])) {
            $c_title = $_POST['cat_title'];
            $query = "UPDATE categories SET cat_title = '{$c_title}' WHERE cat_id = {$id} ";
            if (!mysqli_query($this->connection, $query)) die ("FAILED QUERY" . mysqli_error());
            header("Location: category.php");
        }
    }



} // End class

class Posts extends Categories {

    function __construct()
    {
        $this->table = 'posts';
        $this->getConnection();
    }

    function searchPosts($search) {

        $query = "SELECT * FROM posts WHERE post_tags LIKE '%{$search}%'";
        $result = mysqli_query($this->connection, $query);

        if (!$result)
            die("QUERY FAILED" . mysqli_error($this->connection));

        return $result;

    }
} // End class

$category = new Categories(); // Category obj

$posts = new Posts(); // Post obj


?>