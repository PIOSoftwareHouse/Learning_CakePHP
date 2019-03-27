<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory[]|\Cake\Collection\CollectionInterface $inventory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Store'), ['controller' => 'Store', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Store', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventory index large-9 medium-8 columns content">
    <h3><?= __('Inventory') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('inventory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('film_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('store_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventory as $inventory): ?>
            <tr>
                <td><?= $this->Number->format($inventory->inventory_id) ?></td>
                <td><?= $inventory->has('film') ? $this->Html->link($inventory->film->title, ['controller' => 'Film', 'action' => 'view', $inventory->film->film_id]) : '' ?></td>
                <td><?= $inventory->has('store') ? $this->Html->link($inventory->store->store_id, ['controller' => 'Store', 'action' => 'view', $inventory->store->store_id]) : '' ?></td>
                <td><?= h($inventory->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inventory->inventory_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->inventory_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventory->inventory_id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->inventory_id)]) ?>
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
