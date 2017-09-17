<?php
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

    <?php include "includes/profile_menu.php"; ?>



    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#admin_categories"><i class="fa fa-fw fa-edit">

                    </i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="admin_categories" class="collapse">
                    <li>
                        <a href="posts.php">View Posts</a>
                    </li>
                    <li>
                        <a href="#">Edit Posts</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="category.php"><i class="fa fa-fw fa-bar-chart-o"></i> Categories </a>
            </li>
            <li>
                <a href=""><i class="fa fa-fw fa-desktop"></i> Comments</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#admin_posts"><i class="fa fa-fw fa-arrows-v">

                    </i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="admin_posts" class="collapse">
                    <li>
                        <a href="#">View Users</a>
                    </li>
                    <li>
                        <a href="#">Edit Users</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href=""><i class="fa fa-fw fa-desktop"></i> Profile</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
