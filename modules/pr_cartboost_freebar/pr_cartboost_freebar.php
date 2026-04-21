<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Pr_Cartboost_Freebar extends Module
{
    public function __construct()
    {
        $this->name = 'pr_cartboost_freebar';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'ProgressIO';
        $this->ps_versions_compliancy = ['min' => '9.0.0', 'max' => _PS_VERSION_];

        parent::__construct();

        $this->displayName = $this->l('CartBoost Freebar');
        $this->description = $this->l('Display a free shipping bar on the cart page.');
    }

    public function install()
    {
        return parent::install() 
                        && $this->registerHook('displayProductAdditionalInfo')
                        && $this->registerHook('displayCartTotals') 
                        ;
    }
    public function uninstall()
    {
        return parent::uninstall()
                        && Configuration::deleteByName('PR_CARTBOOST_FREEBAR_FREE_SHIPPING')        
                        ;

    }   

    public function getContent()
    {
        $output = '';
        if (Tools::isSubmit('submit'.$this->name)) {
            $threshold = (float)Tools::getValue('PR_CARTBOOST_FREEBAR_FREE_SHIPPING');
            if (!is_numeric($threshold)) {
                $output .= $this->displayError($this->l('Please enter a numeric value.'));
                return $output.$this->renderForm();
            }
            if ($threshold < 0) {
                $output .= $this->displayError($this->l('Please enter a valid free shipping threshold.'));
                return $output.$this->renderForm();
            }
            Configuration::updateValue('PR_CARTBOOST_FREEBAR_FREE_SHIPPING', $threshold);
            $output .= $this->displayConfirmation($this->l('Settings updated'));
        }

        return $output.$this->renderForm();
    }

    protected function renderForm()
    {

        $fieldsForm[0]['form'] = [
            'legend' => [
                'title' => $this->l('Settings'),
            ],
            'input' => [
                [
                    'type' => 'text',
                    'label' => $this->l('Free shipping threshold'),
                    'name' => 'PR_CARTBOOST_FREEBAR_FREE_SHIPPING',
                    'size' => 20,
                    'required' => true
                ]
            ],
            'submit' => [
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            ]
        ];

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->fields_value['PR_CARTBOOST_FREEBAR_FREE_SHIPPING'] = Configuration::get('PR_CARTBOOST_FREEBAR_FREE_SHIPPING');
        $helper->submit_action = 'submit'.$this->name;

        return $helper->generateForm($fieldsForm);
    }

    // bouton  ajout au panier
    public function hookDisplayProductAdditionalInfo ($params)
    {
        // die('HOOK APPELE');
        $this->context->smarty->assign([
            'product' => $params['product'],
        ]);
        return $this->display(__FILE__, 'views/templates/hook/product_list_functional_buttons.tpl');
    }

    // progess bar 
    public function hookDisplayCartTotals()
    {
        $cart = $this->context->cart;
        $threshold = (float)Configuration::get('PR_CARTBOOST_FREEBAR_FREE_SHIPPING');
        $total = $cart->getOrderTotal();

        $this->context->smarty->assign([
            'threshold' => $threshold,
            'total' => $total,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/cart_totals_free_shipping.tpl');
    }


 

}