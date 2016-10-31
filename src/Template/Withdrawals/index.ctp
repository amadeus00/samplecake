<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Withdrawal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="withdrawals index large-9 medium-8 columns content">
    <h3><?= __('Withdrawals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buytrade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buyvalue') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($withdrawals as $withdrawal): ?>
            <tr>
                <td><?= $this->Number->format($withdrawal->id) ?></td>
                <td><?= $withdrawal->has('buytrade') ? $this->Html->link($withdrawal->buytrade->id, ['controller' => 'Buytrades', 'action' => 'view', $withdrawal->buytrade->id]) : '' ?></td>
                <td><?= h($withdrawal->date) ?></td>
                <td><?= $this->Number->format($withdrawal->buyvalue) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $withdrawal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $withdrawal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $withdrawal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $withdrawal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
