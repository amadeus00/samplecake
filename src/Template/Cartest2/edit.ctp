<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cartest2->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cartest2->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cartest2'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cartest2 form large-9 medium-8 columns content">
    <?= $this->Form->create($cartest2) ?>
    <fieldset>
        <legend><?= __('Edit Cartest2') ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
