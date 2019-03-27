<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inventory Model
 *
 * @property \App\Model\Table\FilmTable|\Cake\ORM\Association\BelongsTo $Film
 * @property \App\Model\Table\StoreTable|\Cake\ORM\Association\BelongsTo $Store
 *
 * @method \App\Model\Entity\Inventory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inventory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inventory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inventory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inventory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inventory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inventory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inventory findOrCreate($search, callable $callback = null, $options = [])
 */
class InventoryTable extends Table
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

        $this->setTable('inventory');
        $this->setDisplayField('inventory_id');
        $this->setPrimaryKey('inventory_id');

        $this->belongsTo('Film', [
            'foreignKey' => 'film_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Store', [
            'foreignKey' => 'store_id',
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
            ->nonNegativeInteger('inventory_id')
            ->allowEmptyString('inventory_id', 'create');

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
        $rules->add($rules->existsIn(['store_id'], 'Store'));

        return $rules;
    }
}
