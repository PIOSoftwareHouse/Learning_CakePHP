<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RentalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RentalTable Test Case
 */
class RentalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RentalTable
     */
    public $Rental;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Rental',
        'app.Inventory',
        'app.Customer',
        'app.Staff'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Rental') ? [] : ['className' => RentalTable::class];
        $this->Rental = TableRegistry::getTableLocator()->get('Rental', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rental);

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
