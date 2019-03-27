<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Film Model
 *
 * @property \App\Model\Table\LanguageTable|\Cake\ORM\Association\BelongsTo $Language
 * @property \App\Model\Table\LanguageTable|\Cake\ORM\Association\BelongsTo $Language
 * @property \App\Model\Table\ActorTable|\Cake\ORM\Association\BelongsToMany $Actor
 * @property \App\Model\Table\CategoryTable|\Cake\ORM\Association\BelongsToMany $Category
 *
 * @method \App\Model\Entity\Film get($primaryKey, $options = [])
 * @method \App\Model\Entity\Film newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Film[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Film|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Film|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Film patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Film[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Film findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmTable extends Table
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

        $this->setTable('film');
        $this->setDisplayField('title');
        $this->setPrimaryKey('film_id');

        $this->belongsTo('Language', [
            'foreignKey' => 'language_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Language', [
            'foreignKey' => 'original_language_id'
        ]);
        $this->belongsToMany('Actor', [
            'foreignKey' => 'film_id',
            'targetForeignKey' => 'actor_id',
            'joinTable' => 'film_actor'
        ]);
        $this->belongsToMany('Category', [
            'foreignKey' => 'film_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'film_category'
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
            ->allowEmptyString('film_id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', false);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('release_year')
            ->allowEmptyString('release_year');

        $validator
            ->requirePresence('rental_duration', 'create')
            ->allowEmptyString('rental_duration', false);

        $validator
            ->decimal('rental_rate')
            ->requirePresence('rental_rate', 'create')
            ->allowEmptyString('rental_rate', false);

        $validator
            ->allowEmptyString('length');

        $validator
            ->decimal('replacement_cost')
            ->requirePresence('replacement_cost', 'create')
            ->allowEmptyString('replacement_cost', false);

        $validator
            ->scalar('rating')
            ->allowEmptyString('rating');

        $validator
            ->scalar('special_features')
            ->allowEmptyString('special_features');

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
        $rules->add($rules->existsIn(['language_id'], 'Language'));
        $rules->add($rules->existsIn(['original_language_id'], 'Language'));

        return $rules;
    }
}
