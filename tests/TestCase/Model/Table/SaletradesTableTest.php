<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaletradesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaletradesTable Test Case
 */
class SaletradesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SaletradesTable
     */
    public $Saletrades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Saletrades') ? [] : ['className' => 'App\Model\Table\SaletradesTable'];
        $this->Saletrades = TableRegistry::get('Saletrades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Saletrades);

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
