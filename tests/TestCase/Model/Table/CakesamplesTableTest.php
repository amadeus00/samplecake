<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CakesamplesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CakesamplesTable Test Case
 */
class CakesamplesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CakesamplesTable
     */
    public $Cakesamples;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cakesamples'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cakesamples') ? [] : ['className' => 'App\Model\Table\CakesamplesTable'];
        $this->Cakesamples = TableRegistry::get('Cakesamples', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cakesamples);

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
