<?php
$this->Html->css('//cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css', ['block' => 'css']);
$this->Html->script('//cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js', ['block' => 'script']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-right">
                    <?= $this->Html->link('<i class="fas fa-plus"></i>', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']) ?>
                </div>
                <div class="card-body">
                    <?= $this->DataTables->renderTable('Designs', ['class' => 'table table-striped']) ?>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->