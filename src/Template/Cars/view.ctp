<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cars view large-9 medium-8 columns content">
    <h3><?= h($car->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('車名') ?></th>
            <td><?= h($car->carname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('メーカー') ?></th>
            <td><?= h($car->manufacturer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($car->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($car->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('入庫日') ?></th>
            <td><?php if(!empty($car->storagedate)): ?><?= date('Y年m月d日', strtotime(h($car->storagedate))) ?><?php endif; ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('出庫日') ?></th>
            <td><?php if(!empty($car->retrivaldate)): ?><?= date('Y年m月d日', strtotime(h($car->retrievaldate))) ?><?php endif; ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Buytrades') ?></h4>
        <?php if (!empty($car->buytrades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Car Id') ?></th>
                <th scope="col"><?= __('Carvalue') ?></th>
                <th scope="col"><?= __('Tax') ?></th>
                <th scope="col"><?= __('Nontax') ?></th>
                <th scope="col"><?= __('Recycle') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Totalvalue') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($car->buytrades as $buytrades): ?>
            <tr>
                <td><?= h($buytrades->id) ?></td>
                <td><?= h($buytrades->car_id) ?></td>
                <td><?= h($buytrades->carvalue) ?></td>
                <td><?= h($buytrades->tax) ?></td>
                <td><?= h($buytrades->nontax) ?></td>
                <td><?= h($buytrades->recycle) ?></td>
                <td><?= h($buytrades->discount) ?></td>
                <td><?= h($buytrades->totalvalue) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Buytrades', 'action' => 'view', $buytrades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Buytrades', 'action' => 'edit', $buytrades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Buytrades', 'action' => 'delete', $buytrades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buytrades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
