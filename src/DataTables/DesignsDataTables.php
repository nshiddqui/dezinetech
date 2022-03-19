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
 * Class DesignsDataTables
 */
class DesignsDataTables extends DataTables
{


    protected $_ormTableName = 'Designs';

    /**
     * @param \DataTables\Table\ConfigBundle $configBundle
     */
    public function config(ConfigBundle $configBundle): void
    {
        $configBundle->Columns->addDatabaseColumn('Designs.id')->setWidth('50px');
        $configBundle->Columns->addDatabaseColumn('Designs.name');
        $configBundle->Columns->addDatabaseColumn('Designs.description');
        $configBundle->Columns->addDatabaseColumn('Designs.pdf');
        $configBundle->Columns->addDatabaseColumn('Designs.image');
        $configBundle->Columns->addDatabaseColumn('Designs.created')->setWidth('150px');
        $configBundle->Columns->addDatabaseColumn('Designs.modified')->setWidth('150px');
        $configBundle->Columns->addNonDatabaseColumn('action')->setWidth('50px');
        $configBundle->Options->setColumns($configBundle->Columns);
    }

    /**
     * @param \DataTables\View\DataTablesView $appView
     * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\Design $entity
     * @param \DataTables\Table\Renderer $renderer
     */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void
    {
        $action = '<a href="' . Router::url(['controller' => 'Designs', 'action' => 'edit', $entity->id, 'plugin' => false]) . '" class="btn btn-info text-white"><i class="fas fa-pencil-alt"></i></a> ';
        $renderer->add('action', $action);
        $renderer->renderRow($entity);
    }
}
