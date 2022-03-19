<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?> | <?= PROJECT ?></title>

    <?= $this->Html->meta('icon') ?>

    <!-- Google Font: Source Sans Pro -->
    <?= $this->Html->css('//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') ?>

    <!-- Font Awesome -->
    <?= $this->Html->css('/plugins/fontawesome-free/css/all.min') ?>

    <?= $this->fetch('css') ?>

    <!-- Theme style -->
    <?= $this->Html->css('adminlte.min') ?>

    <?= $this->fetch('meta') ?>
    
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= $this->element('sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $this->fetch('title') ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><?= $this->Html->link(PROJECT, '/') ?></li>
                                <li class="breadcrumb-item active"><?= $this->fetch('title') ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Version 1.0
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <?= $this->Html->link(PROJECT, '/') ?>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <?= $this->Html->script('/plugins/jquery/jquery.min') ?>

    <!-- Bootstrap 4 -->
    <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.bundle.min') ?>

    <!-- AdminLTE App -->
    <?= $this->Html->script('adminlte.min') ?>

    <?= $this->fetch('script') ?>
</body>

</html>