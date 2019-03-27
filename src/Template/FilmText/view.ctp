<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmText $filmText
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Film Text'), ['action' => 'edit', $filmText->film_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Film Text'), ['action' => 'delete', $filmText->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmText->film_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Film Text'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film Text'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filmText view large-9 medium-8 columns content">
    <h3><?= h($filmText->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($filmText->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Film Id') ?></th>
            <td><?= $this->Number->format($filmText->film_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($filmText->description)); ?>
    </div>
</div>
