<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productor $productor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Productores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recepciones'), ['controller' => 'Recepciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recepcion'), ['controller' => 'Recepciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productores form large-9 medium-8 columns content">
    <?= $this->Form->create($productor) ?>
    <fieldset>
        <legend><?= __('Add Productor') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
