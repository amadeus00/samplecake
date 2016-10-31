<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Withdrawals'), ['controller' => 'Withdrawals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Withdrawal'), ['controller' => 'Withdrawals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buytrades index large-9 medium-8 columns content">
    <h3><?= __('Buytrades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carvalue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nontax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recycle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalvalue') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buytrades as $buytrade): ?>
            <tr>
                <td><?= $this->Number->format($buytrade->id) ?></td>
                <td><?= $buytrade->has('car') ? $this->Html->link($buytrade->car->id, ['controller' => 'Cars', 'action' => 'view', $buytrade->car->id]) : '' ?></td>
                <td><?= $this->Number->format($buytrade->carvalue) ?></td>
                <td><?= $this->Number->format($buytrade->tax) ?></td>
                <td><?= $this->Number->format($buytrade->nontax) ?></td>
                <td><?= $this->Number->format($buytrade->recycle) ?></td>
                <td><?= $this->Number->format($buytrade->discount) ?></td>
                <td><?= $this->Number->format($buytrade->totalvalue) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $buytrade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $buytrade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $buytrade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buytrade->id)]) ?>
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
