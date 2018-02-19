<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Packing $packing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Packing'), ['action' => 'edit', $packing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Packing'), ['action' => 'delete', $packing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Packings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Packing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="packings view large-9 medium-8 columns content">
    <h3><?= h($packing->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($packing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Con Cascara') ?></th>
            <td><?= $this->Number->format($packing->con_cascara) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($packing->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ingreso A Packing') ?></h4>
        <?php if (!empty($packing->ingreso_a_packing)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Packing Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Color Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Kg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($packing->ingreso_a_packing as $ingresoAPacking): ?>
            <tr>
                <td><?= h($ingresoAPacking->id) ?></td>
                <td><?= h($ingresoAPacking->packing_id) ?></td>
                <td><?= h($ingresoAPacking->lote_id) ?></td>
                <td><?= h($ingresoAPacking->color_id) ?></td>
                <td><?= h($ingresoAPacking->categoria_id) ?></td>
                <td><?= h($ingresoAPacking->kg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'IngresoAPacking', 'action' => 'view', $ingresoAPacking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'IngresoAPacking', 'action' => 'edit', $ingresoAPacking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'IngresoAPacking', 'action' => 'delete', $ingresoAPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingresoAPacking->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Salida Packing') ?></h4>
        <?php if (!empty($packing->salida_packing)): ?>
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
            <?php foreach ($packing->salida_packing as $salidaPacking): ?>
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
