<?php
class QSoft_Onestepcheckout_Block_Customer_Account_Asklink extends Mage_Customer_Block_Form_Login{
    /**
     * Retrieve form posting url
     *
     * @return string
     */
    public function getAskLinkPostActionUrl()
    {
        return $this->helper('onestepcheckout/paypal')->getAskLinkPostActionUrl();
    }
}
