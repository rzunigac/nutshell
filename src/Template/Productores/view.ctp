<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productor $productor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Productor'), ['action' => 'edit', $productor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Productor'), ['action' => 'delete', $productor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recepciones'), ['controller' => 'Recepciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recepcion'), ['controller' => 'Recepciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productores view large-9 medium-8 columns content">
    <h3><?= h($productor->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productor->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Recepciones') ?></h4>
        <?php if (!empty($productor->recepciones)): ?>
        <table class="table " cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Guia Productor') ?></th>
                <th scope="col"><?= __('Productor Id') ?></th>
                <th scope="col"><?= __('Sitio Origen') ?></th>
                <th scope="col"><?= __('Planta Destino Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Conductor') ?></th>
                <th scope="col"><?= __('Patente') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productor->recepciones as $recepciones): ?>
            <tr>
                <td><?= h($recepciones->id) ?></td>
                <td><?= h($recepciones->guia_productor) ?></td>
                <td><?= h($recepciones->productor_id) ?></td>
                <td><?= h($recepciones->sitio_origen) ?></td>
                <td><?= h($recepciones->planta_destino_id) ?></td>
                <td><?= h($recepciones->fecha) ?></td>
                <td><?= h($recepciones->conductor) ?></td>
                <td><?= h($recepciones->patente) ?></td>
                <td><?= h($recepciones->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recepciones', 'action' => 'view', $recepciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recepciones', 'action' => 'edit', $recepciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recepciones', 'action' => 'delete', $recepciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recepciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
