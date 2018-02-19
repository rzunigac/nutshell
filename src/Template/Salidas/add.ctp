<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida $salida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Salidas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pallets'), ['controller' => 'Pallets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pallet'), ['controller' => 'Pallets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidas form large-9 medium-8 columns content">
    <?= $this->Form->create($salida) ?>
    <fieldset>
        <legend><?= __('Add Salida') ?></legend>
        <?php
            echo $this->Form->control('fecha', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
