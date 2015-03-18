<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackReleaseCause;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetReleaseCauseListRequest.
 */
class SystemAutomaticCallbackGetReleaseCauseListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAutomaticCallbackGetReleaseCauseListResponse';
    protected $releaseCause;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\SystemAutomaticCallbackGetReleaseCauseListResponse $response
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
