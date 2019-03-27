<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmText[]|\Cake\Collection\CollectionInterface $filmText
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Film Text'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmText index large-9 medium-8 columns content">
    <h3><?= __('Film Text') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('film_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmText as $filmText): ?>
            <tr>
                <td><?= $this->Number->format($filmText->film_id) ?></td>
                <td><?= h($filmText->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filmText->film_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filmText->film_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filmText->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmText->film_id)]) ?>
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
