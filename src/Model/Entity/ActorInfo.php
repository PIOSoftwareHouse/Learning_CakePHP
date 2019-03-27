<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActorInfo Entity
 *
 * @property int $actor_id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $film_info
 *
 * @property \App\Model\Entity\Actor $actor
 */
class ActorInfo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'actor_id' => true,
        'first_name' => true,
        'last_name' => true,
        'film_info' => true,
        'actor' => true
    ];
}
