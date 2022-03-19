<?php
$this->Html->css('/plugins/summernote/summernote-bs4.min', ['block' => 'css']);
$this->Html->script('/plugins/summernote/summernote-bs4.min', ['block' => 'script']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?= $this->Form->create($design, ['type' => 'file']) ?>
                    <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('image', ['type' => 'file', 'class' => 'form-control', 'accept' => 'image/*', 'label' => 'New Image']) ?>
                    <?= $this->Form->control('pdf', ['type' => 'file', 'class' => 'form-control', 'accept' => '.pdf', 'label' => 'New Pdf']) ?>
                    <?= $this->Form->control('description') ?>
                    <?= $this->Form->submit('Add', ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
<?php
$this->Html->scriptStart(['block' => true]);
echo "$(function () {
    // Summernote
    $('#description').summernote({height: 250})
});";
$this->Html->scriptEnd();
?>