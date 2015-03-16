<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains list of file media types for audio or video files
 */
class CallCenterAnnouncementMediaFileTypeList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAnnouncementMediaFileTypeList';
    protected $mediaType1;
    protected $mediaType2;
    protected $mediaType3;
    protected $mediaType4;

    public function __construct(
         $mediaType1 = null,
         $mediaType2 = null,
         $mediaType3 = null,
         $mediaType4 = null
    ) {
        $this->setMediaType1($mediaType1);
        $this->setMediaType2($mediaType2);
        $this->setMediaType3($mediaType3);
        $this->setMediaType4($mediaType4);
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
    public function setMediaType1($mediaType1 = null)
    {
        $this->mediaType1 = new SimpleContent($mediaType1);
        $this->mediaType1->setElementName('mediaType1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaType1
     */
    public function getMediaType1()
    {
        return ($this->mediaType1)
            ? $this->mediaType1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaType2($mediaType2 = null)
    {
        $this->mediaType2 = new SimpleContent($mediaType2);
        $this->mediaType2->setElementName('mediaType2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaType2
     */
    public function getMediaType2()
    {
        return ($this->mediaType2)
            ? $this->mediaType2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaType3($mediaType3 = null)
    {
        $this->mediaType3 = new SimpleContent($mediaType3);
        $this->mediaType3->setElementName('mediaType3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaType3
     */
    public function getMediaType3()
    {
        return ($this->mediaType3)
            ? $this->mediaType3->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaType4($mediaType4 = null)
    {
        $this->mediaType4 = new SimpleContent($mediaType4);
        $this->mediaType4->setElementName('mediaType4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaType4
     */
    public function getMediaType4()
    {
        return ($this->mediaType4)
            ? $this->mediaType4->getElementValue()
            : null;
    }
}
