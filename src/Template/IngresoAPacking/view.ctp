<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IngresoAPacking $ingresoAPacking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ingreso A Packing'), ['action' => 'edit', $ingresoAPacking->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ingreso A Packing'), ['action' => 'delete', $ingresoAPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingresoAPacking->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packings'), ['controller' => 'Packings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Packing'), ['controller' => 'Packings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ingresoAPacking view large-9 medium-8 columns content">
    <h3><?= h($ingresoAPacking->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Packing') ?></th>
            <td><?= $ingresoAPacking->has('packing') ? $this->Html->link($ingresoAPacking->packing->id, ['controller' => 'Packings', 'action' => 'view', $ingresoAPacking->packing->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= $ingresoAPacking->has('lote') ? $this->Html->link($ingresoAPacking->lote->id, ['controller' => 'Lotes', 'action' => 'view', $ingresoAPacking->lote->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= $ingresoAPacking->has('color') ? $this->Html->link($ingresoAPacking->color->id, ['controller' => 'Colores', 'action' => 'view', $ingresoAPacking->color->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $ingresoAPacking->has('categoria') ? $this->Html->link($ingresoAPacking->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $ingresoAPacking->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ingresoAPacking->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg') ?></th>
            <td><?= $this->Number->format($ingresoAPacking->kg) ?></td>
        </tr>
    </table>
</div>
