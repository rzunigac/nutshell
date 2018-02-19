<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilaRecepcion[]|\Cake\Collection\CollectionInterface $filaRecepciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fila Recepcion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recepcion Partidos'), ['controller' => 'RecepcionPartidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recepcion Partido'), ['controller' => 'RecepcionPartidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filaRecepciones index large-9 medium-8 columns content">
    <h3><?= __('Fila Recepciones') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recepcion_partido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bin_destino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filaRecepciones as $filaRecepcion): ?>
            <tr>
                <td><?= $this->Number->format($filaRecepcion->id) ?></td>
                <td><?= $filaRecepcion->has('recepcion_partido') ? $this->Html->link($filaRecepcion->recepcion_partido->id, ['controller' => 'RecepcionPartidos', 'action' => 'view', $filaRecepcion->recepcion_partido->id]) : '' ?></td>
                <td><?= $filaRecepcion->has('categoria') ? $this->Html->link($filaRecepcion->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $filaRecepcion->categoria->id]) : '' ?></td>
                <td><?= $filaRecepcion->has('color') ? $this->Html->link($filaRecepcion->color->id, ['controller' => 'Colores', 'action' => 'view', $filaRecepcion->color->id]) : '' ?></td>
                <td><?= h($filaRecepcion->bin_destino) ?></td>
                <td><?= $this->Number->format($filaRecepcion->kg) ?></td>
                <td><?= $filaRecepcion->has('lote') ? $this->Html->link($filaRecepcion->lote->id, ['controller' => 'Lotes', 'action' => 'view', $filaRecepcion->lote->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filaRecepcion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filaRecepcion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filaRecepcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filaRecepcion->id)]) ?>
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
