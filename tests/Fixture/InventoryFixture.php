<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventoryFixture
 *
 */
class InventoryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inventory';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'inventory_id' => ['type' => 'integer', 'length' => 8, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'film_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'store_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'idx_fk_film_id' => ['type' => 'index', 'columns' => ['film_id'], 'length' => []],
            'idx_store_id_film_id' => ['type' => 'index', 'columns' => ['store_id', 'film_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['inventory_id'], 'length' => []],
            'fk_inventory_film' => ['type' => 'foreign', 'columns' => ['film_id'], 'references' => ['film', 'film_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_inventory_store' => ['type' => 'foreign', 'columns' => ['store_id'], 'references' => ['store', 'store_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'inventory_id' => 1,
                'film_id' => 1,
                'store_id' => 1,
                'last_update' => 1553647919
            ],
        ];
        parent::init();
    }
}
