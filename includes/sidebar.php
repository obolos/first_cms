<?php $result = Select_all ($connection, 'categories'); ?>

<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
        <div class="input-group">
            <input type="text" name="search" class="form-control">
            <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
            </span>
                </div>
        </form>

    </div>



        <!-- /.input-group -->

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php while ($row = mysqli_fetch_assoc($result)):?>
                    <li>
                        <a href="#"><?php echo $row['cat_title'] ?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>

        <!-- /.row -->
    </div>
    </div>
    <!-- Side Widget Well -->
<?php include "widget.php"; ?>

</div>




