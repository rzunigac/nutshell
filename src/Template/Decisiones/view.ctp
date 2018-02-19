<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Decision $decision
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Decision'), ['action' => 'edit', $decision->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Decision'), ['action' => 'delete', $decision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decision->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Decisiones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="decisiones view large-9 medium-8 columns content">
    <h3><?= h($decision->id) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($decision->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($decision->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lotes') ?></h4>
        <?php if (!empty($decision->lotes)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
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
                <th scope="col"><?= __('Decision Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($decision->lotes as $lotes): ?>
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
                <td><?= h($lotes->decision_id) ?></td>
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
