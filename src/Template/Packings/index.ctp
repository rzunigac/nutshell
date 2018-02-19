<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Packing[]|\Cake\Collection\CollectionInterface $packings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Packing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="packings index large-9 medium-8 columns content">
    <h3><?= __('Packings') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('con_cascara') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($packings as $packing): ?>
            <tr>
                <td><?= $this->Number->format($packing->id) ?></td>
                <td><?= h($packing->fecha) ?></td>
                <td><?= $this->Number->format($packing->con_cascara) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $packing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $packing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $packing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packing->id)]) ?>
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
