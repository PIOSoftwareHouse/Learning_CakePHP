<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StoreFixture
 *
 */
class StoreFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'store';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'store_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'manager_staff_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'address_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'idx_fk_address_id' => ['type' => 'index', 'columns' => ['address_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['store_id'], 'length' => []],
            'idx_unique_manager' => ['type' => 'unique', 'columns' => ['manager_staff_id'], 'length' => []],
            'fk_store_address' => ['type' => 'foreign', 'columns' => ['address_id'], 'references' => ['address', 'address_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_store_staff' => ['type' => 'foreign', 'columns' => ['manager_staff_id'], 'references' => ['staff', 'staff_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'store_id' => 1,
                'manager_staff_id' => 1,
                'address_id' => 1,
                'last_update' => 1553648045
            ],
        ];
        parent::init();
    }
}
