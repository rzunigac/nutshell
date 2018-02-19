<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pallet[]|\Cake\Collection\CollectionInterface $pallets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pallet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salidas'), ['controller' => 'Salidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida'), ['controller' => 'Salidas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pallets index large-9 medium-8 columns content">
    <h3><?= __('Pallets') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salida_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pallets as $pallet): ?>
            <tr>
                <td><?= $this->Number->format($pallet->id) ?></td>
                <td><?= h($pallet->folio) ?></td>
                <td><?= $pallet->has('salida') ? $this->Html->link($pallet->salida->id, ['controller' => 'Salidas', 'action' => 'view', $pallet->salida->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pallet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pallet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pallet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pallet->id)]) ?>
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
