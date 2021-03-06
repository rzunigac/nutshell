<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DespachoAPartido[]|\Cake\Collection\CollectionInterface $despachoAPartidos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Despacho A Partido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="despachoAPartidos index large-9 medium-8 columns content">
    <h3><?= __('Despacho A Partidos') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planta_origen_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('despacho_a_ruta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conductor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($despachoAPartidos as $despachoAPartido): ?>
            <tr>
                <td><?= $this->Number->format($despachoAPartido->id) ?></td>
                <td><?= $this->Number->format($despachoAPartido->guia) ?></td>
                <td><?= $despachoAPartido->has('planta') ? $this->Html->link($despachoAPartido->planta->id, ['controller' => 'Plantas', 'action' => 'view', $despachoAPartido->planta->id]) : '' ?></td>
                <td><?= $this->Number->format($despachoAPartido->despacho_a_ruta) ?></td>
                <td><?= h($despachoAPartido->fecha) ?></td>
                <td><?= h($despachoAPartido->conductor) ?></td>
                <td><?= h($despachoAPartido->patente) ?></td>
                <td><?= h($despachoAPartido->observaciones) ?></td>
                <td><?= h($despachoAPartido->manual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $despachoAPartido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $despachoAPartido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $despachoAPartido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $despachoAPartido->id)]) ?>
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
