<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmCategoryTable Test Case
 */
class FilmCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmCategoryTable
     */
    public $FilmCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FilmCategory',
        'app.Film',
        'app.Category'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FilmCategory') ? [] : ['className' => FilmCategoryTable::class];
        $this->FilmCategory = TableRegistry::getTableLocator()->get('FilmCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilmCategory);

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
