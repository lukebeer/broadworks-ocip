<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPEntryField;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserLDAPIntegrationGetDirectoryEntryRequest.
 */
class UserLDAPIntegrationGetDirectoryEntryResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserLDAPIntegrationGetDirectoryEntryResponse';
    protected $data;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryEntryResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setData(LDAPEntryField $data = null)
    {
        $this->data = ($data InstanceOf LDAPEntryField)
             ? $data
             : new LDAPEntryField($data);
        $this->data->setElementName('data');
        return $this;
    }

    /**
     * 
     * @return LDAPEntryField $data
     */
    public function getData()
    {
        return $this->data;
    }
}
