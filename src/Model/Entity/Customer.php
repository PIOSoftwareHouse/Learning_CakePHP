<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $customer_id
 * @property int $store_id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $email
 * @property int $address_id
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime|null $last_update
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Addres $addres
 */
class Customer extends Entity
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
        'store_id' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'address_id' => true,
        'active' => true,
        'create_date' => true,
        'last_update' => true,
        'store' => true,
        'addres' => true
    ];
}
