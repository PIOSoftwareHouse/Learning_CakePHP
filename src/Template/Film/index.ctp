<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film[]|\Cake\Collection\CollectionInterface $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Language'), ['controller' => 'Language', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Language', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actor'), ['controller' => 'Actor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="film index large-9 medium-8 columns content">
    <h3><?= __('Film') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('film_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('release_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('original_language_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('replacement_cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rating') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special_features') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($film as $film): ?>
            <tr>
                <td><?= $this->Number->format($film->film_id) ?></td>
                <td><?= h($film->title) ?></td>
                <td><?= h($film->release_year) ?></td>
                <td><?= $this->Number->format($film->language_id) ?></td>
                <td><?= $film->has('language') ? $this->Html->link($film->language->name, ['controller' => 'Language', 'action' => 'view', $film->language->language_id]) : '' ?></td>
                <td><?= $this->Number->format($film->rental_duration) ?></td>
                <td><?= $this->Number->format($film->rental_rate) ?></td>
                <td><?= $this->Number->format($film->length) ?></td>
                <td><?= $this->Number->format($film->replacement_cost) ?></td>
                <td><?= h($film->rating) ?></td>
                <td><?= h($film->special_features) ?></td>
                <td><?= h($film->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $film->film_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $film->film_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $film->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $film->film_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
