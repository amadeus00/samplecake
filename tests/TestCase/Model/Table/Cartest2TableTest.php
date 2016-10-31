<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Cartest2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Cartest2Table Test Case
 */
class Cartest2TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Cartest2Table
     */
    public $Cartest2;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cartest2'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cartest2') ? [] : ['className' => 'App\Model\Table\Cartest2Table'];
        $this->Cartest2 = TableRegistry::get('Cartest2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cartest2);

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
