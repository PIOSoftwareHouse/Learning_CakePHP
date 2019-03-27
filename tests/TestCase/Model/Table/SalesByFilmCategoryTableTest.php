<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesByFilmCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesByFilmCategoryTable Test Case
 */
class SalesByFilmCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesByFilmCategoryTable
     */
    public $SalesByFilmCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SalesByFilmCategory'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SalesByFilmCategory') ? [] : ['className' => SalesByFilmCategoryTable::class];
        $this->SalesByFilmCategory = TableRegistry::getTableLocator()->get('SalesByFilmCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalesByFilmCategory);

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
