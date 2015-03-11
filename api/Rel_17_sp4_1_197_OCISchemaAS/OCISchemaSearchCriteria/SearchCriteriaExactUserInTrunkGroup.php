<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserInTrunkGroup;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for user in/not in a trunk group.
 */
class SearchCriteriaExactUserInTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $responseType     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserInTrunkGroup';
    public    $name             = 'SearchCriteriaExactUserInTrunkGroup';
    protected $userInTrunkGroup = null;

    public function __construct(
         $userInTrunkGroup
    ) {
        $this->setUserInTrunkGroup($userInTrunkGroup);
    }

    /**
     * @return SearchCriteriaExactUserInTrunkGroup
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
        if (!$userInTrunkGroup) return $this;
        $this->userInTrunkGroup = new PrimitiveType($userInTrunkGroup);
        $this->userInTrunkGroup->setName('userInTrunkGroup');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUserInTrunkGroup()
    {
        return $this->userInTrunkGroup->getValue();
    }
}
