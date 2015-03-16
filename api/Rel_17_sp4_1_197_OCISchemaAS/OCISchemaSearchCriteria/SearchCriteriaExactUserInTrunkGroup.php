<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for user in/not in a trunk group.
 */
class SearchCriteriaExactUserInTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactUserInTrunkGroup';
    protected $userInTrunkGroup;

    public function __construct(
         $userInTrunkGroup = ''
    ) {
        $this->setUserInTrunkGroup($userInTrunkGroup);
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
    public function setUserInTrunkGroup($userInTrunkGroup = null)
    {
        $this->userInTrunkGroup = new PrimitiveType($userInTrunkGroup);
        $this->userInTrunkGroup->setElementName('userInTrunkGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $userInTrunkGroup
     */
    public function getUserInTrunkGroup()
    {
        return ($this->userInTrunkGroup)
            ? $this->userInTrunkGroup->getElementValue()
            : null;
    }
}
