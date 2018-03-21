<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControlDeCalidad $controlDeCalidad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Control De Calidad'), ['action' => 'edit', $controlDeCalidad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Control De Calidad'), ['action' => 'delete', $controlDeCalidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controlDeCalidad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Control De Calidad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control De Calidad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controlDeCalidad view large-9 medium-8 columns content">
    <h3><?= h($controlDeCalidad->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= $controlDeCalidad->has('lote') ? $this->Html->link($controlDeCalidad->lote->id, ['controller' => 'Lotes', 'action' => 'view', $controlDeCalidad->lote->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Muestra') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->peso_muestra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Llenado') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->llenado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color El') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->color_el) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color L') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->color_l) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color La') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->color_la) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color A') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->color_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color Y') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->color_y) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dc Pelon Adherido') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->dc_pelon_adherido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dc Manchas Graves') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->dc_manchas_graves) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dc Cascara Imperfecta') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->dc_cascara_imperfecta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dc Manchas Leves') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->dc_manchas_leves) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dc Casco Abierto') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->dc_casco_abierto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Di Hongo Activo Rancidez') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->di_hongo_activo_rancidez) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Di Dano De Insectos') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->di_dano_de_insectos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Di Reseca Grave Vana') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->di_reseca_grave_vana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Di Hongo Inactivo') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->di_hongo_inactivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Di Reseca Leve') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->di_reseca_leve) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calibre Mayor 36') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->calibre_mayor_36) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calibre 34 36') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->calibre_34_36) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calibre 32 34') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->calibre_32_34) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calibre 30 32') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->calibre_30_32) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calibre 28 30') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->calibre_28_30) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calibre Menor 28') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->calibre_menor_28) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Humedad') ?></th>
            <td><?= $this->Number->format($controlDeCalidad->humedad) ?></td>
        </tr>
    </table>
</div>
