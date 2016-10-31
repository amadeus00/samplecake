<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cartest'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cartest form large-9 medium-8 columns content">
    <?= $this->Form->create($cartest) ?>
    <fieldset>
        <legend><?= __('Add Cartest') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
