<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saletrades Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cars
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\HasMany $Payments
 *
 * @method \App\Model\Entity\Saletrade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Saletrade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Saletrade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saletrade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saletrade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Saletrade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saletrade findOrCreate($search, callable $callback = null)
 */
class SaletradesTable extends Table
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

        $this->table('saletrades');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cars', [
            'foreignKey' => 'car_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'saletrade_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('carvalue')
            ->allowEmpty('carvalue');

        $validator
            ->integer('tax')
            ->allowEmpty('tax');

        $validator
            ->integer('nontax')
            ->allowEmpty('nontax');

        $validator
            ->integer('recycle')
            ->allowEmpty('recycle');

        $validator
            ->integer('discount')
            ->allowEmpty('discount');

        $validator
            ->integer('totalvalue')
            ->allowEmpty('totalvalue');

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
        $rules->add($rules->existsIn(['car_id'], 'Cars'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
