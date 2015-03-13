<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get an existing Dialable Caller ID Criteria.
 *         The response is either a  
 *         SystemDialableCallerIDCriteriaGetRequest or an ErrorResponse.
 */
class SystemDialableCallerIDCriteriaGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialableCallerIDCriteriaGetResponse';
    public    $name = 'SystemDialableCallerIDCriteriaGetRequest';
    protected $name = null;

    public function __construct(
         $name
    ) {
        $this->setName($name);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialableCallerIDCriteriaGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf DialableCallerIDCriteriaName)
             ? $name
             : new DialableCallerIDCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }
}
