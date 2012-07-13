<?php

/**
 * News form base class.
 *
 * @method News getObject() Returns the current form's model object
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNewsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'create_date' => new sfWidgetFormDateTime(),
      'title_hu'    => new sfWidgetFormInputText(),
      'title_en'    => new sfWidgetFormInputText(),
      'title_ru'    => new sfWidgetFormInputText(),
      'title_pl'    => new sfWidgetFormInputText(),
      'news_hu'     => new sfWidgetFormInputText(),
      'news_en'     => new sfWidgetFormInputText(),
      'news_ru'     => new sfWidgetFormInputText(),
      'news_pl'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'create_date' => new sfValidatorDateTime(),
      'title_hu'    => new sfValidatorPass(array('required' => false)),
      'title_en'    => new sfValidatorPass(array('required' => false)),
      'title_ru'    => new sfValidatorPass(array('required' => false)),
      'title_pl'    => new sfValidatorPass(array('required' => false)),
      'news_hu'     => new sfValidatorPass(array('required' => false)),
      'news_en'     => new sfValidatorPass(array('required' => false)),
      'news_ru'     => new sfValidatorPass(array('required' => false)),
      'news_pl'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('news[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'News';
  }

}
