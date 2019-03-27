<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FilmCategory Entity
 *
 * @property int $film_id
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Film $film
 * @property \App\Model\Entity\Category $category
 */
class FilmCategory extends Entity
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
        'last_update' => true,
        'film' => true,
        'category' => true
    ];
}
