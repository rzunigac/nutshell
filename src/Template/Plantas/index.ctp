<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planta[]|\Cake\Collection\CollectionInterface $plantas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plantas index large-9 medium-8 columns content">
    <h3><?= __('Plantas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plantas as $planta): ?>
            <tr>
                <td><?= $this->Number->format($planta->id) ?></td>
                <td><?= h($planta->nombre) ?></td>
                <td><?= $this->Number->format($planta->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $planta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $planta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $planta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planta->id)]) ?>
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
