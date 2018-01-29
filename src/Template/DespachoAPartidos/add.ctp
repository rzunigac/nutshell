<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DespachoAPartido $despachoAPartido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Despacho A Partidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="despachoAPartidos form large-9 medium-8 columns content">
    <?= $this->Form->create($despachoAPartido) ?>
    <fieldset>
        <legend><?= __('Add Despacho A Partido') ?></legend>
        <?php
            echo $this->Form->control('guia');
            echo $this->Form->control('planta_origen_id', ['options' => $plantas]);
            echo $this->Form->control('despacho_a_ruta');
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('conductor');
            echo $this->Form->control('patente');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
