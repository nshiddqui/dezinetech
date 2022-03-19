 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <li class="nav-item">
             <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i>', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link', 'escape' => false]) ?>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <?= $this->Html->link('<span class="brand-text font-weight-light h2">' . PROJECT . '</span>', '/', ['class' => 'brand-link text-center', 'escape' => false]) ?>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <?= $this->Html->image('avatar.png', ['class' => 'img-circle elevation-2', 'alt' => 'User Image']) ?>
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= $this->Identity->get('full_name') ?></a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                 <li class="nav-item"><?= $this->Html->link('<i class="nav-icon fas fa-tachometer-alt"></i> <p>Dashboard</p>', '/dashboard', ['class' => 'nav-link', 'escape' => false]) ?></li>
                 <?php if ($this->Identity->is(ADMIN, 'role')) { ?>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-list-alt"></i>
                             <p>Category Managements <i class="right fas fa-angle-left"></i></p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item"><?= $this->Html->link('<i class="far fa-circle nav-icon"></i> <p>Parent Categories</p>', ['controller' => 'Categories', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false]) ?></li>
                             <li class="nav-item"><?= $this->Html->link('<i class="far fa-circle nav-icon"></i> <p>Child Categories</p>', ['controller' => 'SubCategories', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false]) ?></li>
                         </ul>
                     </li>
                     <li class="nav-item"><?= $this->Html->link('<i class="nav-icon fas fa-object-group"></i> <p>Design Managements</p>', ['controller' => 'Designs', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false]) ?></li>
                     <li class="nav-item"><?= $this->Html->link('<i class="nav-icon fas fa-users"></i> <p>Client Managements</p>', ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false]) ?></li>
                 <?php } ?>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>