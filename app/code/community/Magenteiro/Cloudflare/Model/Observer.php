<?php
/**
 * Class Magenteiro_Cloudflare_Model_Observer
 *
 * @author    Ricardo Martins <ricardo@magenteiro.com>
 * @copyright 2020 Magenteiro.com
 */
class Magenteiro_Cloudflare_Model_Observer
{
    const XML_PATH_ENABLED = 'web/magenteiro_cloudflare/enabled';


    public function rewriteRemoteAddr($observer)
    {
        if(!$this->isEnabled()){
            return;
        }

        if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
    }

    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_ENABLED);
    }
}