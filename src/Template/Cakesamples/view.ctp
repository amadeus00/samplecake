<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cakesample'), ['action' => 'edit', $cakesample->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cakesample'), ['action' => 'delete', $cakesample->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cakesample->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cakesamples'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cakesample'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cakesamples view large-9 medium-8 columns content">
    <h3><?= h($cakesample->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cakesample->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data1') ?></th>
            <td><?= $this->Number->format($cakesample->data1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data2') ?></th>
            <td><?= h($cakesample->data2) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Data3') ?></h4>
        <?= $this->Text->autoParagraph(h($cakesample->data3)); ?>
    </div>
</div>
