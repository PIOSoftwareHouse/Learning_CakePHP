<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentFixture
 *
 */
class PaymentFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'payment';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'payment_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'customer_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'staff_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'rental_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'amount' => ['type' => 'decimal', 'length' => 5, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'payment_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'idx_fk_staff_id' => ['type' => 'index', 'columns' => ['staff_id'], 'length' => []],
            'idx_fk_customer_id' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
            'fk_payment_rental' => ['type' => 'index', 'columns' => ['rental_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['payment_id'], 'length' => []],
            'fk_payment_customer' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customer', 'customer_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_payment_rental' => ['type' => 'foreign', 'columns' => ['rental_id'], 'references' => ['rental', 'rental_id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
            'fk_payment_staff' => ['type' => 'foreign', 'columns' => ['staff_id'], 'references' => ['staff', 'staff_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'payment_id' => 1,
                'customer_id' => 1,
                'staff_id' => 1,
                'rental_id' => 1,
                'amount' => 1.5,
                'payment_date' => '2019-03-27 09:52:40',
                'last_update' => 1553647960
            ],
        ];
        parent::init();
    }
}
