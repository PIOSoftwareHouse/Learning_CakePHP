<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Addres $addres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $addres->address_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addres->address_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'City', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="address form large-9 medium-8 columns content">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Edit Addres') ?></legend>
        <?php
            echo $this->Form->control('address');
            echo $this->Form->control('address2');
            echo $this->Form->control('district');
            echo $this->Form->control('city_id', ['options' => $city]);
            echo $this->Form->control('postal_code');
            echo $this->Form->control('phone');
            echo $this->Form->control('location');
            echo $this->Form->control('last_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
