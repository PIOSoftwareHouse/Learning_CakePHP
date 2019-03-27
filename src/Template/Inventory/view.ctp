<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->inventory_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->inventory_id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->inventory_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Store'), ['controller' => 'Store', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Store', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inventory view large-9 medium-8 columns content">
    <h3><?= h($inventory->inventory_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Film') ?></th>
            <td><?= $inventory->has('film') ? $this->Html->link($inventory->film->title, ['controller' => 'Film', 'action' => 'view', $inventory->film->film_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Store') ?></th>
            <td><?= $inventory->has('store') ? $this->Html->link($inventory->store->store_id, ['controller' => 'Store', 'action' => 'view', $inventory->store->store_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inventory Id') ?></th>
            <td><?= $this->Number->format($inventory->inventory_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($inventory->last_update) ?></td>
        </tr>
    </table>
</div>
