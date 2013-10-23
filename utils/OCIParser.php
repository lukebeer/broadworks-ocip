<?php
function xsd2php($file, $match='Request') {
    $xml = file_get_contents($file);
    $xml = simplexml_load_string($xml, 'SimpleXMLElement', 0, "xs", true);
    $className = basename($file, ".xsd");
    $code = "<?php\nclass $className {\n";
    if (is_object($xml)) {
        foreach ($xml->complexType as $complexType) {
            $name = $complexType->attributes()[0];
            if (preg_match("/$match/", $name)) {
                preg_match('/(\w+.*?)\n/', $complexType->annotation->documentation, $docString);
                $params = null;
                $paramsArray = null;
                if (isset($complexType->complexContent->extension->sequence->element)) {
                    foreach ($complexType->complexContent->extension->sequence->element as $element) {
                        foreach ($element->attributes() as $k => $v) {
                            if ($k == 'name') {
                                $params .= "$$v=null,";
                                $paramsArray .= "                    '$v' => $$v,\n";
                            }
                        }
                    }
                }
                $params = (substr($params, -1) == ',') ? substr($params, 0, -1) : $params;
                $paramsArray = (substr($paramsArray, -2, 1) == ',') ? substr($paramsArray, 0, -2) : $paramsArray;
                $code .= "        # $docString[1]\n";
                $code .= "        static public function $name($params) {\n";
                $code .= "            return [\n";
                $code .= "                OCIDataTypes::OCI_NAME   => __FUNCTION__,\n";
                $code .= "                OCIDataTypes::OCI_PARAMS => ";
                $code .= ($paramsArray) ? "[\n$paramsArray\n                ]\n" : "null\n";
                $code .= "            ];\n";
                $code .= "        }\n\n";
            }
        }
        $code .= '}';
        return $code;
    }
    return false;
}

function getXSDs($dir) {
    $rootEntities = scandir($dir);
    $files = null;

    foreach ($rootEntities as $rootEntity) {
        if (substr(strrchr($rootEntity, '.'), 1) == 'xsd') {
            $files[] = $dir . $rootEntity;
        } else {
            if (is_dir($dir . $rootEntity)) {
                $childEntities = scandir($dir . $rootEntity);
                foreach ($childEntities as $childEntity) {
                    if (substr(strrchr($childEntity, '.'), 1) == 'xsd') {
                        $files[] = $dir . $rootEntity . '/' . $childEntity;
                    }
                }
            }
        }
    }
    return $files;
}

function run($path='/path/to/xsd/Rel_17.sp4_1.197_OCISchemaAS/') {
    if ($files = getXSDs($path)) {
        foreach ($files as $file) {
            $file = str_replace("./", "", $file);
            $newFile = substr($file, 0, -3) . "php";
            $newFile = str_replace("xsd/Rel_17.sp4_1.197_OCISchemaAS/", "php/Rel_17.sp4_1.197_OCISchemaAS/", $newFile);
            $code = xsd2php($file);
            $fh = fopen($newFile, 'w');
            fwrite($fh, $code);
            fclose($fh);
        }
    }
}