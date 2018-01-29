<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recepcion $recepcion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recepcion'), ['action' => 'edit', $recepcion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recepcion'), ['action' => 'delete', $recepcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recepcion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recepciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recepcion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productores'), ['controller' => 'Productores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recepciones view large-9 medium-8 columns content">
    <h3><?= h($recepcion->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Guia Productor') ?></th>
            <td><?= h($recepcion->guia_productor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productor') ?></th>
            <td><?= $recepcion->has('productor') ? $this->Html->link($recepcion->productor->id, ['controller' => 'Productores', 'action' => 'view', $recepcion->productor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sitio Origen') ?></th>
            <td><?= h($recepcion->sitio_origen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planta') ?></th>
            <td><?= $recepcion->has('planta') ? $this->Html->link($recepcion->planta->id, ['controller' => 'Plantas', 'action' => 'view', $recepcion->planta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conductor') ?></th>
            <td><?= h($recepcion->conductor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patente') ?></th>
            <td><?= h($recepcion->patente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($recepcion->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recepcion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($recepcion->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lotes') ?></h4>
        <?php if (!empty($recepcion->lotes)): ?>
        <table class="table " cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Recepcion Id') ?></th>
                <th scope="col"><?= __('Variedad Id') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Kg Neto') ?></th>
                <th scope="col"><?= __('Porcentaje Esperado De Partido') ?></th>
                <th scope="col"><?= __('Cerrado') ?></th>
                <th scope="col"><?= __('Filas Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($recepcion->lotes as $lotes): ?>
            <tr>
                <td><?= h($lotes->id) ?></td>
                <td><?= h($lotes->recepcion_id) ?></td>
                <td><?= h($lotes->variedad_id) ?></td>
                <td><?= h($lotes->envase_id) ?></td>
                <td><?= h($lotes->cantidad) ?></td>
                <td><?= h($lotes->kg_neto) ?></td>
                <td><?= h($lotes->porcentaje_esperado_de_partido) ?></td>
                <td><?= h($lotes->cerrado) ?></td>
                <td><?= h($lotes->filas_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lotes', 'action' => 'view', $lotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lotes', 'action' => 'edit', $lotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lotes', 'action' => 'delete', $lotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
