<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\City $city
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->city_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete City'), ['action' => 'delete', $city->city_id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->city_id)]) ?> </li>
        <li><?= $this->Html->link(__('List City'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Country'), ['controller' => 'Country', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Country', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="city view large-9 medium-8 columns content">
    <h3><?= h($city->city_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($city->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $city->has('country') ? $this->Html->link($city->country->country_id, ['controller' => 'Country', 'action' => 'view', $city->country->country_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City Id') ?></th>
            <td><?= $this->Number->format($city->city_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($city->last_update) ?></td>
        </tr>
    </table>
</div>
