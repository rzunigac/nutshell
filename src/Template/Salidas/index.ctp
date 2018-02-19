<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida[]|\Cake\Collection\CollectionInterface $salidas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salida'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pallets'), ['controller' => 'Pallets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pallet'), ['controller' => 'Pallets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidas index large-9 medium-8 columns content">
    <h3><?= __('Salidas') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salidas as $salida): ?>
            <tr>
                <td><?= $this->Number->format($salida->id) ?></td>
                <td><?= h($salida->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id)]) ?>
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
