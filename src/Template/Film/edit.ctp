<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $film->film_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $film->film_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Film'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Language'), ['controller' => 'Language', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Language', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actor'), ['controller' => 'Actor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="film form large-9 medium-8 columns content">
    <?= $this->Form->create($film) ?>
    <fieldset>
        <legend><?= __('Edit Film') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('release_year');
            echo $this->Form->control('language_id');
            echo $this->Form->control('original_language_id', ['options' => $language, 'empty' => true]);
            echo $this->Form->control('rental_duration');
            echo $this->Form->control('rental_rate');
            echo $this->Form->control('length');
            echo $this->Form->control('replacement_cost');
            echo $this->Form->control('rating');
            echo $this->Form->control('special_features');
            echo $this->Form->control('last_update');
            echo $this->Form->control('actor._ids', ['options' => $actor]);
            echo $this->Form->control('category._ids', ['options' => $category]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
