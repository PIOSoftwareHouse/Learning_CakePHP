<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actor Entity
 *
 * @property int $actor_id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Film[] $film
 */
class Actor extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'last_update' => true,
        'film' => true
    ];
}
