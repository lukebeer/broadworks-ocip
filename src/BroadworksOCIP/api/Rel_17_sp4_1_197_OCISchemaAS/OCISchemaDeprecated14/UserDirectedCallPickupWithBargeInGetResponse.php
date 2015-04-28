<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserDirectedCallPickupWithBargeInGetRequest.
 */
class UserDirectedCallPickupWithBargeInGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDirectedCallPickupWithBargeInGetResponse';
    protected $enableBargeInWarningTone;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserDirectedCallPickupWithBargeInGetResponse $response
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
        $this->enableBargeInWarningTone = new PrimitiveType($enableBargeInWarningTone);
        $this->enableBargeInWarningTone->setElementName('enableBargeInWarningTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBargeInWarningTone
     */
    public function getEnableBargeInWarningTone()
    {
        return ($this->enableBargeInWarningTone)
            ? $this->enableBargeInWarningTone->getElementValue()
            : null;
    }
}
