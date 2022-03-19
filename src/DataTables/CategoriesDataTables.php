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
 * Class CategoriesDataTables
 */
class CategoriesDataTables extends DataTables
{


    protected $_ormTableName = 'Categories';

    /**
     * @param \DataTables\Table\ConfigBundle $configBundle
     */
    public function config(ConfigBundle $configBundle): void
    {
        $configBundle->Columns->deleteAllColumns();

        $configBundle->Columns->addDatabaseColumn('Categories.id')->setWidth('50px');
        $configBundle->Columns->addDatabaseColumn('Categories.name');
        $configBundle->Columns->addDatabaseColumn('Categories.created')->setWidth('150px');
        $configBundle->Columns->addDatabaseColumn('Categories.modified')->setWidth('150px');
        $configBundle->Columns->addNonDatabaseColumn('action')->setWidth('50px');

        $configBundle->Options->setColumns($configBundle->Columns);
    }

    /**
     * @param \DataTables\View\DataTablesView $appView
     * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\Category $entity
     * @param \DataTables\Table\Renderer $renderer
     */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void
    {
        $action = '<a href="' . Router::url(['controller' => 'Categories', 'action' => 'edit', $entity->id, 'plugin' => false]) . '" class="btn btn-info text-white"><i class="fas fa-pencil-alt"></i></a> ';
        $renderer->add('action', $action);
        $renderer->renderRow($entity);
    }
}