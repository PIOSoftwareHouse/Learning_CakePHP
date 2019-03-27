<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerListTable Test Case
 */
class CustomerListTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerListTable
     */
    public $CustomerList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CustomerList'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CustomerList') ? [] : ['className' => CustomerListTable::class];
        $this->CustomerList = TableRegistry::getTableLocator()->get('CustomerList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerList);

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
