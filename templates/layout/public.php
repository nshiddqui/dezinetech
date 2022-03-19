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

    <!-- Theme style -->
    <?= $this->Html->css('adminlte.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>

<body class="hold-transition login-page">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <!-- jQuery -->
    <?= $this->Html->script('/plugins/jquery/jquery.min') ?>

    <!-- Bootstrap 4 -->
    <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.bundle.min') ?>

    <!-- AdminLTE App -->
    <?= $this->Html->script('adminlte.min') ?>

    <?= $this->fetch('script') ?>
</body>

</html>