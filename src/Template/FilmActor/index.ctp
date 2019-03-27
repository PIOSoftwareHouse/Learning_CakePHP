<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmActor[]|\Cake\Collection\CollectionInterface $filmActor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Film Actor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actor'), ['controller' => 'Actor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Film'), ['controller' => 'Film', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Film', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmActor index large-9 medium-8 columns content">
    <h3><?= __('Film Actor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('actor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('film_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmActor as $filmActor): ?>
            <tr>
                <td><?= $filmActor->has('actor') ? $this->Html->link($filmActor->actor->actor_id, ['controller' => 'Actor', 'action' => 'view', $filmActor->actor->actor_id]) : '' ?></td>
                <td><?= $filmActor->has('film') ? $this->Html->link($filmActor->film->title, ['controller' => 'Film', 'action' => 'view', $filmActor->film->film_id]) : '' ?></td>
                <td><?= h($filmActor->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filmActor->actor_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filmActor->actor_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filmActor->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmActor->actor_id)]) ?>
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
