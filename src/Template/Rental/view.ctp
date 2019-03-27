<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rental'), ['action' => 'edit', $rental->rental_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rental'), ['action' => 'delete', $rental->rental_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rental->rental_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rental view large-9 medium-8 columns content">
    <h3><?= h($rental->rental_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Inventory') ?></th>
            <td><?= $rental->has('inventory') ? $this->Html->link($rental->inventory->inventory_id, ['controller' => 'Inventory', 'action' => 'view', $rental->inventory->inventory_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $rental->has('customer') ? $this->Html->link($rental->customer->customer_id, ['controller' => 'Customer', 'action' => 'view', $rental->customer->customer_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $rental->has('staff') ? $this->Html->link($rental->staff->staff_id, ['controller' => 'Staff', 'action' => 'view', $rental->staff->staff_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Id') ?></th>
            <td><?= $this->Number->format($rental->rental_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Date') ?></th>
            <td><?= h($rental->rental_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Date') ?></th>
            <td><?= h($rental->return_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($rental->last_update) ?></td>
        </tr>
    </table>
</div>
