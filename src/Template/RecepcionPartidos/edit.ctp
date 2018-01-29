<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecepcionPartido $recepcionPartido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recepcionPartido->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recepcionPartido->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recepcion Partidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recepcionPartidos form large-9 medium-8 columns content">
    <?= $this->Form->create($recepcionPartido) ?>
    <fieldset>
        <legend><?= __('Edit Recepcion Partido') ?></legend>
        <?php
            echo $this->Form->control('numero_de_guia');
            echo $this->Form->control('fecha_recepcion', ['empty' => true]);
            echo $this->Form->control('planta_origen_id');
            echo $this->Form->control('planta_destino_id', ['options' => $plantas]);
            echo $this->Form->control('conductor');
            echo $this->Form->control('patente');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('recepcion_desde_ruta');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
