<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmCategory $filmCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Film Category'), ['action' => 'edit', $filmCategory->film_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Film Category'), ['action' => 'delete', $filmCategory->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmCategory->film_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Film Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filmCategory view large-9 medium-8 columns content">
    <h3><?= h($filmCategory->film_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Film') ?></th>
            <td><?= $filmCategory->has('film') ? $this->Html->link($filmCategory->film->title, ['controller' => 'Film', 'action' => 'view', $filmCategory->film->film_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $filmCategory->has('category') ? $this->Html->link($filmCategory->category->name, ['controller' => 'Category', 'action' => 'view', $filmCategory->category->category_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($filmCategory->last_update) ?></td>
        </tr>
    </table>
</div>
