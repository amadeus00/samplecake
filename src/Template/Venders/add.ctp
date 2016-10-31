<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Venders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venders form large-9 medium-8 columns content">
    <?= $this->Form->create($vender) ?>
    <fieldset>
        <legend><?= __('Add Vender') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('adress');
            echo $this->Form->input('tel');
            echo $this->Form->input('bank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
