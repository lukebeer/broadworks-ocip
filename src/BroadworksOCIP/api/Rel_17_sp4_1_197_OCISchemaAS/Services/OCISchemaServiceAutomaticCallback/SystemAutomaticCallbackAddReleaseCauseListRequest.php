<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackReleaseCause;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Adds automatic callback release cause to the releaseCause attribute.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAutomaticCallbackAddReleaseCauseListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAutomaticCallbackAddReleaseCauseListRequest';
    protected $releaseCause;

    public function __construct(
         $releaseCause = null
    ) {
        $this->setReleaseCause($releaseCause);
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
    public function setReleaseCause($releaseCause = null)
    {
        $this->releaseCause = ($releaseCause InstanceOf AutomaticCallbackReleaseCause)
             ? $releaseCause
             : new AutomaticCallbackReleaseCause($releaseCause);
        $this->releaseCause->setElementName('releaseCause');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackReleaseCause $releaseCause
     */
    public function getReleaseCause()
    {
        return ($this->releaseCause)
            ? $this->releaseCause->getElementValue()
            : null;
    }
}
