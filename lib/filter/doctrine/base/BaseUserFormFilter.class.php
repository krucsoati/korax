<?php

/**
 * User filter form base class.
 *
 * @package    test
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'email' => new sfWidgetFormFilterInput(),
      'name'  => new sfWidgetFormFilterInput(),
      'tel'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'email' => new sfValidatorPass(array('required' => false)),
      'name'  => new sfValidatorPass(array('required' => false)),
      'tel'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'email' => 'Text',
      'name'  => 'Text',
      'tel'   => 'Text',
    );
  }
}
