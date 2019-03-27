<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmText $filmText
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Film Text'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="filmText form large-9 medium-8 columns content">
    <?= $this->Form->create($filmText) ?>
    <fieldset>
        <legend><?= __('Add Film Text') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
