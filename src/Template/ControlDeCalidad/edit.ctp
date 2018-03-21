<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControlDeCalidad $controlDeCalidad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $controlDeCalidad->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $controlDeCalidad->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Control De Calidad'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controlDeCalidad form large-9 medium-8 columns content">
    <?= $this->Form->create($controlDeCalidad) ?>
    <fieldset>
        <legend><?= __('Edit Control De Calidad') ?></legend>
        <?php
            echo $this->Form->control('lote_id', ['options' => $lotes]);
            echo $this->Form->control('peso_muestra');
            echo $this->Form->control('llenado');
            echo $this->Form->control('color_el');
            echo $this->Form->control('color_l');
            echo $this->Form->control('color_la');
            echo $this->Form->control('color_a');
            echo $this->Form->control('color_y');
            echo $this->Form->control('dc_pelon_adherido');
            echo $this->Form->control('dc_manchas_graves');
            echo $this->Form->control('dc_cascara_imperfecta');
            echo $this->Form->control('dc_manchas_leves');
            echo $this->Form->control('dc_casco_abierto');
            echo $this->Form->control('di_hongo_activo_rancidez');
            echo $this->Form->control('di_dano_de_insectos');
            echo $this->Form->control('di_reseca_grave_vana');
            echo $this->Form->control('di_hongo_inactivo');
            echo $this->Form->control('di_reseca_leve');
            echo $this->Form->control('calibre_mayor_36');
            echo $this->Form->control('calibre_34_36');
            echo $this->Form->control('calibre_32_34');
            echo $this->Form->control('calibre_30_32');
            echo $this->Form->control('calibre_28_30');
            echo $this->Form->control('calibre_menor_28');
            echo $this->Form->control('humedad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
