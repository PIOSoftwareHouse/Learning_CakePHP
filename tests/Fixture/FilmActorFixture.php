<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FilmActorFixture
 *
 */
class FilmActorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'film_actor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'actor_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'film_id' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_update' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'idx_fk_film_id' => ['type' => 'index', 'columns' => ['film_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['actor_id', 'film_id'], 'length' => []],
            'fk_film_actor_actor' => ['type' => 'foreign', 'columns' => ['actor_id'], 'references' => ['actor', 'actor_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_film_actor_film' => ['type' => 'foreign', 'columns' => ['film_id'], 'references' => ['film', 'film_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'actor_id' => 1,
                'film_id' => 1,
                'last_update' => 1553647866
            ],
        ];
        parent::init();
    }
}
