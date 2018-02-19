<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lote $lote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lote'), ['action' => 'edit', $lote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lote'), ['action' => 'delete', $lote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recepciones'), ['controller' => 'Recepciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recepcion'), ['controller' => 'Recepciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Variedades'), ['controller' => 'Variedades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Variedad'), ['controller' => 'Variedades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Envases'), ['controller' => 'Envases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Envase'), ['controller' => 'Envases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Decisiones'), ['controller' => 'Decisiones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisiones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Control De Calidad'), ['controller' => 'ControlDeCalidad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control De Calidad'), ['controller' => 'ControlDeCalidad', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fila Recepciones'), ['controller' => 'FilaRecepciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila Recepcion'), ['controller' => 'FilaRecepciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingreso A Packing'), ['controller' => 'IngresoAPacking', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lotes view large-9 medium-8 columns content">
    <h3><?= h($lote->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Recepcion') ?></th>
            <td><?= $lote->has('recepcion') ? $this->Html->link($lote->recepcion->id, ['controller' => 'Recepciones', 'action' => 'view', $lote->recepcion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variedad') ?></th>
            <td><?= $lote->has('variedad') ? $this->Html->link($lote->variedad->idvariedades, ['controller' => 'Variedades', 'action' => 'view', $lote->variedad->idvariedades]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Envase') ?></th>
            <td><?= $lote->has('envase') ? $this->Html->link($lote->envase->id, ['controller' => 'Envases', 'action' => 'view', $lote->envase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fila') ?></th>
            <td><?= $lote->has('fila') ? $this->Html->link($lote->fila->id, ['controller' => 'Filas', 'action' => 'view', $lote->fila->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decision') ?></th>
            <td><?= $lote->has('decision') ? $this->Html->link($lote->decision->id, ['controller' => 'Decisiones', 'action' => 'view', $lote->decision->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($lote->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kg Neto') ?></th>
            <td><?= $this->Number->format($lote->kg_neto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Porcentaje Esperado De Partido') ?></th>
            <td><?= $this->Number->format($lote->porcentaje_esperado_de_partido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cerrado') ?></th>
            <td><?= $this->Number->format($lote->cerrado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Control De Calidad') ?></h4>
        <?php if (!empty($lote->control_de_calidad)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Peso Muestra') ?></th>
                <th scope="col"><?= __('Llenado') ?></th>
                <th scope="col"><?= __('Color El') ?></th>
                <th scope="col"><?= __('Color L') ?></th>
                <th scope="col"><?= __('Color La') ?></th>
                <th scope="col"><?= __('Color A') ?></th>
                <th scope="col"><?= __('Color Y') ?></th>
                <th scope="col"><?= __('Dc Pelon Adherido') ?></th>
                <th scope="col"><?= __('Dc Manchas Graves') ?></th>
                <th scope="col"><?= __('Dc Cascara Imperfecta') ?></th>
                <th scope="col"><?= __('Dc Manchas Leves') ?></th>
                <th scope="col"><?= __('Dc Casco Abierto') ?></th>
                <th scope="col"><?= __('Di Hongo Activo Rancidez') ?></th>
                <th scope="col"><?= __('Di Dano De Insectos') ?></th>
                <th scope="col"><?= __('Di Reseca Grave Vana') ?></th>
                <th scope="col"><?= __('Di Hongo Inactivo') ?></th>
                <th scope="col"><?= __('Di Reseca Leve') ?></th>
                <th scope="col"><?= __('Calibre Mayor36') ?></th>
                <th scope="col"><?= __('Calibre 34-36') ?></th>
                <th scope="col"><?= __('Calibre 32-34') ?></th>
                <th scope="col"><?= __('Calibre 30-32') ?></th>
                <th scope="col"><?= __('Calibre 28-30') ?></th>
                <th scope="col"><?= __('Calibre Menor28') ?></th>
                <th scope="col"><?= __('Humedad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lote->control_de_calidad as $controlDeCalidad): ?>
            <tr>
                <td><?= h($controlDeCalidad->id) ?></td>
                <td><?= h($controlDeCalidad->lote_id) ?></td>
                <td><?= h($controlDeCalidad->peso_muestra) ?></td>
                <td><?= h($controlDeCalidad->llenado) ?></td>
                <td><?= h($controlDeCalidad->color_el) ?></td>
                <td><?= h($controlDeCalidad->color_l) ?></td>
                <td><?= h($controlDeCalidad->color_la) ?></td>
                <td><?= h($controlDeCalidad->color_a) ?></td>
                <td><?= h($controlDeCalidad->color_y) ?></td>
                <td><?= h($controlDeCalidad->dc_pelon_adherido) ?></td>
                <td><?= h($controlDeCalidad->dc_manchas_graves) ?></td>
                <td><?= h($controlDeCalidad->dc_cascara_imperfecta) ?></td>
                <td><?= h($controlDeCalidad->dc_manchas_leves) ?></td>
                <td><?= h($controlDeCalidad->dc_casco_abierto) ?></td>
                <td><?= h($controlDeCalidad->di_hongo_activo_rancidez) ?></td>
                <td><?= h($controlDeCalidad->di_dano_de_insectos) ?></td>
                <td><?= h($controlDeCalidad->di_reseca_grave_vana) ?></td>
                <td><?= h($controlDeCalidad->di_hongo_inactivo) ?></td>
                <td><?= h($controlDeCalidad->di_reseca_leve) ?></td>
                <td><?= h($controlDeCalidad->calibre_mayor36) ?></td>
                <td><?= h($controlDeCalidad->calibre_34-36) ?></td>
                <td><?= h($controlDeCalidad->calibre_32-34) ?></td>
                <td><?= h($controlDeCalidad->calibre_30-32) ?></td>
                <td><?= h($controlDeCalidad->calibre_28-30) ?></td>
                <td><?= h($controlDeCalidad->calibre_menor28) ?></td>
                <td><?= h($controlDeCalidad->humedad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ControlDeCalidad', 'action' => 'view', $controlDeCalidad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ControlDeCalidad', 'action' => 'edit', $controlDeCalidad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ControlDeCalidad', 'action' => 'delete', $controlDeCalidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controlDeCalidad->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ensacados') ?></h4>
        <?php if (!empty($lote->ensacados)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Kg Basura') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lote->ensacados as $ensacados): ?>
            <tr>
                <td><?= h($ensacados->id) ?></td>
                <td><?= h($ensacados->lote_id) ?></td>
                <td><?= h($ensacados->fecha) ?></td>
                <td><?= h($ensacados->envase_id) ?></td>
                <td><?= h($ensacados->cantidad) ?></td>
                <td><?= h($ensacados->kg_basura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ensacados', 'action' => 'view', $ensacados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ensacados', 'action' => 'edit', $ensacados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ensacados', 'action' => 'delete', $ensacados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ensacados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fila Recepciones') ?></h4>
        <?php if (!empty($lote->fila_recepciones)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Recepcion Partido Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Color Id') ?></th>
                <th scope="col"><?= __('Bin Destino') ?></th>
                <th scope="col"><?= __('Kg') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lote->fila_recepciones as $filaRecepciones): ?>
            <tr>
                <td><?= h($filaRecepciones->id) ?></td>
                <td><?= h($filaRecepciones->recepcion_partido_id) ?></td>
                <td><?= h($filaRecepciones->categoria_id) ?></td>
                <td><?= h($filaRecepciones->color_id) ?></td>
                <td><?= h($filaRecepciones->bin_destino) ?></td>
                <td><?= h($filaRecepciones->kg) ?></td>
                <td><?= h($filaRecepciones->lote_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FilaRecepciones', 'action' => 'view', $filaRecepciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FilaRecepciones', 'action' => 'edit', $filaRecepciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FilaRecepciones', 'action' => 'delete', $filaRecepciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filaRecepciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ingreso A Packing') ?></h4>
        <?php if (!empty($lote->ingreso_a_packing)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Packing Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Color Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Kg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lote->ingreso_a_packing as $ingresoAPacking): ?>
            <tr>
                <td><?= h($ingresoAPacking->id) ?></td>
                <td><?= h($ingresoAPacking->packing_id) ?></td>
                <td><?= h($ingresoAPacking->lote_id) ?></td>
                <td><?= h($ingresoAPacking->color_id) ?></td>
                <td><?= h($ingresoAPacking->categoria_id) ?></td>
                <td><?= h($ingresoAPacking->kg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'IngresoAPacking', 'action' => 'view', $ingresoAPacking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'IngresoAPacking', 'action' => 'edit', $ingresoAPacking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'IngresoAPacking', 'action' => 'delete', $ingresoAPacking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingresoAPacking->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
