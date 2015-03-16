<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserPrivacyGetRequest.
 */
class UserPrivacyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserPrivacyGetResponse';
    protected $enableDirectoryPrivacy;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserPrivacyGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
        $this->enableDirectoryPrivacy = new PrimitiveType($enableDirectoryPrivacy);
        $this->enableDirectoryPrivacy->setName('enableDirectoryPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDirectoryPrivacy
     */
    public function getEnableDirectoryPrivacy()
    {
        return ($this->enableDirectoryPrivacy) ? $this->enableDirectoryPrivacy->getValue() : null;
    }
}
