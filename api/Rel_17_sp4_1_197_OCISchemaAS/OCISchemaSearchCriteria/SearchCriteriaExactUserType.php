<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a particular User Type.
 */
class SearchCriteriaExactUserType extends ComplexType implements ComplexInterface
{
    public    $name = 'SearchCriteriaExactUserType';
    protected $userType;

    public function __construct(
         $userType = ''
    ) {
        $this->setUserType($userType);
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
    public function setUserType($userType = null)
    {
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
        $this->userType->setName('userType');
        return $this;
    }

    /**
     * 
     * @return UserType $userType
     */
    public function getUserType()
    {
        return ($this->userType) ? $this->userType->getValue() : null;
    }
}
