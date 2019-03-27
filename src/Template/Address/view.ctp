<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Addres $addres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->address_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->address_id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->address_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'City', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="address view large-9 medium-8 columns content">
    <h3><?= h($addres->address_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($addres->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($addres->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= h($addres->district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $addres->has('city') ? $this->Html->link($addres->city->city_id, ['controller' => 'City', 'action' => 'view', $addres->city->city_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($addres->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($addres->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($addres->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Id') ?></th>
            <td><?= $this->Number->format($addres->address_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($addres->last_update) ?></td>
        </tr>
    </table>
</div>
