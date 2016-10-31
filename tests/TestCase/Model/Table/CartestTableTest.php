<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartestTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartestTable Test Case
 */
class CartestTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CartestTable
     */
    public $Cartest;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cartest'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cartest') ? [] : ['className' => 'App\Model\Table\CartestTable'];
        $this->Cartest = TableRegistry::get('Cartest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cartest);

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
