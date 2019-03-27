<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmActor $filmActor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Film Actor'), ['action' => 'edit', $filmActor->actor_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Film Actor'), ['action' => 'delete', $filmActor->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmActor->actor_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Film Actor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film Actor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actor'), ['controller' => 'Actor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actor', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filmActor view large-9 medium-8 columns content">
    <h3><?= h($filmActor->actor_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Actor') ?></th>
            <td><?= $filmActor->has('actor') ? $this->Html->link($filmActor->actor->actor_id, ['controller' => 'Actor', 'action' => 'view', $filmActor->actor->actor_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Film') ?></th>
            <td><?= $filmActor->has('film') ? $this->Html->link($filmActor->film->title, ['controller' => 'Film', 'action' => 'view', $filmActor->film->film_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($filmActor->last_update) ?></td>
        </tr>
    </table>
</div>
