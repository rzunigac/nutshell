<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida $salida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salida'), ['action' => 'edit', $salida->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salida'), ['action' => 'delete', $salida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salidas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pallets'), ['controller' => 'Pallets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pallet'), ['controller' => 'Pallets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salidas view large-9 medium-8 columns content">
    <h3><?= h($salida->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salida->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($salida->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pallets') ?></h4>
        <?php if (!empty($salida->pallets)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Folio') ?></th>
                <th scope="col"><?= __('Salida Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($salida->pallets as $pallets): ?>
            <tr>
                <td><?= h($pallets->id) ?></td>
                <td><?= h($pallets->folio) ?></td>
                <td><?= h($pallets->salida_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pallets', 'action' => 'view', $pallets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pallets', 'action' => 'edit', $pallets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pallets', 'action' => 'delete', $pallets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pallets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
