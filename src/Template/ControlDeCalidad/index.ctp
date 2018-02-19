<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControlDeCalidad[]|\Cake\Collection\CollectionInterface $controlDeCalidad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Control De Calidad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controlDeCalidad index large-9 medium-8 columns content">
    <h3><?= __('Control De Calidad') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso_muestra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('llenado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_el') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_l') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_la') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_y') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dc_pelon_adherido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dc_manchas_graves') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dc_cascara_imperfecta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dc_manchas_leves') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dc_casco_abierto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('di_hongo_activo_rancidez') ?></th>
                <th scope="col"><?= $this->Paginator->sort('di_dano_de_insectos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('di_reseca_grave_vana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('di_hongo_inactivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('di_reseca_leve') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calibre_mayor36') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calibre_34-36') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calibre_32-34') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calibre_30-32') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calibre_28-30') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calibre_menor28') ?></th>
                <th scope="col"><?= $this->Paginator->sort('humedad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controlDeCalidad as $controlDeCalidad): ?>
            <tr>
                <td><?= $this->Number->format($controlDeCalidad->id) ?></td>
                <td><?= $controlDeCalidad->has('lote') ? $this->Html->link($controlDeCalidad->lote->id, ['controller' => 'Lotes', 'action' => 'view', $controlDeCalidad->lote->id]) : '' ?></td>
                <td><?= $this->Number->format($controlDeCalidad->peso_muestra) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->llenado) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->color_el) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->color_l) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->color_la) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->color_a) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->color_y) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->dc_pelon_adherido) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->dc_manchas_graves) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->dc_cascara_imperfecta) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->dc_manchas_leves) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->dc_casco_abierto) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->di_hongo_activo_rancidez) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->di_dano_de_insectos) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->di_reseca_grave_vana) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->di_hongo_inactivo) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->di_reseca_leve) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->calibre_mayor36) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->calibre_34-36) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->calibre_32-34) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->calibre_30-32) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->calibre_28-30) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->calibre_menor28) ?></td>
                <td><?= $this->Number->format($controlDeCalidad->humedad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $controlDeCalidad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controlDeCalidad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controlDeCalidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controlDeCalidad->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
