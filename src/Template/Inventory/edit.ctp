<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventory->inventory_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->inventory_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Store'), ['controller' => 'Store', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Store', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventory form large-9 medium-8 columns content">
    <?= $this->Form->create($inventory) ?>
    <fieldset>
        <legend><?= __('Edit Inventory') ?></legend>
        <?php
            echo $this->Form->control('film_id', ['options' => $film]);
            echo $this->Form->control('store_id', ['options' => $store]);
            echo $this->Form->control('last_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
