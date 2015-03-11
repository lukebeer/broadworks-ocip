<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupFeatureAccessCodeGetListRequest.
 *         Replaced by: GroupFeatureAccessCodeGetResponse
 */
class GroupFeatureAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupFeatureAccessCodeGetListResponse';
    protected $featureAccessCode = null;

    /**
     * @return GroupFeatureAccessCodeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        if (!$featureAccessCode) return $this;
        $this->featureAccessCode = $featureAccessCode;
        $this->featureAccessCode->setName('featureAccessCode');
        return $this;
    }

    /**
     * 
     * @return FeatureAccessCodeEntry
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }
}
