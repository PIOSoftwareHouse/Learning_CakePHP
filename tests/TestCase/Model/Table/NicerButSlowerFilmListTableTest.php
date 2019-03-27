<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NicerButSlowerFilmListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NicerButSlowerFilmListTable Test Case
 */
class NicerButSlowerFilmListTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NicerButSlowerFilmListTable
     */
    public $NicerButSlowerFilmList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.NicerButSlowerFilmList'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NicerButSlowerFilmList') ? [] : ['className' => NicerButSlowerFilmListTable::class];
        $this->NicerButSlowerFilmList = TableRegistry::getTableLocator()->get('NicerButSlowerFilmList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NicerButSlowerFilmList);

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
