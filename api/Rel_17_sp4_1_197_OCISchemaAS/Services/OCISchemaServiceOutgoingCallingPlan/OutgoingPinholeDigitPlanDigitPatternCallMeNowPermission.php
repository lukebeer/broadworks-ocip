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
 * Indicates whether Call Me Now calls using specified Pinhole digit patterns are permitted.
 */
class OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission';
    protected $digitPatternName;
    protected $permission;

    public function __construct(
         $digitPatternName = '',
         $permission = ''
    ) {
        $this->setDigitPatternName($digitPatternName);
        $this->setPermission($permission);
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
    public function setDigitPatternName($digitPatternName = null)
    {
        $this->digitPatternName = new SimpleContent($digitPatternName);
        $this->digitPatternName->setElementName('digitPatternName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $digitPatternName
     */
    public function getDigitPatternName()
    {
        return ($this->digitPatternName)
            ? $this->digitPatternName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPermission($permission = null)
    {
        $this->permission = new SimpleContent($permission);
        $this->permission->setElementName('permission');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $permission
     */
    public function getPermission()
    {
        return ($this->permission)
            ? $this->permission->getElementValue()
            : null;
    }
}
