<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the ServiceProviderCommunicationBarringProfileGetListRequest.
 *         The response contains a table of all Communication Barring Profiles
 *         for the service provider. The column headings are "Default" , "Name" and "Description"
 */
class ServiceProviderCommunicationBarringProfileGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetListResponse';
    public    $name         = __CLASS__;
    protected $profileTable = null;


    /**
     * 
     */
    public function setProfileTable(core:OCITable $profileTable = null)
    {
        $this->profileTable = core:OCITable $profileTable;
    }

    /**
     * 
     */
    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->getValue();
    }
}
