<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmListTable Test Case
 */
class FilmListTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmListTable
     */
    public $FilmList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FilmList'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FilmList') ? [] : ['className' => FilmListTable::class];
        $this->FilmList = TableRegistry::getTableLocator()->get('FilmList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilmList);

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
