<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FilmActor Model
 *
 * @property \App\Model\Table\ActorTable|\Cake\ORM\Association\BelongsTo $Actor
 * @property \App\Model\Table\FilmTable|\Cake\ORM\Association\BelongsTo $Film
 *
 * @method \App\Model\Entity\FilmActor get($primaryKey, $options = [])
 * @method \App\Model\Entity\FilmActor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FilmActor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FilmActor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmActor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmActor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FilmActor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FilmActor findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmActorTable extends Table
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

        $this->setTable('film_actor');
        $this->setDisplayField('actor_id');
        $this->setPrimaryKey(['actor_id', 'film_id']);

        $this->belongsTo('Actor', [
            'foreignKey' => 'actor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Film', [
            'foreignKey' => 'film_id',
            'joinType' => 'INNER'
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
            ->dateTime('last_update')
            ->requirePresence('last_update', 'create')
            ->allowEmptyDateTime('last_update', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['actor_id'], 'Actor'));
        $rules->add($rules->existsIn(['film_id'], 'Film'));

        return $rules;
    }
}
