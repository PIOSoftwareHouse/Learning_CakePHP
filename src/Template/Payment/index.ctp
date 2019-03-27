<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment[]|\Cake\Collection\CollectionInterface $payment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rental'), ['controller' => 'Rental', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rental'), ['controller' => 'Rental', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payment index large-9 medium-8 columns content">
    <h3><?= __('Payment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('payment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payment as $payment): ?>
            <tr>
                <td><?= $this->Number->format($payment->payment_id) ?></td>
                <td><?= $payment->has('customer') ? $this->Html->link($payment->customer->customer_id, ['controller' => 'Customer', 'action' => 'view', $payment->customer->customer_id]) : '' ?></td>
                <td><?= $payment->has('staff') ? $this->Html->link($payment->staff->staff_id, ['controller' => 'Staff', 'action' => 'view', $payment->staff->staff_id]) : '' ?></td>
                <td><?= $payment->has('rental') ? $this->Html->link($payment->rental->rental_id, ['controller' => 'Rental', 'action' => 'view', $payment->rental->rental_id]) : '' ?></td>
                <td><?= $this->Number->format($payment->amount) ?></td>
                <td><?= h($payment->payment_date) ?></td>
                <td><?= h($payment->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payment->payment_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->payment_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->payment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->payment_id)]) ?>
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
