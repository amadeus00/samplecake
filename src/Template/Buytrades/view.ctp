<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Buytrade'), ['action' => 'edit', $buytrade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Buytrade'), ['action' => 'delete', $buytrade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buytrade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buytrades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buytrade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Withdrawals'), ['controller' => 'Withdrawals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Withdrawal'), ['controller' => 'Withdrawals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buytrades view large-9 medium-8 columns content">
    <h3><?= h($buytrade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Car') ?></th>
            <td><?= $buytrade->has('car') ? $this->Html->link($buytrade->car->id, ['controller' => 'Cars', 'action' => 'view', $buytrade->car->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($buytrade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carvalue') ?></th>
            <td><?= $this->Number->format($buytrade->carvalue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= $this->Number->format($buytrade->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nontax') ?></th>
            <td><?= $this->Number->format($buytrade->nontax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recycle') ?></th>
            <td><?= $this->Number->format($buytrade->recycle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($buytrade->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Totalvalue') ?></th>
            <td><?= $this->Number->format($buytrade->totalvalue) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Withdrawals') ?></h4>
        <?php if (!empty($buytrade->withdrawals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Buytrade Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Buyvalue') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($buytrade->withdrawals as $withdrawals): ?>
            <tr>
                <td><?= h($withdrawals->id) ?></td>
                <td><?= h($withdrawals->buytrade_id) ?></td>
                <td><?= h($withdrawals->date) ?></td>
                <td><?= h($withdrawals->buyvalue) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Withdrawals', 'action' => 'view', $withdrawals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Withdrawals', 'action' => 'edit', $withdrawals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Withdrawals', 'action' => 'delete', $withdrawals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $withdrawals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
