<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecepcionPartido[]|\Cake\Collection\CollectionInterface $recepcionPartidos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recepcion Partido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recepcionPartidos index large-9 medium-8 columns content">
    <h3><?= __('Recepcion Partidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_de_guia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_recepcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planta_origen_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planta_destino_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conductor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recepcion_desde_ruta') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recepcionPartidos as $recepcionPartido): ?>
            <tr>
                <td><?= $this->Number->format($recepcionPartido->id) ?></td>
                <td><?= h($recepcionPartido->numero_de_guia) ?></td>
                <td><?= h($recepcionPartido->fecha_recepcion) ?></td>
                <td><?= $this->Number->format($recepcionPartido->planta_origen_id) ?></td>
                <td><?= $recepcionPartido->has('planta') ? $this->Html->link($recepcionPartido->planta->id, ['controller' => 'Plantas', 'action' => 'view', $recepcionPartido->planta->id]) : '' ?></td>
                <td><?= h($recepcionPartido->conductor) ?></td>
                <td><?= h($recepcionPartido->patente) ?></td>
                <td><?= h($recepcionPartido->observaciones) ?></td>
                <td><?= $this->Number->format($recepcionPartido->recepcion_desde_ruta) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recepcionPartido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recepcionPartido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recepcionPartido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recepcionPartido->id)]) ?>
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
