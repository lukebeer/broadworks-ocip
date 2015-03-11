<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\InternalReleaseCause16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingInternalReleaseCauseDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemTreatmentMappingInternalReleaseCauseDeleteRequest';
    protected $internalReleaseCause = null;

    public function __construct(
         $internalReleaseCause
    ) {
        $this->setInternalReleaseCause($internalReleaseCause);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        if (!$internalReleaseCause) return $this;
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
        $this->internalReleaseCause->setName('internalReleaseCause');
        return $this;
    }

    /**
     * 
     * @return InternalReleaseCause16
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause->getValue();
    }
}
