<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorInfoTable Test Case
 */
class ActorInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorInfoTable
     */
    public $ActorInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ActorInfo',
        'app.Actors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ActorInfo') ? [] : ['className' => ActorInfoTable::class];
        $this->ActorInfo = TableRegistry::getTableLocator()->get('ActorInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActorInfo);

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
