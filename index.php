<?php
require_once 'common/config.php';
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <?php require_once 'common/header.php' ?>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'common/navigation.php'?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><small>1.ロゴアニメーションサンプル</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->
        <?php require_once 'common/footer.php'?>
    </div>
    <!-- /.container -->

    <script>
        $('.logo').on('mouseover', function () {
            $(this).addClass('image').attr('src', 'assets/images/animation01.gif');
        });

        $('body').on('click', '.image',  function () {
            var $this = $(this);
            var i = Math.floor(Math.random() * 4) + 2; // Random 2-5
            console.log(i);
            $this.attr('src', '');
            $this.attr('src', 'assets/images/animation0'  + i  + '.gif');
        })
    </script>
</body>

</html>