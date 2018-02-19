<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalidaPacking $salidaPacking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salida Packing'), ['action' => 'edit', $salidaPacking->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salida Packing'), ['action' => 'delete', $salidaPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidaPacking->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packings'), ['controller' => 'Packings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Packing'), ['controller' => 'Packings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pallets'), ['controller' => 'Pallets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pallet'), ['controller' => 'Pallets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salidaPacking view large-9 medium-8 columns content">
    <h3><?= h($salidaPacking->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Packing') ?></th>
            <td><?= $salidaPacking->has('packing') ? $this->Html->link($salidaPacking->packing->id, ['controller' => 'Packings', 'action' => 'view', $salidaPacking->packing->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pallet') ?></th>
            <td><?= $salidaPacking->has('pallet') ? $this->Html->link($salidaPacking->pallet->id, ['controller' => 'Pallets', 'action' => 'view', $salidaPacking->pallet->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Envase') ?></th>
            <td><?= $salidaPacking->has('envase') ? $this->Html->link($salidaPacking->envase->id, ['controller' => 'Envases', 'action' => 'view', $salidaPacking->envase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= $salidaPacking->has('color') ? $this->Html->link($salidaPacking->color->id, ['controller' => 'Colores', 'action' => 'view', $salidaPacking->color->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $salidaPacking->has('categoria') ? $this->Html->link($salidaPacking->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $salidaPacking->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salidaPacking->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($salidaPacking->cantidad) ?></td>
        </tr>
    </table>
</div>
