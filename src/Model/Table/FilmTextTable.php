<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FilmText Model
 *
 * @method \App\Model\Entity\FilmText get($primaryKey, $options = [])
 * @method \App\Model\Entity\FilmText newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FilmText[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FilmText|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmText|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmText patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FilmText[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FilmText findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmTextTable extends Table
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

        $this->setTable('film_text');
        $this->setDisplayField('title');
        $this->setPrimaryKey('film_id');
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
            ->allowEmptyString('film_id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', false);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
