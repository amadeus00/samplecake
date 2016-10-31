<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Saletrade'), ['action' => 'edit', $saletrade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Saletrade'), ['action' => 'delete', $saletrade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saletrade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Saletrades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Saletrade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="saletrades view large-9 medium-8 columns content">
    <h3><?= h($saletrade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($saletrade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Id') ?></th>
            <td><?= $this->Number->format($saletrade->car_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($saletrade->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carvalue') ?></th>
            <td><?= $this->Number->format($saletrade->carvalue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= $this->Number->format($saletrade->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nontax') ?></th>
            <td><?= $this->Number->format($saletrade->nontax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recycle') ?></th>
            <td><?= $this->Number->format($saletrade->recycle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($saletrade->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Totalvalue') ?></th>
            <td><?= $this->Number->format($saletrade->totalvalue) ?></td>
        </tr>
    </table>
</div>
