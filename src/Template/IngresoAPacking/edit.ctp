<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IngresoAPacking $ingresoAPacking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ingresoAPacking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ingresoAPacking->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Packings'), ['controller' => 'Packings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Packing'), ['controller' => 'Packings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingresoAPacking form large-9 medium-8 columns content">
    <?= $this->Form->create($ingresoAPacking) ?>
    <fieldset>
        <legend><?= __('Edit Ingreso A Packing') ?></legend>
        <?php
            echo $this->Form->control('packing_id', ['options' => $packings]);
            echo $this->Form->control('lote_id', ['options' => $lotes]);
            echo $this->Form->control('color_id', ['options' => $colores]);
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
            echo $this->Form->control('kg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
