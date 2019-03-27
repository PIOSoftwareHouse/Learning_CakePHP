<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FilmList Model
 *
 * @method \App\Model\Entity\FilmList get($primaryKey, $options = [])
 * @method \App\Model\Entity\FilmList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FilmList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FilmList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmList|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FilmList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FilmList findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmListTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('film_list');
        $this->setDisplayField('title');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('FID');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('category')
            ->maxLength('category', 25)
            ->requirePresence('category', 'create')
            ->allowEmptyString('category', false);

        $validator
            ->decimal('price')
            ->allowEmptyString('price');

        $validator
            ->allowEmptyString('length');

        $validator
            ->scalar('rating')
            ->allowEmptyString('rating');

        $validator
            ->scalar('actors')
            ->allowEmptyString('actors');

        return $validator;
    }
}
