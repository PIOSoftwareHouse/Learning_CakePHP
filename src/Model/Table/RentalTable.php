<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rental Model
 *
 * @property \App\Model\Table\InventoryTable|\Cake\ORM\Association\BelongsTo $Inventory
 * @property \App\Model\Table\CustomerTable|\Cake\ORM\Association\BelongsTo $Customer
 * @property \App\Model\Table\StaffTable|\Cake\ORM\Association\BelongsTo $Staff
 *
 * @method \App\Model\Entity\Rental get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rental newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rental[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rental|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rental|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rental patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rental[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rental findOrCreate($search, callable $callback = null, $options = [])
 */
class RentalTable extends Table
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

        $this->setTable('rental');
        $this->setDisplayField('rental_id');
        $this->setPrimaryKey('rental_id');

        $this->belongsTo('Inventory', [
            'foreignKey' => 'inventory_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customer', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Staff', [
            'foreignKey' => 'staff_id',
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
            ->integer('rental_id')
            ->allowEmptyString('rental_id', 'create');

        $validator
            ->dateTime('rental_date')
            ->requirePresence('rental_date', 'create')
            ->allowEmptyDateTime('rental_date', false);

        $validator
            ->dateTime('return_date')
            ->allowEmptyDateTime('return_date');

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
        $rules->add($rules->existsIn(['inventory_id'], 'Inventory'));
        $rules->add($rules->existsIn(['customer_id'], 'Customer'));
        $rules->add($rules->existsIn(['staff_id'], 'Staff'));

        return $rules;
    }
}
