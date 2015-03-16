<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a particular fully specified custom contact directory.
 */
class SearchCriteriaExactCustomContactDirectory extends ComplexType implements ComplexInterface
{
    public    $name = 'SearchCriteriaExactCustomContactDirectory';
    protected $customContactDirectoryName;

    public function __construct(
         $customContactDirectoryName = ''
    ) {
        $this->setCustomContactDirectoryName($customContactDirectoryName);
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
    public function setCustomContactDirectoryName($customContactDirectoryName = null)
    {
        $this->customContactDirectoryName = ($customContactDirectoryName InstanceOf CustomContactDirectoryName)
             ? $customContactDirectoryName
             : new CustomContactDirectoryName($customContactDirectoryName);
        $this->customContactDirectoryName->setName('customContactDirectoryName');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $customContactDirectoryName
     */
    public function getCustomContactDirectoryName()
    {
        return ($this->customContactDirectoryName) ? $this->customContactDirectoryName->getValue() : null;
    }
}
