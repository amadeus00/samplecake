<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WithdrawalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WithdrawalsTable Test Case
 */
class WithdrawalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WithdrawalsTable
     */
    public $Withdrawals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.withdrawals',
        'app.buytrades',
        'app.cars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Withdrawals') ? [] : ['className' => 'App\Model\Table\WithdrawalsTable'];
        $this->Withdrawals = TableRegistry::get('Withdrawals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Withdrawals);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
