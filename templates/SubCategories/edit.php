<?php
$this->Html->css('/plugins/summernote/summernote-bs4.min', ['block' => 'css']);
$this->Html->script('/plugins/summernote/summernote-bs4.min', ['block' => 'script']);
$this->Html->css('/plugins/select2/css/select2.min', ['block' => 'css']);
$this->Html->script('/plugins/select2/js/select2.full.min', ['block' => 'script'])
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?= $this->Form->create($subCategory) ?>
                    <?= $this->Form->control('category_id', ['options' => $categories, 'class' => 'select2 form-control']) ?>
                    <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('description') ?>
                    <?= $this->Form->submit('Update', ['class' => 'btn btn-primary']) ?>
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
    $('#description').summernote({height: 250});
    $('.select2').select2()
});";
$this->Html->scriptEnd();
?>