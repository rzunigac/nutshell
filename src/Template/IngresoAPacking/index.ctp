<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IngresoAPacking[]|\Cake\Collection\CollectionInterface $ingresoAPacking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Packings'), ['controller' => 'Packings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Packing'), ['controller' => 'Packings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingresoAPacking index large-9 medium-8 columns content">
    <h3><?= __('Ingreso A Packing') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('packing_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ingresoAPacking as $ingresoAPacking): ?>
            <tr>
                <td><?= $this->Number->format($ingresoAPacking->id) ?></td>
                <td><?= $ingresoAPacking->has('packing') ? $this->Html->link($ingresoAPacking->packing->id, ['controller' => 'Packings', 'action' => 'view', $ingresoAPacking->packing->id]) : '' ?></td>
                <td><?= $ingresoAPacking->has('lote') ? $this->Html->link($ingresoAPacking->lote->id, ['controller' => 'Lotes', 'action' => 'view', $ingresoAPacking->lote->id]) : '' ?></td>
                <td><?= $ingresoAPacking->has('color') ? $this->Html->link($ingresoAPacking->color->id, ['controller' => 'Colores', 'action' => 'view', $ingresoAPacking->color->id]) : '' ?></td>
                <td><?= $ingresoAPacking->has('categoria') ? $this->Html->link($ingresoAPacking->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $ingresoAPacking->categoria->id]) : '' ?></td>
                <td><?= $this->Number->format($ingresoAPacking->kg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ingresoAPacking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ingresoAPacking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ingresoAPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingresoAPacking->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
