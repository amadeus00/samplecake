<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cars form large-9 medium-8 columns content">
    <?= $this->Form->create($car) ?>
    <fieldset>
        <legend><?= __('Add Car') ?></legend>
        <?php
            echo $this->Form->input('carname');
            echo $this->Form->input('manufacturer');
            echo $this->Form->input('storagedate', ['empty' => true]);
            echo $this->Form->input('retrievaldate', ['empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('buytrades.0.carvalue');
            echo $this->Form->input('buytrades.0.tax');
            echo $this->Form->input('buytrades.0.nontax');
            echo $this->Form->input('buytrades.0.recycle');
            echo $this->Form->input('buytrades.0.discount');
            echo $this->Form->input('buytrades.0.totalvalue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
