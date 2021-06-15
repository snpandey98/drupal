<?php

namespace Drupal\home\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HomeTest extends FormBase {

  /**
   * Returns a unique string identifying the form.
   *
   * The returned ID should be a unique string that can be a valid PHP function
   * name, since it's used in hook implementation names such as
   * hook_form_FORM_ID_alter().
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'my_home_form';
  }
  
  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
	$form['first_name'] = [
		'#type' => 'textfield',
		'#title' => 'First Name',
		'#description' => 'Please enter the first name.'
	];
	
   $form['gender'] = [
	'#type' => 'radios',
	'#title' => 'Gender',
	'#options' => ['male', 'female'],
   ];
   
   $form['city'] = [
     '#type' => 'select',
     '#title' => 'City',
     '#options' => ['GKP', 'LKO'],
   ];
	
	$form['address'] = [
		'#type' => 'textarea',
		'#title' => 'Address',
	];
   $form['submit'] = [
    '#type' => 'submit',
    '#value' => 'Submit',
   ];
	return $form;
  }
  
  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
	
  } 

}
