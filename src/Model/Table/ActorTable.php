<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actor Model
 *
 * @property \App\Model\Table\FilmTable|\Cake\ORM\Association\BelongsToMany $Film
 *
 * @method \App\Model\Entity\Actor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actor findOrCreate($search, callable $callback = null, $options = [])
 */
class ActorTable extends Table
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

        $this->setTable('actor');
        $this->setDisplayField('actor_id');
        $this->setPrimaryKey('actor_id');

        $this->belongsToMany('Film', [
            'foreignKey' => 'actor_id',
            'targetForeignKey' => 'film_id',
            'joinTable' => 'film_actor'
        ]);
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
            ->allowEmptyString('actor_id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->dateTime('last_update')
            ->requirePresence('last_update', 'create')
            ->allowEmptyDateTime('last_update', false);

        return $validator;
    }
}
