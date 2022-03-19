<?php

declare(strict_types=1);

namespace App\DataTables;

use Cake\Datasource\EntityInterface;
use Cake\Routing\Router;
use DataTables\Table\ConfigBundle;
use DataTables\Table\DataTables;
use DataTables\Table\Renderer;
use DataTables\View\DataTablesView;

/**
 * Class UsersDataTables
 */
class UsersDataTables extends DataTables
{


    protected $_ormTableName = 'Users';

    /**
     * @param \DataTables\Table\ConfigBundle $configBundle
     */
    public function config(ConfigBundle $configBundle): void
    {
        $configBundle->Columns->deleteAllColumns();

        $configBundle->Columns->addDatabaseColumn('Users.id')->setWidth('50px');
        $configBundle->Columns->addDatabaseColumn('Users.full_name');
        $configBundle->Columns->addDatabaseColumn('Users.created')->setWidth('150px');
        $configBundle->Columns->addDatabaseColumn('Users.modified')->setWidth('150px');
        $configBundle->Columns->addNonDatabaseColumn('action')->setWidth('50px');

        $configBundle->Options->setColumns($configBundle->Columns);
    }

    /**
     * @param \DataTables\View\DataTablesView $appView
     * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\User $entity
     * @param \DataTables\Table\Renderer $renderer
     */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void
    {
        $action = '<a href="' . Router::url(['controller' => 'Users', 'action' => 'edit', $entity->id, 'plugin' => false]) . '" class="btn btn-info text-white"><i class="fas fa-pencil-alt"></i></a> ';
        $renderer->add('action', $action);
        $renderer->renderRow($entity);
    }
}
