<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fila $fila
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Despacho A Partidos'), ['controller' => 'DespachoAPartidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Despacho A Partido'), ['controller' => 'DespachoAPartidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filas form large-9 medium-8 columns content">
    <?= $this->Form->create($fila) ?>
    <fieldset>
        <legend><?= __('Add Fila') ?></legend>
        <?php
            echo $this->Form->control('despacho_a_partido_id', ['options' => $despachoAPartidos]);
            echo $this->Form->control('envase_id', ['options' => $envases]);
            echo $this->Form->control('cantidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
