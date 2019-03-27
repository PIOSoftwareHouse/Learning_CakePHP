<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmTextTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmTextTable Test Case
 */
class FilmTextTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmTextTable
     */
    public $FilmText;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FilmText'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FilmText') ? [] : ['className' => FilmTextTable::class];
        $this->FilmText = TableRegistry::getTableLocator()->get('FilmText', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilmText);

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
