<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fila $fila
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fila'), ['action' => 'edit', $fila->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fila'), ['action' => 'delete', $fila->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fila->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Filas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Despacho A Partidos'), ['controller' => 'DespachoAPartidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Despacho A Partido'), ['controller' => 'DespachoAPartidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filas view large-9 medium-8 columns content">
    <h3><?= h($fila->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Despacho A Partido') ?></th>
            <td><?= $fila->has('despacho_a_partido') ? $this->Html->link($fila->despacho_a_partido->id, ['controller' => 'DespachoAPartidos', 'action' => 'view', $fila->despacho_a_partido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Envase') ?></th>
            <td><?= $fila->has('envase') ? $this->Html->link($fila->envase->id, ['controller' => 'Envases', 'action' => 'view', $fila->envase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fila->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($fila->cantidad) ?></td>
        </tr>
    </table>
</div>
