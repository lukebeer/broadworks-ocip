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
 * Contains a list of audio or video files to modify.
 */
class CallCenterAnnouncementFileListModify extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterAnnouncementFileListModify';
    protected $file1;
    protected $file2;
    protected $file3;
    protected $file4;

    public function __construct(
         $file1 = null,
         $file2 = null,
         $file3 = null,
         $file4 = null
    ) {
        $this->setFile1($file1);
        $this->setFile2($file2);
        $this->setFile3($file3);
        $this->setFile4($file4);
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
    public function setFile1($file1 = null)
    {
        $this->file1 = new SimpleContent($file1);
        $this->file1->setName('file1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file1
     */
    public function getFile1()
    {
        return ($this->file1) ? $this->file1->getValue() : null;
    }

    /**
     * 
     */
    public function setFile2($file2 = null)
    {
        $this->file2 = new SimpleContent($file2);
        $this->file2->setName('file2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file2
     */
    public function getFile2()
    {
        return ($this->file2) ? $this->file2->getValue() : null;
    }

    /**
     * 
     */
    public function setFile3($file3 = null)
    {
        $this->file3 = new SimpleContent($file3);
        $this->file3->setName('file3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file3
     */
    public function getFile3()
    {
        return ($this->file3) ? $this->file3->getValue() : null;
    }

    /**
     * 
     */
    public function setFile4($file4 = null)
    {
        $this->file4 = new SimpleContent($file4);
        $this->file4->setName('file4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file4
     */
    public function getFile4()
    {
        return ($this->file4) ? $this->file4->getValue() : null;
    }
}
