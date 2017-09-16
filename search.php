
<!-- Header -->

<?php
include "includes/db.php";
include "includes/functions.php";
include "includes/header.php";

$search_result = Post_search($connection, $_POST['search']);
/*
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%{$search}%'";
    $search_result = mysqli_query($connection, $query);

    if (!$search_result) {
        die ("QUERY FAILED" . mysqli_error($connection));
    }
    echo mysqli_num_rows($search_result); // Test Result

}
*/

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

            <?php while($row = mysqli_fetch_assoc($search_result)): ?>

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
