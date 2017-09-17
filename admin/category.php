<?php include "includes/admin_header.php"; ?>

<?php $message = $category->insertCategory(); ?>

<?php $category->deleteCategory(); ?>

<?php $result = $category->getAll(); ?>

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
                                <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
                            </div>
                            <span class='text-danger'>
                                    <?php if(isset($message)) echo $message; ?>
                            </span>

                        </form>

                            <?php
                                if (isset($_GET['edit'])) {
                                        $cat_id = $_GET['edit'];
                                        $text = $category->getById($cat_id);
                                        $category->updateCategory($cat_id);

                                    include "includes/edit_categories.php";
                                }
                             ?>


                        </div>

                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th colspan="3">Title</th>
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
                                    <td>
                                        <a href="category.php?edit=<?php echo $row['cat_id']; ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
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
