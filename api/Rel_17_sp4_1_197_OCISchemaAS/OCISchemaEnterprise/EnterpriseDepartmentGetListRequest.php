<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                    = 'EnterpriseDepartmentGetListRequest';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnterpriseId($enterpriseId = null)
    {
        if (!$enterpriseId) return $this;
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
        $this->enterpriseId->setName('enterpriseId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $enterpriseId
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId->getValue();
    }

    /**
     * 
     */
    public function setIncludeGroupDepartments($includeGroupDepartments = null)
    {
        if (!$includeGroupDepartments) return $this;
        $this->includeGroupDepartments = new PrimitiveType($includeGroupDepartments);
        $this->includeGroupDepartments->setName('includeGroupDepartments');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupDepartments
     */
    public function getIncludeGroupDepartments()
    {
        return $this->includeGroupDepartments->getValue();
    }
}
