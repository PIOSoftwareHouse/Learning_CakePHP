<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmActor $filmActor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Film Actor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actor'), ['controller' => 'Actor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmActor form large-9 medium-8 columns content">
    <?= $this->Form->create($filmActor) ?>
    <fieldset>
        <legend><?= __('Add Film Actor') ?></legend>
        <?php
            echo $this->Form->control('last_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
