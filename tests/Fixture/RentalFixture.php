<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RentalFixture
 *
 */
class RentalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'rental';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'rental_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'rental_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'inventory_id' => ['type' => 'integer', 'length' => 8, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customer_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'return_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'staff_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'idx_fk_inventory_id' => ['type' => 'index', 'columns' => ['inventory_id'], 'length' => []],
            'idx_fk_customer_id' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
            'idx_fk_staff_id' => ['type' => 'index', 'columns' => ['staff_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['rental_id'], 'length' => []],
            'rental_date' => ['type' => 'unique', 'columns' => ['rental_date', 'inventory_id', 'customer_id'], 'length' => []],
            'fk_rental_customer' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customer', 'customer_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_rental_inventory' => ['type' => 'foreign', 'columns' => ['inventory_id'], 'references' => ['inventory', 'inventory_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_rental_staff' => ['type' => 'foreign', 'columns' => ['staff_id'], 'references' => ['staff', 'staff_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'rental_id' => 1,
                'rental_date' => '2019-03-27 09:52:52',
                'inventory_id' => 1,
                'customer_id' => 1,
                'return_date' => '2019-03-27 09:52:52',
                'staff_id' => 1,
                'last_update' => 1553647972
            ],
        ];
        parent::init();
    }
}
