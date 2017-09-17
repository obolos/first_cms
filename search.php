
<!-- Header -->

<?php
include "includes/functions.php";
include "includes/header.php";

if(isset($_POST['search']) && !empty(trim($_POST['search']))){
    $param = $_POST['search'];
    $search = $posts->searchPosts($param);

}else {
    $search = $posts->getAll();
}

?>

    <!-- Navigation -->
<?php include("includes/navigation.php"); ?>

    <!-- Page Content -->

<div class="container">

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <?php while($row = mysqli_fetch_assoc($search)): ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $row['post_title'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $row['post_author'] ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['post_date'] ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $row['post_image'] ?>" alt="">
                <hr>
                <p><?php echo $row['post_content'] ?> </p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

            <?php endwhile; ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>




        <!-- Blog Sidebar Widgets Column -->
            <?php include("includes/sidebar.php"); ?>

    <!-- Footer -->

<hr>


<?php include("includes/footer.php"); ?>
