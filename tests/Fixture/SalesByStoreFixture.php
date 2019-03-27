<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesByStoreFixture
 *
 */
class SalesByStoreFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sales_by_store';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'store' => ['type' => 'string', 'length' => 101, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'manager' => ['type' => 'string', 'length' => 91, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'total_sales' => ['type' => 'decimal', 'length' => 27, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_options' => [
            'engine' => null,
            'collation' => null
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
                'store' => 'Lorem ipsum dolor sit amet',
                'manager' => 'Lorem ipsum dolor sit amet',
                'total_sales' => 1.5
            ],
        ];
        parent::init();
    }
}
