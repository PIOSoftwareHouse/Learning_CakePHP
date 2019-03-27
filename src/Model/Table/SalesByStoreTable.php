<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesByStore Model
 *
 * @method \App\Model\Entity\SalesByStore get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesByStore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalesByStore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesByStore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesByStore|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesByStore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesByStore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesByStore findOrCreate($search, callable $callback = null, $options = [])
 */
class SalesByStoreTable extends Table
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

        $this->setTable('sales_by_store');
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
            ->scalar('store')
            ->maxLength('store', 101)
            ->allowEmptyString('store');

        $validator
            ->scalar('manager')
            ->maxLength('manager', 91)
            ->allowEmptyString('manager');

        $validator
            ->decimal('total_sales')
            ->allowEmptyString('total_sales');

        return $validator;
    }
}
