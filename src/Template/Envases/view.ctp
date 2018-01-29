<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Envase $envase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Envase'), ['action' => 'edit', $envase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Envase'), ['action' => 'delete', $envase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Envases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Envase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ensacados'), ['controller' => 'Ensacados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ensacado'), ['controller' => 'Ensacados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filas'), ['controller' => 'Filas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fila'), ['controller' => 'Filas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="envases view large-9 medium-8 columns content">
    <h3><?= h($envase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($envase->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ensacados') ?></h4>
        <?php if (!empty($envase->ensacados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Kg Basura') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($envase->ensacados as $ensacados): ?>
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
        <h4><?= __('Related Filas') ?></h4>
        <?php if (!empty($envase->filas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Despacho A Partido Id') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($envase->filas as $filas): ?>
            <tr>
                <td><?= h($filas->id) ?></td>
                <td><?= h($filas->despacho_a_partido_id) ?></td>
                <td><?= h($filas->envase_id) ?></td>
                <td><?= h($filas->cantidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Filas', 'action' => 'view', $filas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Filas', 'action' => 'edit', $filas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Filas', 'action' => 'delete', $filas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Lotes') ?></h4>
        <?php if (!empty($envase->lotes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Recepcion Id') ?></th>
                <th scope="col"><?= __('Variedad Id') ?></th>
                <th scope="col"><?= __('Envase Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Kg Neto') ?></th>
                <th scope="col"><?= __('Porcentaje Esperado De Partido') ?></th>
                <th scope="col"><?= __('Cerrado') ?></th>
                <th scope="col"><?= __('Filas Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($envase->lotes as $lotes): ?>
            <tr>
                <td><?= h($lotes->id) ?></td>
                <td><?= h($lotes->recepcion_id) ?></td>
                <td><?= h($lotes->variedad_id) ?></td>
                <td><?= h($lotes->envase_id) ?></td>
                <td><?= h($lotes->cantidad) ?></td>
                <td><?= h($lotes->kg_neto) ?></td>
                <td><?= h($lotes->porcentaje_esperado_de_partido) ?></td>
                <td><?= h($lotes->cerrado) ?></td>
                <td><?= h($lotes->filas_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lotes', 'action' => 'view', $lotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lotes', 'action' => 'edit', $lotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lotes', 'action' => 'delete', $lotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
