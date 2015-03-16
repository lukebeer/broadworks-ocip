<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
 */
class OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions';
    protected $digitPatternPermissions;

    public function __construct(
         $digitPatternPermissions = null
    ) {
        $this->setDigitPatternPermissions($digitPatternPermissions);
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
    public function setDigitPatternPermissions($digitPatternPermissions = null)
    {
        $this->digitPatternPermissions = new SimpleContent($digitPatternPermissions);
        $this->digitPatternPermissions->setElementName('digitPatternPermissions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $digitPatternPermissions
     */
    public function getDigitPatternPermissions()
    {
        return ($this->digitPatternPermissions)
            ? $this->digitPatternPermissions->getElementValue()
            : null;
    }
}
