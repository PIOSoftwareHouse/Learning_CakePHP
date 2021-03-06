<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->category_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->category_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Id') ?></th>
            <td><?= $this->Number->format($category->category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($category->last_update) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Film') ?></h4>
        <?php if (!empty($category->film)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Film Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Release Year') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Original Language Id') ?></th>
                <th scope="col"><?= __('Rental Duration') ?></th>
                <th scope="col"><?= __('Rental Rate') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Replacement Cost') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Special Features') ?></th>
                <th scope="col"><?= __('Last Update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->film as $film): ?>
            <tr>
                <td><?= h($film->film_id) ?></td>
                <td><?= h($film->title) ?></td>
                <td><?= h($film->description) ?></td>
                <td><?= h($film->release_year) ?></td>
                <td><?= h($film->language_id) ?></td>
                <td><?= h($film->original_language_id) ?></td>
                <td><?= h($film->rental_duration) ?></td>
                <td><?= h($film->rental_rate) ?></td>
                <td><?= h($film->length) ?></td>
                <td><?= h($film->replacement_cost) ?></td>
                <td><?= h($film->rating) ?></td>
                <td><?= h($film->special_features) ?></td>
                <td><?= h($film->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Film', 'action' => 'view', $film->film_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Film', 'action' => 'edit', $film->film_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Film', 'action' => 'delete', $film->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $film->film_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
