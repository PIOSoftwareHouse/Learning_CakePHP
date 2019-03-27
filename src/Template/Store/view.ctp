<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->store_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->store_id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->store_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Store'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="store view large-9 medium-8 columns content">
    <h3><?= h($store->store_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $store->has('staff') ? $this->Html->link($store->staff->staff_id, ['controller' => 'Staff', 'action' => 'view', $store->staff->staff_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addres') ?></th>
            <td><?= $store->has('addres') ? $this->Html->link($store->addres->address_id, ['controller' => 'Address', 'action' => 'view', $store->addres->address_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Store Id') ?></th>
            <td><?= $this->Number->format($store->store_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($store->last_update) ?></td>
        </tr>
    </table>
</div>
