<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a list of departments in an enterprise. You may request only the
 *         list of departments defined at the enterprise-level, or you may request
 *         the list of all departments in the enterprise including all the departments
 *         defined within the groups inside the enterprise.
 *         The response is either EnterpriseDepartmentGetListResponse or ErrorResponse.
 */
class EnterpriseDepartmentGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetListResponse';
    public    $name                    = __CLASS__;
    protected $enterpriseId            = null;
    protected $includeGroupDepartments = null;

    public function __construct(
         $enterpriseId,
         $includeGroupDepartments
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setIncludeGroupDepartments($includeGroupDepartments);
    }

    /**
     * @return EnterpriseDepartmentGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setEnterpriseId($enterpriseId = null)
    {
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getEnterpriseId()
    {
        return (!$this->enterpriseId) ?: $this->enterpriseId->getValue();
    }

    /**
     * 
     */
    public function setIncludeGroupDepartments($includeGroupDepartments = null)
    {
        $this->includeGroupDepartments = (boolean) $includeGroupDepartments;
    }

    /**
     * 
     */
    public function getIncludeGroupDepartments()
    {
        return (!$this->includeGroupDepartments) ?: $this->includeGroupDepartments;
    }
}
