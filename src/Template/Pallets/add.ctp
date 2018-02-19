<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pallet $pallet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pallets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Salidas'), ['controller' => 'Salidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida'), ['controller' => 'Salidas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pallets form large-9 medium-8 columns content">
    <?= $this->Form->create($pallet) ?>
    <fieldset>
        <legend><?= __('Add Pallet') ?></legend>
        <?php
            echo $this->Form->control('folio');
            echo $this->Form->control('salida_id', ['options' => $salidas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
