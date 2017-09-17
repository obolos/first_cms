<?php include "includes/admin_header.php";?>
<?php $result = $posts->getAll(); ?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome to Admin Panel</h1>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Comments</th>
                            <th>Date</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['post_id']; ?></td>
                            <td><?php echo $row['post_author']; ?></td>
                            <td><?php echo $row['post_title']; ?></td>
                            <td><?php echo $row['post_category_id']; ?></td>
                            <td><?php echo $row['post_status']; ?></td>
                            <td><?php echo $row['post_image']; ?></td>
                            <td><?php echo $row['post_tags']; ?></td>
                            <td><?php echo $row['post_content']; ?></td>
                            <td><?php echo $row['post_date']; ?></td>
                        </tr>
                        <?php endwhile; ?>

                        </tbody>
                    </table>



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

