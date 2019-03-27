<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmCategory $filmCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $filmCategory->film_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $filmCategory->film_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Film Category'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmCategory form large-9 medium-8 columns content">
    <?= $this->Form->create($filmCategory) ?>
    <fieldset>
        <legend><?= __('Edit Film Category') ?></legend>
        <?php
            echo $this->Form->control('last_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
