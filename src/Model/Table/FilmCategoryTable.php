<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FilmCategory Model
 *
 * @property \App\Model\Table\FilmTable|\Cake\ORM\Association\BelongsTo $Film
 * @property \App\Model\Table\CategoryTable|\Cake\ORM\Association\BelongsTo $Category
 *
 * @method \App\Model\Entity\FilmCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\FilmCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FilmCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FilmCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilmCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FilmCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FilmCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmCategoryTable extends Table
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

        $this->setTable('film_category');
        $this->setDisplayField('film_id');
        $this->setPrimaryKey(['film_id', 'category_id']);

        $this->belongsTo('Film', [
            'foreignKey' => 'film_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Category', [
            'foreignKey' => 'category_id',
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
        $rules->add($rules->existsIn(['film_id'], 'Film'));
        $rules->add($rules->existsIn(['category_id'], 'Category'));

        return $rules;
    }
}
