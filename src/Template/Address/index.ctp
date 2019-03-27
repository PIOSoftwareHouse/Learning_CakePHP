<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Addres[]|\Cake\Collection\CollectionInterface $address
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'City', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="address index large-9 medium-8 columns content">
    <h3><?= __('Address') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postal_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($address as $addres): ?>
            <tr>
                <td><?= $this->Number->format($addres->address_id) ?></td>
                <td><?= h($addres->address) ?></td>
                <td><?= h($addres->address2) ?></td>
                <td><?= h($addres->district) ?></td>
                <td><?= $addres->has('city') ? $this->Html->link($addres->city->city_id, ['controller' => 'City', 'action' => 'view', $addres->city->city_id]) : '' ?></td>
                <td><?= h($addres->postal_code) ?></td>
                <td><?= h($addres->phone) ?></td>
                <td><?= h($addres->location) ?></td>
                <td><?= h($addres->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addres->address_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->address_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->address_id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->address_id)]) ?>
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
