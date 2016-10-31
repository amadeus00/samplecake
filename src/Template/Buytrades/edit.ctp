<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $buytrade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $buytrade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Withdrawals'), ['controller' => 'Withdrawals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Withdrawal'), ['controller' => 'Withdrawals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buytrades form large-9 medium-8 columns content">
    <?= $this->Form->create($buytrade) ?>
    <fieldset>
        <legend><?= __('Edit Buytrade') ?></legend>
        <?php
            echo $this->Form->input('car_id', ['options' => $cars]);
            echo $this->Form->input('carvalue');
            echo $this->Form->input('tax');
            echo $this->Form->input('nontax');
            echo $this->Form->input('recycle');
            echo $this->Form->input('discount');
            echo $this->Form->input('totalvalue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
