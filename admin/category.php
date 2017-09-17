<?php include "includes/admin_header.php";

if (isset($_POST['submit'])) {
$title = $_POST['cat_title'];

if ($title == "" || empty($title)) {
$message = "Should not be empty";
} else {
$query = "INSERT INTO categories(cat_title) ";
$query .= "VALUE('{$title}') ";
if(!mysqli_query($connection, $query)) die ("QUERY FAILED" . mysqli_error($connection));

}
}
?>

<?php
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $delete = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id='{$delete}'";
    if (!mysqli_query($connection, $query)) die ("QUERY FALED" . mysqli_error($connection));

}
?>

<?php $result = Select_all($connection, 'categories'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading
                            </small>
                        </h1>

                        <div class="col-xs-6">

                        <form action="" method="post">
                        <div class="form-group">
                            <label for="cat-title">Category Title</label>
                            <input id="cat-title" type="text" name="cat_title" class="form-control">
                        </div>
                            <div class="form-group">
                                <input id="submit" type="submit" name="submit" class="btn btn-primary">
                            </div>
                            <span class="text-danger">
                                    <?php if(isset($message)) echo $message; ?>
                            </span>

                        </form>
                        </div>

                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $row['cat_id']; ?></td>
                                    <td><?php echo $row['cat_title']; ?></td>
                                    <td><a href="category.php?delete=<?php echo $row['cat_id']; ?>">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>

                                </tbody>

                            </table>
                        </div>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
