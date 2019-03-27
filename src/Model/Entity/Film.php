<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Film Entity
 *
 * @property int $film_id
 * @property string $title
 * @property string|null $description
 * @property string|null $release_year
 * @property int $language_id
 * @property int|null $original_language_id
 * @property int $rental_duration
 * @property float $rental_rate
 * @property int|null $length
 * @property float $replacement_cost
 * @property string|null $rating
 * @property string|null $special_features
 * @property \Cake\I18n\FrozenTime $last_update
 *
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\Actor[] $actor
 * @property \App\Model\Entity\Category[] $category
 */
class Film extends Entity
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
        'title' => true,
        'description' => true,
        'release_year' => true,
        'language_id' => true,
        'original_language_id' => true,
        'rental_duration' => true,
        'rental_rate' => true,
        'length' => true,
        'replacement_cost' => true,
        'rating' => true,
        'special_features' => true,
        'last_update' => true,
        'language' => true,
        'actor' => true,
        'category' => true
    ];
}
