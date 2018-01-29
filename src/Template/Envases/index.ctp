<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Envase[]|\Cake\Collection\CollectionInterface $envases
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="envases index large-9 medium-8 columns content">
    <h3><?= __('Envases') ?></h3>
    <table class="table " cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($envases as $envase): ?>
            <tr>
                <td><?= $this->Number->format($envase->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $envase->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $envase->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $envase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envase->id)]) ?>
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
