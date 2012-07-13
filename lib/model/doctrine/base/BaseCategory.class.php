<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Category', 'doctrine');

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $group_type
 * @property varchar $name_hu
 * @property varchar $name_en
 * @property varchar $name_ru
 * @property varchar $name_pl
 * @property Doctrine_Collection $Product
 * 
 * @method varchar             getGroupType()  Returns the current record's "group_type" value
 * @method varchar             getNameHu()     Returns the current record's "name_hu" value
 * @method varchar             getNameEn()     Returns the current record's "name_en" value
 * @method varchar             getNameRu()     Returns the current record's "name_ru" value
 * @method varchar             getNamePl()     Returns the current record's "name_pl" value
 * @method Doctrine_Collection getProduct()    Returns the current record's "Product" collection
 * @method Category            setGroupType()  Sets the current record's "group_type" value
 * @method Category            setNameHu()     Sets the current record's "name_hu" value
 * @method Category            setNameEn()     Sets the current record's "name_en" value
 * @method Category            setNameRu()     Sets the current record's "name_ru" value
 * @method Category            setNamePl()     Sets the current record's "name_pl" value
 * @method Category            setProduct()    Sets the current record's "Product" collection
 * 
 * @package    test
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('group_type', 'varchar', 10, array(
             'type' => 'varchar',
             'length' => 10,
             ));
        $this->hasColumn('name_hu', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('name_en', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('name_ru', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('name_pl', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));

        $this->option('type', 'MYISAM');
        $this->option('collate', 'utf8_hungarian_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product', array(
             'local' => 'id',
             'foreign' => 'category_id'));
    }
}