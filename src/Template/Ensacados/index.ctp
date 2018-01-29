<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ensacado[]|\Cake\Collection\CollectionInterface $ensacados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ensacado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ensacados index large-9 medium-8 columns content">
    <h3><?= __('Ensacados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('envase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg_basura') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ensacados as $ensacado): ?>
            <tr>
                <td><?= $this->Number->format($ensacado->id) ?></td>
                <td><?= $ensacado->has('lote') ? $this->Html->link($ensacado->lote->id, ['controller' => 'Lotes', 'action' => 'view', $ensacado->lote->id]) : '' ?></td>
                <td><?= h($ensacado->fecha) ?></td>
                <td><?= $ensacado->has('envase') ? $this->Html->link($ensacado->envase->id, ['controller' => 'Envases', 'action' => 'view', $ensacado->envase->id]) : '' ?></td>
                <td><?= $this->Number->format($ensacado->cantidad) ?></td>
                <td><?= $this->Number->format($ensacado->kg_basura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ensacado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ensacado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ensacado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ensacado->id)]) ?>
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
