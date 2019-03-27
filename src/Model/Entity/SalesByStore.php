<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalesByStore Entity
 *
 * @property string|null $store
 * @property string|null $manager
 * @property float|null $total_sales
 */
class SalesByStore extends Entity
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
        'store' => true,
        'manager' => true,
        'total_sales' => true
    ];
}
