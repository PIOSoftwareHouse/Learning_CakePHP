<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaffListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaffListTable Test Case
 */
class StaffListTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StaffListTable
     */
    public $StaffList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StaffList'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StaffList') ? [] : ['className' => StaffListTable::class];
        $this->StaffList = TableRegistry::getTableLocator()->get('StaffList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StaffList);

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
