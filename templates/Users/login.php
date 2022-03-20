<?php
$this->assign('title', 'Login');
$this->Form->setTemplates([
    'inputContainer' => '{{content}}'
]);

?>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <?= $this->Html->link(PROJECT, '/', ['class' => 'h1']) ?>
        </div>
        <div class="card-body">
            <?= $this->Flash->render() ?>

            <?= $this->Form->create() ?>
            <div class="input-group mb-3">
                <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Email', 'label' => false, 'template' => false, 'required' => true]) ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'template' => false, 'required' => true]) ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?= $this->Form->submit('Sign In', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
                <!-- /.col -->
            </div>
            <?= $this->Form->end() ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->