<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventory Entity
 *
 * @property int $inventory_id
 * @property int $film_id
 * @property int $store_id
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Film $film
 * @property \App\Model\Entity\Store $store
 */
class Inventory extends Entity
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
        'film_id' => true,
        'store_id' => true,
        'last_update' => true,
        'film' => true,
        'store' => true
    ];
}
