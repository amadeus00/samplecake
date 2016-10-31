<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendersTable Test Case
 */
class VendersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VendersTable
     */
    public $Venders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.venders',
        'app.buytrades',
        'app.cars',
        'app.saletrades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Venders') ? [] : ['className' => 'App\Model\Table\VendersTable'];
        $this->Venders = TableRegistry::get('Venders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Venders);

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
}
