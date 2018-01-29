<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DespachoAPartido $despachoAPartido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Despacho A Partido'), ['action' => 'edit', $despachoAPartido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Despacho A Partido'), ['action' => 'delete', $despachoAPartido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $despachoAPartido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Despacho A Partidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Despacho A Partido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="despachoAPartidos view large-9 medium-8 columns content">
    <h3><?= h($despachoAPartido->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Planta') ?></th>
            <td><?= $despachoAPartido->has('planta') ? $this->Html->link($despachoAPartido->planta->id, ['controller' => 'Plantas', 'action' => 'view', $despachoAPartido->planta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conductor') ?></th>
            <td><?= h($despachoAPartido->conductor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patente') ?></th>
            <td><?= h($despachoAPartido->patente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($despachoAPartido->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($despachoAPartido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guia') ?></th>
            <td><?= $this->Number->format($despachoAPartido->guia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Despacho A Ruta') ?></th>
            <td><?= $this->Number->format($despachoAPartido->despacho_a_ruta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($despachoAPartido->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Filas') ?></h4>
        <?php if (!empty($despachoAPartido->filas)): ?>
        <table class="table " cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Despacho A Partido Id') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($despachoAPartido->filas as $filas): ?>
            <tr>
                <td><?= h($filas->id) ?></td>
                <td><?= h($filas->despacho_a_partido_id) ?></td>
                <td><?= h($filas->envase_id) ?></td>
                <td><?= h($filas->cantidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Filas', 'action' => 'view', $filas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Filas', 'action' => 'edit', $filas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Filas', 'action' => 'delete', $filas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
