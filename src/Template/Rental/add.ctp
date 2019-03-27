<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['controller' => 'Inventory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staff'), ['controller' => 'Staff', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staff', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rental form large-9 medium-8 columns content">
    <?= $this->Form->create($rental) ?>
    <fieldset>
        <legend><?= __('Add Rental') ?></legend>
        <?php
            echo $this->Form->control('rental_date');
            echo $this->Form->control('inventory_id', ['options' => $inventory]);
            echo $this->Form->control('customer_id', ['options' => $customer]);
            echo $this->Form->control('return_date', ['empty' => true]);
            echo $this->Form->control('staff_id', ['options' => $staff]);
            echo $this->Form->control('last_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
