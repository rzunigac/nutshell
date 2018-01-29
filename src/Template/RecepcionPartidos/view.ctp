<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecepcionPartido $recepcionPartido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recepcion Partido'), ['action' => 'edit', $recepcionPartido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recepcion Partido'), ['action' => 'delete', $recepcionPartido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recepcionPartido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recepcion Partidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recepcion Partido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recepcionPartidos view large-9 medium-8 columns content">
    <h3><?= h($recepcionPartido->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Numero De Guia') ?></th>
            <td><?= h($recepcionPartido->numero_de_guia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planta') ?></th>
            <td><?= $recepcionPartido->has('planta') ? $this->Html->link($recepcionPartido->planta->id, ['controller' => 'Plantas', 'action' => 'view', $recepcionPartido->planta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conductor') ?></th>
            <td><?= h($recepcionPartido->conductor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patente') ?></th>
            <td><?= h($recepcionPartido->patente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($recepcionPartido->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recepcionPartido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planta Origen Id') ?></th>
            <td><?= $this->Number->format($recepcionPartido->planta_origen_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recepcion Desde Ruta') ?></th>
            <td><?= $this->Number->format($recepcionPartido->recepcion_desde_ruta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Recepcion') ?></th>
            <td><?= h($recepcionPartido->fecha_recepcion) ?></td>
        </tr>
    </table>
</div>
