<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rental Entity
 *
 * @property int $rental_id
 * @property \Cake\I18n\FrozenTime $rental_date
 * @property int $inventory_id
 * @property int $customer_id
 * @property \Cake\I18n\FrozenTime|null $return_date
 * @property int $staff_id
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Inventory $inventory
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Staff $staff
 */
class Rental extends Entity
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
        'rental_date' => true,
        'inventory_id' => true,
        'customer_id' => true,
        'return_date' => true,
        'staff_id' => true,
        'last_update' => true,
        'inventory' => true,
        'customer' => true,
        'staff' => true
    ];
}
