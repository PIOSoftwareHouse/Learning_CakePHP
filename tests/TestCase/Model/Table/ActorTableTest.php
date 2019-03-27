<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorTable Test Case
 */
class ActorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorTable
     */
    public $Actor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Actor',
        'app.Film'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Actor') ? [] : ['className' => ActorTable::class];
        $this->Actor = TableRegistry::getTableLocator()->get('Actor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actor);

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
