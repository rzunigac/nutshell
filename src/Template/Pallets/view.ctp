<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pallet $pallet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pallet'), ['action' => 'edit', $pallet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pallet'), ['action' => 'delete', $pallet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pallet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pallets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pallet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salidas'), ['controller' => 'Salidas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida'), ['controller' => 'Salidas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pallets view large-9 medium-8 columns content">
    <h3><?= h($pallet->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Folio') ?></th>
            <td><?= h($pallet->folio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salida') ?></th>
            <td><?= $pallet->has('salida') ? $this->Html->link($pallet->salida->id, ['controller' => 'Salidas', 'action' => 'view', $pallet->salida->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pallet->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Salida Packing') ?></h4>
        <?php if (!empty($pallet->salida_packing)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Packing Id') ?></th>
                <th scope="col"><?= __('Pallet Id') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Color Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pallet->salida_packing as $salidaPacking): ?>
            <tr>
                <td><?= h($salidaPacking->id) ?></td>
                <td><?= h($salidaPacking->packing_id) ?></td>
                <td><?= h($salidaPacking->pallet_id) ?></td>
                <td><?= h($salidaPacking->envase_id) ?></td>
                <td><?= h($salidaPacking->cantidad) ?></td>
                <td><?= h($salidaPacking->color_id) ?></td>
                <td><?= h($salidaPacking->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalidaPacking', 'action' => 'view', $salidaPacking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalidaPacking', 'action' => 'edit', $salidaPacking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalidaPacking', 'action' => 'delete', $salidaPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidaPacking->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
