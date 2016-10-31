<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $withdrawal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $withdrawal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Withdrawals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="withdrawals form large-9 medium-8 columns content">
    <?= $this->Form->create($withdrawal) ?>
    <fieldset>
        <legend><?= __('Edit Withdrawal') ?></legend>
        <?php
            echo $this->Form->input('buytrade_id', ['options' => $buytrades]);
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('buyvalue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
