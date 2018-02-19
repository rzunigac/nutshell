<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planta $planta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="plantas form large-9 medium-8 columns content">
    <?= $this->Form->create($planta) ?>
    <fieldset>
        <legend><?= __('Add Planta') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
