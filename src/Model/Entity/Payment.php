<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $payment_id
 * @property int $customer_id
 * @property int $staff_id
 * @property int|null $rental_id
 * @property float $amount
 * @property \Cake\I18n\FrozenTime $payment_date
 * @property \Cake\I18n\FrozenTime|null $last_update
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\Rental $rental
 */
class Payment extends Entity
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
        'customer_id' => true,
        'staff_id' => true,
        'rental_id' => true,
        'amount' => true,
        'payment_date' => true,
        'last_update' => true,
        'customer' => true,
        'staff' => true,
        'rental' => true
    ];
}
