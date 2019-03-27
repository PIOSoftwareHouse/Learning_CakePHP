<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesByStoreTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesByStoreTable Test Case
 */
class SalesByStoreTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesByStoreTable
     */
    public $SalesByStore;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SalesByStore'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SalesByStore') ? [] : ['className' => SalesByStoreTable::class];
        $this->SalesByStore = TableRegistry::getTableLocator()->get('SalesByStore', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalesByStore);

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
