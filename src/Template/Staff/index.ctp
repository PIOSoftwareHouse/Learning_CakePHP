<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staff
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Store'), ['controller' => 'Store', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Store', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="staff index large-9 medium-8 columns content">
    <h3><?= __('Staff') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('store_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staff as $staff): ?>
            <tr>
                <td><?= $this->Number->format($staff->staff_id) ?></td>
                <td><?= h($staff->first_name) ?></td>
                <td><?= h($staff->last_name) ?></td>
                <td><?= $staff->has('addres') ? $this->Html->link($staff->addres->address_id, ['controller' => 'Address', 'action' => 'view', $staff->addres->address_id]) : '' ?></td>
                <td><?= h($staff->email) ?></td>
                <td><?= $staff->has('store') ? $this->Html->link($staff->store->store_id, ['controller' => 'Store', 'action' => 'view', $staff->store->store_id]) : '' ?></td>
                <td><?= h($staff->active) ?></td>
                <td><?= h($staff->username) ?></td>
                <td><?= h($staff->password) ?></td>
                <td><?= h($staff->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $staff->staff_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->staff_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->staff_id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->staff_id)]) ?>
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
