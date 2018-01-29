<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planta $planta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Planta'), ['action' => 'edit', $planta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Planta'), ['action' => 'delete', $planta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plantas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plantas view large-9 medium-8 columns content">
    <h3><?= h($planta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($planta->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($planta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($planta->tipo) ?></td>
        </tr>
    </table>
</div>
