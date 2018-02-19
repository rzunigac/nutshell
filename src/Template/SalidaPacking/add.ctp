<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalidaPacking $salidaPacking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Packings'), ['controller' => 'Packings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Packing'), ['controller' => 'Packings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pallets'), ['controller' => 'Pallets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pallet'), ['controller' => 'Pallets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidaPacking form large-9 medium-8 columns content">
    <?= $this->Form->create($salidaPacking) ?>
    <fieldset>
        <legend><?= __('Add Salida Packing') ?></legend>
        <?php
            echo $this->Form->control('packing_id', ['options' => $packings]);
            echo $this->Form->control('pallet_id', ['options' => $pallets]);
            echo $this->Form->control('envase_id', ['options' => $envases]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('color_id', ['options' => $colores]);
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
