<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FilmCategoryFixture
 *
 */
class FilmCategoryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'film_category';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'film_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'category_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_film_category_category' => ['type' => 'index', 'columns' => ['category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['film_id', 'category_id'], 'length' => []],
            'fk_film_category_category' => ['type' => 'foreign', 'columns' => ['category_id'], 'references' => ['category', 'category_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_film_category_film' => ['type' => 'foreign', 'columns' => ['film_id'], 'references' => ['film', 'film_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'film_id' => 1,
                'category_id' => 1,
                'last_update' => 1553647878
            ],
        ];
        parent::init();
    }
}
