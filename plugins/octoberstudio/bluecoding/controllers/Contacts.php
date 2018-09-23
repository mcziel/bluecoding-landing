<?php namespace OctoberStudio\Bluecoding\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Contacts extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'general' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OctoberStudio.Bluecoding', 'contacts');
    }
}
