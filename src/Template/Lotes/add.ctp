<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lote $lote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recepciones'), ['controller' => 'Recepciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recepcion'), ['controller' => 'Recepciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Variedades'), ['controller' => 'Variedades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Variedad'), ['controller' => 'Variedades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decisiones'), ['controller' => 'Decisiones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisiones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Control De Calidad'), ['controller' => 'ControlDeCalidad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Control De Calidad'), ['controller' => 'ControlDeCalidad', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fila Recepciones'), ['controller' => 'FilaRecepciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fila Recepcion'), ['controller' => 'FilaRecepciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lotes form large-9 medium-8 columns content">
    <?= $this->Form->create($lote) ?>
    <fieldset>
        <legend><?= __('Add Lote') ?></legend>
        <?php
            echo $this->Form->control('recepcion_id', ['options' => $recepciones]);
            echo $this->Form->control('variedad_id', ['options' => $variedades]);
            echo $this->Form->control('envase_id', ['options' => $envases]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('kg_neto');
            echo $this->Form->control('porcentaje_esperado_de_partido');
            echo $this->Form->control('cerrado');
            echo $this->Form->control('filas_id', ['options' => $filas]);
            echo $this->Form->control('decision_id', ['options' => $decisiones]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
