<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Packing $packing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $packing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $packing->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Packings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida Packing'), ['controller' => 'SalidaPacking', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="packings form large-9 medium-8 columns content">
    <?= $this->Form->create($packing) ?>
    <fieldset>
        <legend><?= __('Edit Packing') ?></legend>
        <?php
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('con_cascara');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
