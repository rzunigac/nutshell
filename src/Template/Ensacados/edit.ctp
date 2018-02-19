<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ensacado $ensacado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ensacado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ensacado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ensacados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ensacados form large-9 medium-8 columns content">
    <?= $this->Form->create($ensacado) ?>
    <fieldset>
        <legend><?= __('Edit Ensacado') ?></legend>
        <?php
            echo $this->Form->control('lote_id', ['options' => $lotes]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('envase_id', ['options' => $envases]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('kg_basura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
