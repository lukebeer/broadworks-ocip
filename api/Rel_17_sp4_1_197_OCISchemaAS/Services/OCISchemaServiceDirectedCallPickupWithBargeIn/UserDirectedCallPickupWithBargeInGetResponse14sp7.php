<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDirectedCallPickupWithBargeIn; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserDirectedCallPickupWithBargeInGetRequest14sp7.
 */
class UserDirectedCallPickupWithBargeInGetResponse14sp7 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'UserDirectedCallPickupWithBargeInGetResponse14sp7';
    protected $enableBargeInWarningTone       = null;
    protected $enableAutomaticTargetSelection = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDirectedCallPickupWithBargeIn\UserDirectedCallPickupWithBargeInGetResponse14sp7 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone = null)
    {
        if (!$enableBargeInWarningTone) return $this;
        $this->enableBargeInWarningTone = new PrimitiveType($enableBargeInWarningTone);
        $this->enableBargeInWarningTone->setName('enableBargeInWarningTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBargeInWarningTone
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone->getValue();
    }

    /**
     * 
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection = null)
    {
        if (!$enableAutomaticTargetSelection) return $this;
        $this->enableAutomaticTargetSelection = new PrimitiveType($enableAutomaticTargetSelection);
        $this->enableAutomaticTargetSelection->setName('enableAutomaticTargetSelection');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutomaticTargetSelection
     */
    public function getEnableAutomaticTargetSelection()
    {
        return $this->enableAutomaticTargetSelection->getValue();
    }
}
