<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recepcion $recepcion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recepciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productores'), ['controller' => 'Productores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recepciones form large-9 medium-8 columns content">
    <?= $this->Form->create($recepcion) ?>
    <fieldset>
        <legend><?= __('Add Recepcion') ?></legend>
        <?php
            echo $this->Form->control('guia_productor');
            echo $this->Form->control('productor_id', ['options' => $productores]);
            echo $this->Form->control('sitio_origen');
            echo $this->Form->control('planta_destino_id', ['options' => $plantas]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('conductor');
            echo $this->Form->control('patente');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
