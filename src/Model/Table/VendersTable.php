<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Venders Model
 *
 * @property \Cake\ORM\Association\HasMany $Buytrades
 *
 * @method \App\Model\Entity\Vender get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vender newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vender[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vender|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vender patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vender[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vender findOrCreate($search, callable $callback = null)
 */
class VendersTable extends Table
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

        $this->table('venders');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Buytrades', [
            'foreignKey' => 'vender_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('adress');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('bank');

        return $validator;
    }
}
