<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $store
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="store index large-9 medium-8 columns content">
    <h3><?= __('Store') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('store_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manager_staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($store as $store): ?>
            <tr>
                <td><?= $this->Number->format($store->store_id) ?></td>
                <td><?= $store->has('staff') ? $this->Html->link($store->staff->staff_id, ['controller' => 'Staff', 'action' => 'view', $store->staff->staff_id]) : '' ?></td>
                <td><?= $store->has('addres') ? $this->Html->link($store->addres->address_id, ['controller' => 'Address', 'action' => 'view', $store->addres->address_id]) : '' ?></td>
                <td><?= h($store->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $store->store_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $store->store_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->store_id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->store_id)]) ?>
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
