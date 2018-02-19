<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalidaPacking[]|\Cake\Collection\CollectionInterface $salidaPacking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Packings'), ['controller' => 'Packings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Packing'), ['controller' => 'Packings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pallets'), ['controller' => 'Pallets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pallet'), ['controller' => 'Pallets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidaPacking index large-9 medium-8 columns content">
    <h3><?= __('Salida Packing') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('packing_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pallet_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('envase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salidaPacking as $salidaPacking): ?>
            <tr>
                <td><?= $this->Number->format($salidaPacking->id) ?></td>
                <td><?= $salidaPacking->has('packing') ? $this->Html->link($salidaPacking->packing->id, ['controller' => 'Packings', 'action' => 'view', $salidaPacking->packing->id]) : '' ?></td>
                <td><?= $salidaPacking->has('pallet') ? $this->Html->link($salidaPacking->pallet->id, ['controller' => 'Pallets', 'action' => 'view', $salidaPacking->pallet->id]) : '' ?></td>
                <td><?= $salidaPacking->has('envase') ? $this->Html->link($salidaPacking->envase->id, ['controller' => 'Envases', 'action' => 'view', $salidaPacking->envase->id]) : '' ?></td>
                <td><?= $this->Number->format($salidaPacking->cantidad) ?></td>
                <td><?= $salidaPacking->has('color') ? $this->Html->link($salidaPacking->color->id, ['controller' => 'Colores', 'action' => 'view', $salidaPacking->color->id]) : '' ?></td>
                <td><?= $salidaPacking->has('categoria') ? $this->Html->link($salidaPacking->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $salidaPacking->categoria->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salidaPacking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salidaPacking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salidaPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidaPacking->id)]) ?>
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
