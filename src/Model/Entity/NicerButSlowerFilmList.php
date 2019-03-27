<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NicerButSlowerFilmList Entity
 *
 * @property int|null $FID
 * @property string|null $title
 * @property string|null $description
 * @property string $category
 * @property float|null $price
 * @property int|null $length
 * @property string|null $rating
 * @property string|null $actors
 */
class NicerButSlowerFilmList extends Entity
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
        'FID' => true,
        'title' => true,
        'description' => true,
        'category' => true,
        'price' => true,
        'length' => true,
        'rating' => true,
        'actors' => true
    ];
}
