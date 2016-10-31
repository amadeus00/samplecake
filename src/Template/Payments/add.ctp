<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="payments form large-9 medium-8 columns content">
    <?= $this->Form->create($payment) ?>
    <fieldset>
        <legend><?= __('Add Payment') ?></legend>
        <?php
            echo $this->Form->input('saletrade_id');
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('salevalue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
