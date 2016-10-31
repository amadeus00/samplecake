<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Withdrawal'), ['action' => 'edit', $withdrawal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Withdrawal'), ['action' => 'delete', $withdrawal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $withdrawal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Withdrawals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Withdrawal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="withdrawals view large-9 medium-8 columns content">
    <h3><?= h($withdrawal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Buytrade') ?></th>
            <td><?= $withdrawal->has('buytrade') ? $this->Html->link($withdrawal->buytrade->id, ['controller' => 'Buytrades', 'action' => 'view', $withdrawal->buytrade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($withdrawal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buyvalue') ?></th>
            <td><?= $this->Number->format($withdrawal->buyvalue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($withdrawal->date) ?></td>
        </tr>
    </table>
</div>
