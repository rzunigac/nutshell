<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilaRecepcion $filaRecepcion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fila Recepciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recepcion Partidos'), ['controller' => 'RecepcionPartidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recepcion Partido'), ['controller' => 'RecepcionPartidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colores'), ['controller' => 'Colores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filaRecepciones form large-9 medium-8 columns content">
    <?= $this->Form->create($filaRecepcion) ?>
    <fieldset>
        <legend><?= __('Add Fila Recepcion') ?></legend>
        <?php
            echo $this->Form->control('recepcion_partido_id', ['options' => $recepcionPartidos]);
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
            echo $this->Form->control('color_id', ['options' => $colores]);
            echo $this->Form->control('bin_destino');
            echo $this->Form->control('kg');
            echo $this->Form->control('lote_id', ['options' => $lotes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
