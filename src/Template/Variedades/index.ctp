<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Variedad[]|\Cake\Collection\CollectionInterface $variedades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Variedad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="variedades index large-9 medium-8 columns content">
    <h3><?= __('Variedades') ?></h3>
    <table class="table " cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idvariedades') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variedades as $variedad): ?>
            <tr>
                <td><?= $this->Number->format($variedad->idvariedades) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $variedad->idvariedades]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $variedad->idvariedades]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $variedad->idvariedades], ['confirm' => __('Are you sure you want to delete # {0}?', $variedad->idvariedades)]) ?>
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
