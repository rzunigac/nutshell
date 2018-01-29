<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ensacado $ensacado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ensacado'), ['action' => 'edit', $ensacado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ensacado'), ['action' => 'delete', $ensacado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ensacado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ensacados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ensacado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ensacados view large-9 medium-8 columns content">
    <h3><?= h($ensacado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= $ensacado->has('lote') ? $this->Html->link($ensacado->lote->id, ['controller' => 'Lotes', 'action' => 'view', $ensacado->lote->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Envase') ?></th>
            <td><?= $ensacado->has('envase') ? $this->Html->link($ensacado->envase->id, ['controller' => 'Envases', 'action' => 'view', $ensacado->envase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ensacado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($ensacado->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg Basura') ?></th>
            <td><?= $this->Number->format($ensacado->kg_basura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($ensacado->fecha) ?></td>
        </tr>
    </table>
</div>
