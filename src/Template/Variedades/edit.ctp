<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Variedad $variedad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $variedad->idvariedades],
                ['confirm' => __('Are you sure you want to delete # {0}?', $variedad->idvariedades)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Variedades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="variedades form large-9 medium-8 columns content">
    <?= $this->Form->create($variedad) ?>
    <fieldset>
        <legend><?= __('Edit Variedad') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
