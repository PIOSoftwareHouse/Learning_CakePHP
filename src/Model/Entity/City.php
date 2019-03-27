<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * City Entity
 *
 * @property int $city_id
 * @property string $city
 * @property int $country_id
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Country $country
 */
class City extends Entity
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
        'city' => true,
        'country_id' => true,
        'last_update' => true,
        'country' => true
    ];
}
