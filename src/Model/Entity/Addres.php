<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity
 *
 * @property int $address_id
 * @property string $address
 * @property string|null $address2
 * @property string $district
 * @property int $city_id
 * @property string|null $postal_code
 * @property string $phone
 * @property string $location
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\City $city
 */
class Addres extends Entity
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
        'address' => true,
        'address2' => true,
        'district' => true,
        'city_id' => true,
        'postal_code' => true,
        'phone' => true,
        'location' => true,
        'last_update' => true,
        'city' => true
    ];
}
