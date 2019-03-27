<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->payment_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->payment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->payment_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rental'), ['controller' => 'Rental', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental'), ['controller' => 'Rental', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payment view large-9 medium-8 columns content">
    <h3><?= h($payment->payment_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $payment->has('customer') ? $this->Html->link($payment->customer->customer_id, ['controller' => 'Customer', 'action' => 'view', $payment->customer->customer_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $payment->has('staff') ? $this->Html->link($payment->staff->staff_id, ['controller' => 'Staff', 'action' => 'view', $payment->staff->staff_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental') ?></th>
            <td><?= $payment->has('rental') ? $this->Html->link($payment->rental->rental_id, ['controller' => 'Rental', 'action' => 'view', $payment->rental->rental_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Id') ?></th>
            <td><?= $this->Number->format($payment->payment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($payment->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Date') ?></th>
            <td><?= h($payment->payment_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($payment->last_update) ?></td>
        </tr>
    </table>
</div>
