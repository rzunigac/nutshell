<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lote[]|\Cake\Collection\CollectionInterface $lotes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recepciones'), ['controller' => 'Recepciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recepcion'), ['controller' => 'Recepciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Variedades'), ['controller' => 'Variedades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Variedad'), ['controller' => 'Variedades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lotes index large-9 medium-8 columns content">
    <h3><?= __('Lotes') ?></h3>
    <table class="table " cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recepcion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variedad_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('envase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg_neto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('porcentaje_esperado_de_partido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cerrado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filas_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lotes as $lote): ?>
            <tr>
                <td><?= $this->Number->format($lote->id) ?></td>
                <td><?= $lote->has('recepcion') ? $this->Html->link($lote->recepcion->id, ['controller' => 'Recepciones', 'action' => 'view', $lote->recepcion->id]) : '' ?></td>
                <td><?= $lote->has('variedad') ? $this->Html->link($lote->variedad->idvariedades, ['controller' => 'Variedades', 'action' => 'view', $lote->variedad->idvariedades]) : '' ?></td>
                <td><?= $lote->has('envase') ? $this->Html->link($lote->envase->id, ['controller' => 'Envases', 'action' => 'view', $lote->envase->id]) : '' ?></td>
                <td><?= $this->Number->format($lote->cantidad) ?></td>
                <td><?= $this->Number->format($lote->kg_neto) ?></td>
                <td><?= $this->Number->format($lote->porcentaje_esperado_de_partido) ?></td>
                <td><?= $this->Number->format($lote->cerrado) ?></td>
                <td><?= $lote->has('fila') ? $this->Html->link($lote->fila->id, ['controller' => 'Filas', 'action' => 'view', $lote->fila->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
