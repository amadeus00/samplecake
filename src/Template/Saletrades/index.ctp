<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Saletrade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="saletrades index large-9 medium-8 columns content">
    <h3><?= __('Saletrades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
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
            <?php foreach ($saletrades as $saletrade): ?>
            <tr>
                <td><?= $this->Number->format($saletrade->id) ?></td>
                <td><?= $this->Number->format($saletrade->car_id) ?></td>
                <td><?= $this->Number->format($saletrade->customer_id) ?></td>
                <td><?= $this->Number->format($saletrade->carvalue) ?></td>
                <td><?= $this->Number->format($saletrade->tax) ?></td>
                <td><?= $this->Number->format($saletrade->nontax) ?></td>
                <td><?= $this->Number->format($saletrade->recycle) ?></td>
                <td><?= $this->Number->format($saletrade->discount) ?></td>
                <td><?= $this->Number->format($saletrade->totalvalue) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $saletrade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saletrade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saletrade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saletrade->id)]) ?>
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
