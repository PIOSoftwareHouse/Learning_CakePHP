<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerList Entity
 *
 * @property int $ID
 * @property string|null $name
 * @property string $address
 * @property string|null $zip code
 * @property string $phone
 * @property string $city
 * @property string $country
 * @property string $notes
 * @property int $SID
 */
class CustomerList extends Entity
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
        'ID' => true,
        'name' => true,
        'address' => true,
        'zip code' => true,
        'phone' => true,
        'city' => true,
        'country' => true,
        'notes' => true,
        'SID' => true
    ];
}
