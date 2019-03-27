<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmCategory[]|\Cake\Collection\CollectionInterface $filmCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Film Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmCategory index large-9 medium-8 columns content">
    <h3><?= __('Film Category') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('film_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmCategory as $filmCategory): ?>
            <tr>
                <td><?= $filmCategory->has('film') ? $this->Html->link($filmCategory->film->title, ['controller' => 'Film', 'action' => 'view', $filmCategory->film->film_id]) : '' ?></td>
                <td><?= $filmCategory->has('category') ? $this->Html->link($filmCategory->category->name, ['controller' => 'Category', 'action' => 'view', $filmCategory->category->category_id]) : '' ?></td>
                <td><?= h($filmCategory->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filmCategory->film_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filmCategory->film_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filmCategory->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmCategory->film_id)]) ?>
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
