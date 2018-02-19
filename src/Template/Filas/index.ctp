<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fila[]|\Cake\Collection\CollectionInterface $filas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Despacho A Partidos'), ['controller' => 'DespachoAPartidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Despacho A Partido'), ['controller' => 'DespachoAPartidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filas index large-9 medium-8 columns content">
    <h3><?= __('Filas') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('despacho_a_partido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('envase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filas as $fila): ?>
            <tr>
                <td><?= $this->Number->format($fila->id) ?></td>
                <td><?= $fila->has('despacho_a_partido') ? $this->Html->link($fila->despacho_a_partido->id, ['controller' => 'DespachoAPartidos', 'action' => 'view', $fila->despacho_a_partido->id]) : '' ?></td>
                <td><?= $fila->has('envase') ? $this->Html->link($fila->envase->id, ['controller' => 'Envases', 'action' => 'view', $fila->envase->id]) : '' ?></td>
                <td><?= $this->Number->format($fila->cantidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fila->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fila->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fila->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fila->id)]) ?>
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
