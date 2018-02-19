<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Envase $envase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="envases form large-9 medium-8 columns content">
    <?= $this->Form->create($envase) ?>
    <fieldset>
        <legend><?= __('Add Envase') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('kg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
