<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental[]|\Cake\Collection\CollectionInterface $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rental'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rental index large-9 medium-8 columns content">
    <h3><?= __('Rental') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('rental_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inventory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('return_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rental as $rental): ?>
            <tr>
                <td><?= $this->Number->format($rental->rental_id) ?></td>
                <td><?= h($rental->rental_date) ?></td>
                <td><?= $rental->has('inventory') ? $this->Html->link($rental->inventory->inventory_id, ['controller' => 'Inventory', 'action' => 'view', $rental->inventory->inventory_id]) : '' ?></td>
                <td><?= $rental->has('customer') ? $this->Html->link($rental->customer->customer_id, ['controller' => 'Customer', 'action' => 'view', $rental->customer->customer_id]) : '' ?></td>
                <td><?= h($rental->return_date) ?></td>
                <td><?= $rental->has('staff') ? $this->Html->link($rental->staff->staff_id, ['controller' => 'Staff', 'action' => 'view', $rental->staff->staff_id]) : '' ?></td>
                <td><?= h($rental->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rental->rental_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rental->rental_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rental->rental_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rental->rental_id)]) ?>
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
