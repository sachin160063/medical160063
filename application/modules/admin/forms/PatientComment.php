<?php

class Admin_Form_PatientComment extends Zend_Form {

    public $elementDecorators = array(
        'ViewHelper',
        'Errors',
        array(array('data' => 'HtmlTag'), array('tag' => 'td', 'class' => 'element')),
        array('Label', array('tag' => 'td')),
        array(array('row' => 'HtmlTag'), array('tag' => 'tr')),
    );
    public $buttonDecorators = array(
        'ViewHelper',
        array(array('data' => 'HtmlTag'), array('tag' => 'td', 'class' => 'element')),
        array(array('label' => 'HtmlTag'), array('tag' => 'td', 'placement' => 'prepend')),
        array(array('row' => 'HtmlTag'), array('tag' => 'tr')),
    );
    public $fileDecorators = array(
        array('File'),
        array('Errors'),
        array(array('data' => 'HtmlTag'), array('tag' => 'td', 'class' => 'element')),
        array('Label', array('tag' => 'td')),
        array(array('row' => 'HtmlTag'), array('tag' => 'tr')),
    );

    public function init() {

        $this->setMethod('post');

        

        $this->addElement('textarea', 'comment', array(
            'label' => 'Comment:',
            'cols' => 40,
            'rows' => 3,
            'class' => 'form',
            'TABINDEX' => '2',
            'required' => true,
			'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'You must enter Comment')))
            ),
            'decorators' => $this->elementDecorators,
            'filters' => array('StringTrim'),
        ));

      $this->addElement('text', 'patientId', array(
            'label' => 'Patient:',
            'required' => true,
            'TABINDEX' => '1',
            'class' => 'form',
            'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'You must enter Patient Name')))
            ),
            'decorators' => $this->elementDecorators,
            'filters' => array('StringTrim'),
        ));
	   $this->addElement('text', 'doctorId', array(
            'label' => 'Doctor:',
            'required' => true,
            'TABINDEX' => '1',
            'class' => 'form',
            'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'You must enter Doctor Name')))
            ),
            'decorators' => $this->elementDecorators,
            'filters' => array('StringTrim'),
        ));


        $this->addElement('submit', 'submit', array(
            'required' => false,
            'class' => 'signup',
            'TABINDEX' => '20',
            'ignore' => true,
            'label' => 'Save',
            'decorators' => $this->buttonDecorators,
        ));
    }

    public function loadDefaultDecorators() {
        $this->setDecorators(array(
            'FormElements',
            array('HtmlTag', array('tag' => 'table')),
            'Form',
        ));
    }

}