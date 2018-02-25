<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 *
 * Please do not shared this file with anyone else, without prior permission.
 */


class Box_License implements \Box\InjectionAwareInterface
{
    protected $di;

    public function setDi($di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        $license = $this->di['config']['license'];
        if(!$license || $license == '') {
            throw new \Box_Exception('BoxBilling license key must be defined in bb-config.php file.', null, 315);
        }
        return $license;
    }

    public function check()
    {
        return;
    }

    public function isValid()
    {
        return true;
    }

    public function isPro()
    {
        return true;
    }

    private function getBBType()
    {
        return \Box_Version::TYPE_PRO;
    }

    public function getDetails()
    {
        return array(
            "licensed_to" => "VimlyHost Web Services",
            "created_at" => "2018-01-01T00:00:00-05:00",
            "expires_at" => "2038-01-01T00:00:00-05:00",
            "valid" => true,
            "error" => null,
            "error_code" => null,
        );
    }
}
