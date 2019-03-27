<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmActorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmActorTable Test Case
 */
class FilmActorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmActorTable
     */
    public $FilmActor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FilmActor',
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
        $config = TableRegistry::getTableLocator()->exists('FilmActor') ? [] : ['className' => FilmActorTable::class];
        $this->FilmActor = TableRegistry::getTableLocator()->get('FilmActor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilmActor);

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
