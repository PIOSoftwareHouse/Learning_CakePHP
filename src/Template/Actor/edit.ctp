<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actor->actor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actor->actor_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actor form large-9 medium-8 columns content">
    <?= $this->Form->create($actor) ?>
    <fieldset>
        <legend><?= __('Edit Actor') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('last_update');
            echo $this->Form->control('film._ids', ['options' => $film]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
