<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?= $this->Form->create($user) ?>
                    <?= $this->Form->control('full_name', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('password', ['class' => 'form-control']) ?>
                    <?= $this->Form->submit('Update', ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->