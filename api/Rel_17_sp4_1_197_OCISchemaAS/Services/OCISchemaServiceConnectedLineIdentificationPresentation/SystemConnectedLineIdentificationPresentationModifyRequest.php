<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceConnectedLineIdentificationPresentation; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with the COLP Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemConnectedLineIdentificationPresentationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemConnectedLineIdentificationPresentationModifyRequest';
    protected $enforceUserServiceAssignment;

    public function __construct(
         $enforceUserServiceAssignment = null
    ) {
        $this->setEnforceUserServiceAssignment($enforceUserServiceAssignment);
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
    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment = null)
    {
        $this->enforceUserServiceAssignment = new PrimitiveType($enforceUserServiceAssignment);
        $this->enforceUserServiceAssignment->setName('enforceUserServiceAssignment');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceUserServiceAssignment
     */
    public function getEnforceUserServiceAssignment()
    {
        return ($this->enforceUserServiceAssignment) ? $this->enforceUserServiceAssignment->getValue() : null;
    }
}
