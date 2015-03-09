<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFeatureAccessCodeModifyListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify default Feature Access Codes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemFeatureAccessCodeModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $featureAccessCode = null;

    public function __construct(
          $featureAccessCode = null
    ) {
        $this->setFeatureAccessCode($featureAccessCode);
    }

    /**
     * @return SystemFeatureAccessCodeModifyListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Feature Access Code Entry
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode =  $featureAccessCode;
    }

    /**
     * Feature Access Code Entry
     */
    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->getValue();
    }
}
