<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recepcion[]|\Cake\Collection\CollectionInterface $recepciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recepcion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productores'), ['controller' => 'Productores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recepciones index large-9 medium-8 columns content">
    <h3><?= __('Recepciones') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guia_productor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('productor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sitio_origen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planta_destino_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conductor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recepciones as $recepcion): ?>
            <tr>
                <td><?= $this->Number->format($recepcion->id) ?></td>
                <td><?= h($recepcion->guia_productor) ?></td>
                <td><?= $recepcion->has('productor') ? $this->Html->link($recepcion->productor->nombre, ['controller' => 'Productores', 'action' => 'view', $recepcion->productor->id]) : '' ?></td>
                <td><?= h($recepcion->sitio_origen) ?></td>
                <td><?= $recepcion->has('planta') ? $this->Html->link($recepcion->planta->nombre, ['controller' => 'Plantas', 'action' => 'view', $recepcion->planta->id]) : '' ?></td>
                <td><?= h($recepcion->fecha) ?></td>
                <td><?= h($recepcion->conductor) ?></td>
                <td><?= h($recepcion->patente) ?></td>
                <td><?= h($recepcion->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recepcion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recepcion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recepcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recepcion->id)]) ?>
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
