<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BuytradesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BuytradesTable Test Case
 */
class BuytradesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BuytradesTable
     */
    public $Buytrades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.buytrades',
        'app.cars',
        'app.withdrawals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Buytrades') ? [] : ['className' => 'App\Model\Table\BuytradesTable'];
        $this->Buytrades = TableRegistry::get('Buytrades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Buytrades);

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
