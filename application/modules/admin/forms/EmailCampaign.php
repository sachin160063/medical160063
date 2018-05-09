<?php

class Admin_Form_EmailCampaign extends Zend_Form {

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


    public function init() {

        $this->setMethod('post');
        //$this->addElementPrefixPath('Base_Validate', 'Base/Validate/', 'validate');


        /*$this->addElement('text', 'title', array(
            'label' => 'Title:',
            'required' => false,
            'TABINDEX' => '1',
            'class' => 'form',
            'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'You must enter Title')))
            ),
            'decorators' => $this->elementDecorators,
            'filters' => array('StringTrim'),
        ));


        $this->addElement('text', 'summary', array(
            'label' => 'Summary:',
            'class' => 'form',
            'TABINDEX' => '2',
            'required' => true,
            'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'You must enter Summary')))
            ),
            'decorators' => $this->elementDecorators,
            'filters' => array('StringTrim'),
        ));

        $this->addElement('textarea', 'content', array(
            'label' => 'Description:',
            'class' => 'form',
            'rows' => 15,
            'cols' => 80,
            'TABINDEX' => '3',
            'required' => true,
            'decorators' => $this->elementDecorators,
            'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'You must enter surname')))
            ),
            'filters' => array('StringTrim'),
        ));

        $this->addElement('text', 'publishedTime', array(
            'label'      => 'Publish Date:',
            'TABINDEX' => '4',
            'decorators' => $this->elementDecorators,
            'readonly' =>true
        ));

      $this->addElement('text', 'unpublishedTime', array(
            'label'      => 'Unpublish Date:',
            'TABINDEX' => '5',
            'decorators' => $this->elementDecorators,
            'readonly' =>true

        ));

      $this->addElement('text', 'displayTime', array(
            'label'      => 'Display Date:',
            'TABINDEX' => '6',
            'decorators' => $this->elementDecorators,
            'readonly' =>true
        ));
        
*/      

   		$listOptions=array(
''    => 'Select Memeber Level',        
'Platinum'    => 'Platinum',
'Silver' => 'Silver',
'Gold' => 'Gold',
'Bronze Premium' => 'Bronze Premium'
); 

        $this->addElement('select', 'member_level', array(
            'label' => 'Select Member Level:',
            'style' => 'width: 150px;',
            'TABINDEX' => '1',
            'required' => true,
            'validators' => array(
                array('NotEmpty', true, array('messages' => array('isEmpty' => 'Please select member level')))
            ),
            'decorators' => $this->elementDecorators,
            'filters' => array('StringTrim'),
            'value' => array(''),
            'MultiOptions' => $listOptions
        ));

       
        $this->addElement('submit', 'submit', array(
            'required' => false,
            'class' => 'signup',
            'TABINDEX' => '20',
            'ignore' => true,
            'label' => 'Display',
            'decorators' => $this->buttonDecorators,
        ));
        
        $this->addElement('submit', 'send_email', array(
            'required' => false,
            'class' => 'signup',
            'TABINDEX' => '21',
            'ignore' => true,
            'label' => 'Send Email',
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