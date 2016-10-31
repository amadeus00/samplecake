<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cakesamples'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cakesamples form large-9 medium-8 columns content">
    <?= $this->Form->create($cakesample) ?>
    <fieldset>
        <legend><?= __('Add Cakesample') ?></legend>
        <?php
            echo $this->Form->input('data1');
            echo $this->Form->input('data2');
            echo $this->Form->input('data3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
