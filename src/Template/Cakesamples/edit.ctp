<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cakesample->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cakesample->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cakesamples'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cakesamples form large-9 medium-8 columns content">
    <?= $this->Form->create($cakesample) ?>
    <fieldset>
        <legend><?= __('Edit Cakesample') ?></legend>
        <?php
            echo $this->Form->input('data1');
            echo $this->Form->input('data2');
            echo $this->Form->input('data3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
