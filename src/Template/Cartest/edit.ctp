<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cartest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cartest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cartest'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cartest form large-9 medium-8 columns content">
    <?= $this->Form->create($cartest) ?>
    <fieldset>
        <legend><?= __('Edit Cartest') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
