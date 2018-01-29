<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lote $lote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lote'), ['action' => 'edit', $lote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lote'), ['action' => 'delete', $lote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recepciones'), ['controller' => 'Recepciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recepcion'), ['controller' => 'Recepciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Variedades'), ['controller' => 'Variedades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Variedad'), ['controller' => 'Variedades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lotes view large-9 medium-8 columns content">
    <h3><?= h($lote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Recepcion') ?></th>
            <td><?= $lote->has('recepcion') ? $this->Html->link($lote->recepcion->id, ['controller' => 'Recepciones', 'action' => 'view', $lote->recepcion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variedad') ?></th>
            <td><?= $lote->has('variedad') ? $this->Html->link($lote->variedad->idvariedades, ['controller' => 'Variedades', 'action' => 'view', $lote->variedad->idvariedades]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Envase') ?></th>
            <td><?= $lote->has('envase') ? $this->Html->link($lote->envase->id, ['controller' => 'Envases', 'action' => 'view', $lote->envase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fila') ?></th>
            <td><?= $lote->has('fila') ? $this->Html->link($lote->fila->id, ['controller' => 'Filas', 'action' => 'view', $lote->fila->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($lote->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg Neto') ?></th>
            <td><?= $this->Number->format($lote->kg_neto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Porcentaje Esperado De Partido') ?></th>
            <td><?= $this->Number->format($lote->porcentaje_esperado_de_partido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cerrado') ?></th>
            <td><?= $this->Number->format($lote->cerrado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ensacados') ?></h4>
        <?php if (!empty($lote->ensacados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Kg Basura') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lote->ensacados as $ensacados): ?>
            <tr>
                <td><?= h($ensacados->id) ?></td>
                <td><?= h($ensacados->lote_id) ?></td>
                <td><?= h($ensacados->fecha) ?></td>
                <td><?= h($ensacados->envase_id) ?></td>
                <td><?= h($ensacados->cantidad) ?></td>
                <td><?= h($ensacados->kg_basura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ensacados', 'action' => 'view', $ensacados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ensacados', 'action' => 'edit', $ensacados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ensacados', 'action' => 'delete', $ensacados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ensacados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
