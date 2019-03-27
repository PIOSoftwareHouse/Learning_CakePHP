<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FilmFixture
 *
 */
class FilmFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'film';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'film_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'release_year' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'language_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'original_language_id' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'rental_duration' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => '3', 'comment' => '', 'precision' => null],
        'rental_rate' => ['type' => 'decimal', 'length' => 4, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '4.99', 'comment' => ''],
        'length' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'replacement_cost' => ['type' => 'decimal', 'length' => 5, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '19.99', 'comment' => ''],
        'rating' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'G', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'special_features' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'idx_title' => ['type' => 'index', 'columns' => ['title'], 'length' => []],
            'idx_fk_language_id' => ['type' => 'index', 'columns' => ['language_id'], 'length' => []],
            'idx_fk_original_language_id' => ['type' => 'index', 'columns' => ['original_language_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['film_id'], 'length' => []],
            'fk_film_language' => ['type' => 'foreign', 'columns' => ['language_id'], 'references' => ['language', 'language_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_film_language_original' => ['type' => 'foreign', 'columns' => ['original_language_id'], 'references' => ['language', 'language_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'release_year' => 'Lorem ipsum dolor sit amet',
                'language_id' => 1,
                'original_language_id' => 1,
                'rental_duration' => 1,
                'rental_rate' => 1.5,
                'length' => 1,
                'replacement_cost' => 1.5,
                'rating' => 'Lorem ipsum dolor sit amet',
                'special_features' => 'Lorem ipsum dolor sit amet',
                'last_update' => 1553647853
            ],
        ];
        parent::init();
    }
}
