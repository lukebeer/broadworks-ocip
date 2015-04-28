<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAnonymousCallRejection; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a system Anonymous Call Rejection parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAnonymousCallRejectionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAnonymousCallRejectionModifyRequest';
    protected $paiRequired;
    protected $screenOnlyLocalCalls;

    public function __construct(
         $paiRequired = null,
         $screenOnlyLocalCalls = null
    ) {
        $this->setPaiRequired($paiRequired);
        $this->setScreenOnlyLocalCalls($screenOnlyLocalCalls);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPaiRequired($paiRequired = null)
    {
        $this->paiRequired = new PrimitiveType($paiRequired);
        $this->paiRequired->setElementName('paiRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $paiRequired
     */
    public function getPaiRequired()
    {
        return ($this->paiRequired)
            ? $this->paiRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScreenOnlyLocalCalls($screenOnlyLocalCalls = null)
    {
        $this->screenOnlyLocalCalls = new PrimitiveType($screenOnlyLocalCalls);
        $this->screenOnlyLocalCalls->setElementName('screenOnlyLocalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $screenOnlyLocalCalls
     */
    public function getScreenOnlyLocalCalls()
    {
        return ($this->screenOnlyLocalCalls)
            ? $this->screenOnlyLocalCalls->getElementValue()
            : null;
    }
}
