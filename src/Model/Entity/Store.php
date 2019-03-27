<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Store Entity
 *
 * @property int $store_id
 * @property int $manager_staff_id
 * @property int $address_id
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\Addres $addres
 */
class Store extends Entity
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
        'manager_staff_id' => true,
        'address_id' => true,
        'last_update' => true,
        'staff' => true,
        'addres' => true
    ];
}
