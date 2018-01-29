<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilaRecepcion $filaRecepcion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fila Recepcion'), ['action' => 'edit', $filaRecepcion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fila Recepcion'), ['action' => 'delete', $filaRecepcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filaRecepcion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fila Recepciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila Recepcion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recepcion Partidos'), ['controller' => 'RecepcionPartidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recepcion Partido'), ['controller' => 'RecepcionPartidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filaRecepciones view large-9 medium-8 columns content">
    <h3><?= h($filaRecepcion->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Recepcion Partido') ?></th>
            <td><?= $filaRecepcion->has('recepcion_partido') ? $this->Html->link($filaRecepcion->recepcion_partido->id, ['controller' => 'RecepcionPartidos', 'action' => 'view', $filaRecepcion->recepcion_partido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $filaRecepcion->has('categoria') ? $this->Html->link($filaRecepcion->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $filaRecepcion->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= $filaRecepcion->has('color') ? $this->Html->link($filaRecepcion->color->id, ['controller' => 'Colores', 'action' => 'view', $filaRecepcion->color->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bin Destino') ?></th>
            <td><?= h($filaRecepcion->bin_destino) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($filaRecepcion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg') ?></th>
            <td><?= $this->Number->format($filaRecepcion->kg) ?></td>
        </tr>
    </table>
</div>
