<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $staff_id
 * @property string $first_name
 * @property string $last_name
 * @property int $address_id
 * @property string|resource|null $picture
 * @property string|null $email
 * @property int $store_id
 * @property bool $active
 * @property string $username
 * @property string|null $password
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Addres $addres
 * @property \App\Model\Entity\Store $store
 */
class Staff extends Entity
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
        'address_id' => true,
        'picture' => true,
        'email' => true,
        'store_id' => true,
        'active' => true,
        'username' => true,
        'password' => true,
        'last_update' => true,
        'addres' => true,
        'store' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
