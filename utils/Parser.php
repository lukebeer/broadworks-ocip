<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

abstract class TypeMap {
    const BOOLEAN = 1;
    const STRING  = 2;
    const INT     = 3;

    static public function type($type) {
        switch ($type) {
            case 'xs:boolean':
                return "(boolean)";
            case 'xs:bool':
                return "(bool)";
            case 'xs:NMTOKEN':
            case 'xs:string':
            case 'xs:token':
                return "(string)";
            case 'xs:int':
                return "(int)";
            default:
                return $type;
        }
    }

    static public function typeStrip($type) {
        switch ($type) {
            case 'xs:boolean':
            case 'xs:NMTOKEN':
            case 'xs:string':
            case 'xs:token':
            case 'xs:int':
                return "";
            default:
                return $type;
        }
    }
}

function camel($value) {
    return lcfirst(str_replace(' ', '', ucwords(str_replace(array('-', '_'), ' ', $value))));
}

class BuildAPI {
    public $base_dir;
    public $schema;
    public $dest;
    private $docs;
    private $path;
    private $namespaces;
    private $simpleTypes;
    private $complexTypes;


    public function __construct($base_dir='/path/to/schemas/', $schema='Rel_17.sp4_1.197_OCISchemaAS', $dest=null, $dataTypes='OCISchemaDataTypes.xsd') {
        $this->base_dir = $base_dir;
        $this->schema   = $schema;
        $this->schema_out = str_replace(['.', '-', ' '], '_', $this->schema);
        $this->dest     = ($dest) ? $dest . "$this->schema_out" : getcwd() . "$this->schema_out";
        $this->path     = realpath($this->base_dir.$this->schema);
        if (!is_dir($this->path)) exit("Input directory not valid.");
        chdir($this->path);
        if (!is_dir($this->dest)) {
            if (!mkdir($this->dest)) exit("Unable to create API destination directory");
        }
        $this->base_namespace = 'Broadworks_OCIP\api';
    }


    public function buildComplexTypes($file) {
        $xml = file_get_contents($file);
        $xml = simplexml_load_string($xml, 'SimpleXMLElement', 0, "xs", true);
        $namespace = basename($file, ".xsd");
        if (is_object($xml)) {
            foreach ($xml->complexType as $complexType) {
                preg_match('/(\w+.*?)\n/', $complexType->annotation->documentation, $docString);
                $params = null;
                $paramsArray = null;
                $elements = [];
                if (isset($complexType->complexContent->extension->sequence->element)) {
                    foreach ($complexType->complexContent->extension->sequence->element as $element) {
                        $data = [];
                        foreach ($element->attributes() as $k => $v) {
                            $data[$k] = (string) $v;
                            $data['namespace'] = $namespace;
                        }
                        $data['documentation'] = (string) $element->annotation->documentation;
                        $elements[] = $data;
                    }
                }
                $types = [];
                $maxlen = 0;
                $name = $complexType->attributes()['name'];
                $responseName = str_replace('Request', 'Response', $name);
                $code = "class $name extends ComplexType implements ComplexInterface\n";
                $code .= "{\n";
                foreach ($elements as $item) {
                    $maxlen = (strlen($item['name']) > $maxlen) ? strlen($item['name']) : $maxlen;
                }
                if ($this->checkComplexType($responseName)) {
                    $code .= str_pad("    const     RESPONSE_TYPE", $maxlen+15, ' ') . " = '$this->base_namespace\\$this->schema_out\\$namespace\\$responseName';\n";
                }
                $code .= str_pad("    public    \$name", $maxlen+15, ' ')." = __CLASS__;\n";
                foreach ($elements as $item) {
                    $code .= str_pad("    protected \${$item['name']}", $maxlen+15, ' ')." = null;\n";
                }
                $code .= "\n";
                if (!preg_match("/response/i", $name)) {
                    $code .= "    public function __construct(";
                    $pad = "        ";
                    foreach ($elements as $item) {
                        $code .= "\n$pad ";
                        if (array_key_exists('type', $item)) {
                            if ($this->checkComplexType($item['type'])) {
                                $code .= TypeMap::type($item['type']) . " ";
                            }
                        }
                        $code .= '$' . $item['name'];
                        $code .= ((array_key_exists('minOccurs', $item) || (strripos($name, 'Response')))) ? " = null," : ",";
                    }
                    $code = rtrim($code, ',');
                    if (!empty($elements)) $code .= "\n";
                    $code .= "    ) {\n";
                }
                foreach ($elements as $item) {
                    //$code .= str_pad('        $this->set'.$item['name'], $maxlen+15, ' ');
                    //$code .= " = ";
                    if (array_key_exists('type', $item)) {
                        if (array_key_exists($item['type'], $this->namespaces)) {
                            $types[] = "use $this->base_namespace\\$this->schema_out" . ucfirst($this->namespaces[$item['type']]) . "\\" . $item['type'] . ";";
                        }
                    }
                    //$code .= '$'.$item['name'].";\n";
                    if (!preg_match("/response/i", $name)) $code .= "        \$this->set".ucfirst($item['name'])."(\${$item['name']});\n";
                }
                //$code .= str_pad('        $this->args', $maxlen+15, ' ');
                //$code .= " = func_get_args();";
                if (!preg_match("/response/i", $name)) $code .= "    }\n";
                $pad = "    ";
                foreach ($elements as $item) {
                    $code .= "\n$pad";
                    $type = '';
                    if (array_key_exists('type', $item)) $type = ($this->checkSimpleType($item['type'])) ? '' : TypeMap::typeStrip($item['type']);
                    if (!empty($type)) $type = $type.' ';
                    $code .= "/**\n";
                    $code .= "$pad * ". implode("\n$pad * ", explode("\n", trim($this->docs[$item['type']])));
                    $code .= "\n$pad */\n$pad";
                    $code .= "public function set".ucfirst($item['name'])."($type\${$item['name']} = null)\n";
                    $code .= "$pad{\n";
                    if (array_key_exists('type', $item)) {
                        if ($this->checkSimpleType($item['type'])) {
                            $code .= "$pad    \$this->{$item['name']} = (\${$item['name']} InstanceOf {$item['type']})\n";
                            $code .= "$pad         ? \${$item['name']}\n";
                            $code .= "$pad         : new {$item['type']}(\${$item['name']});\n";
                        } else {
                            $code .= "$pad    \$this->{$item['name']} = ".TypeMap::type($item['type'])." \${$item['name']};\n";
                        }
                    } else {
                        $code .= "$pad    \$this->{$item['name']} = \${$item['name']};\n";
                    }
                    $code .= "$pad}\n";
                    $code .= "\n$pad";
                    $code .= "/**\n";
                    $code .= "$pad * ". implode("\n$pad * ", explode("\n", trim($this->docs[$item['type']])));
                    $code .= "\n$pad */\n$pad";
                    $code .= "public function get".ucfirst($item['name'])."()\n";
                    $code .= "$pad{\n";
                    $code .= "$pad    return (!\$this->{$item['name']}) ?: \$this->{$item['name']}->getValue();\n";
                    $code .= "$pad}\n";
                }
                $code .= "}\n";
                $header = "<?php\n";
                $header .= "/**\n";
                $header .= " * This file is part of http://github.com/LukeBeer/Broadworks_OCIP\n";
                $header .= " * \n";
                $header .= " * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>\n";
                $header .= " */\n";
                $header .= "\nnamespace $this->base_namespace\\$this->schema_out\\$namespace; \n\n";
                $types = array_combine($types, array_map('strlen', $types));
                arsort($types);
                $header .= implode("\n", array_unique(array_keys($types)))."\n";
                $header .= "use Broadworks_OCIP\\core\\Builder\\Types\\ComplexInterface;\n";
                $header .= "use Broadworks_OCIP\\core\\Builder\\Types\\ComplexType;\n\n\n";
                $header .= "/**\n";
                $header .= "$pad * ". implode("\n * ", explode("\n", trim($complexType->annotation->documentation)));
                $header .= "\n */\n";
                $code = $header . $code;
                $out_file = dirname(str_replace($this->base_dir.$this->schema, $this->dest, $file))."/$namespace/$name.php";
                if (!is_dir(dirname($out_file))) mkdir(dirname($out_file), 0777, true);
                file_put_contents($out_file, $code);
            }
        }
        return false;
    }

    private function getTypes($files) {
        foreach ($files as $file) {
            $xml = simplexml_load_string(file_get_contents($file), 'SimpleXMLElement', 0, "xs", true);
            if (is_object($xml)) {
                foreach ($xml->simpleType as $simpleType) {
                    $this->simpleTypes[] = (string)$simpleType->attributes()['name'];
                }
                foreach ($xml->complexType as $complexType) {
                    $this->complexTypes[] = (string)$complexType->attributes()['name'];
                }
            }
        }
    }

    public function checkSimpleType($name) {
        $result = (in_array($name, $this->simpleTypes)) ? true : false;
        return $result;
    }

    public function checkComplexType($name) {
        $result = (in_array($name, $this->complexTypes)) ? true : false;
        return $result;
    }

    public function buildSimpleTypes($file) {
        $xml = simplexml_load_string(file_get_contents($file), 'SimpleXMLElement', 0, "xs", true);
        $namespace = basename($file, ".xsd");
        if (is_object($xml)) {
            foreach ($xml->simpleType as $simpleType) {
                $name = (string) $simpleType->attributes()['name'];
                $header = "<?php\n";
                $header .= "/**\n";
                $header .= " * This file is part of http://github.com/LukeBeer/Broadworks_OCIP\n";
                $header .= " * \n";
                $header .= " * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>\n";
                $header .= " */\n\n";
                $header .= "namespace $this->base_namespace\\$this->schema_out\\$namespace; \n\n";
                //$header .= "use Broadworks_OCIP\core\Builder\Types\SimpleInterface;\n";
                $header .= "use Broadworks_OCIP\core\Builder\Types\SimpleType;\n";
                $code = "/**\n";
                $code .= " * ".implode("\n * ", explode("\n", trim($simpleType->annotation->documentation)));
                $code .= "\n */\n";
                $code .= "class $name extends SimpleType\n";
                $code .= "{\n";
                $code .= "    public \$name = __CLASS__;\n";
                $code .= "    protected \$value;\n\n";
                $code .= "    public function __construct(\$value) {\n";
                $code .= "        \$this->value    = \$value;\n";
                $code .= "        \$this->dataType = ".TypeMap::type($simpleType->restriction->attributes()->base).";\n";
                foreach (get_object_vars($simpleType->restriction) as $restriction) {
                    if (is_object($restriction)) {
                        $header .= "use Broadworks_OCIP\core\Builder\Restrictions\\".ucfirst($restriction->getName()).";\n";
                        $value = $restriction->attributes()->value;
                        $value = (is_int($value)) ? $value : '"'.$value.'"';
                        $code .= "        \$this->addRestriction(new ".ucfirst($restriction->getName())."($value));\n";
                    } elseif (is_array($restriction)) {
                        $header .= "use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;\n";
                        $enumerations = [];
                        foreach ($restriction as $item) {
                            switch ($item->getName()) {
                                case 'enumeration':
                                    $enumerations[] = $item->attributes();
                                    break;
                            }
                        }
                        $code .= "        \$this->addRestriction(new Enumeration([\n";
                        $pad = "                                             ";
                        $code .= "            '".implode("',\n            '", $enumerations)."'\n";
                        $code .= "        ]));\n";
                    }
                }
                $code .= "    }\n";
                $code .= "}\n";
                $header .= "\n\n";
                $code = $header.$code;
                //$this->simpleTypeNamespaces[$name] = str_replace($this->base_dir,'',dirname(str_replace($this->base_dir.$this->schema, $this->dest, $file)))."\\$namespace";
                $out_file = dirname(str_replace($this->base_dir.$this->schema, $this->dest, $file))."/$namespace/$name.php";
                if (!is_dir(dirname($out_file))) mkdir(dirname($out_file), 0777, true);
                file_put_contents($out_file, $code);
            }
        }
    }

    public function getNamespaces($files) {
        foreach ($files as $file) {
            $xml = simplexml_load_string(file_get_contents($file), 'SimpleXMLElement', 0, "xs", true);
            $namespace = basename($file, ".xsd");
            $base = str_replace($this->base_dir.$this->schema, '', dirname($file));
            if (is_object($xml)) {
                foreach ($xml->simpleType as $simpleType) {
                    $name = (string) $simpleType->attributes()['name'];
                    $this->simpleTypes[] = $name;
                    $this->namespaces[$name] = str_replace('/', '\\', $base.'\\'.$namespace);
                    $this->docs[$name] = (string) $simpleType->annotation->documentation;
                }
                foreach ($xml->complexType as $complexType) {
                    $name = (string) $complexType->attributes()['name'];
                    $this->complexTypes[] = $name;
                    $this->namespaces[$name] = str_replace('/', '\\', $base.'\\'.$namespace);
                    $this->docs[$name] = (string) $complexType->annotation->documentation;
                }
            }
        }
    }

    public function generate() {
        $files = explode("\n", trim(shell_exec("find {$this->base_dir}{$this->schema} -type f -name '*.xsd'")));
        $this->getNamespaces($files);
        foreach ($files as $file) {
            $this->buildSimpleTypes($file);
        }
        foreach ($files as $file) {
            $this->buildComplexTypes($file);
        }
    }
}

$gen = new BuildAPI('/Users/luke/Development/php/', 'Rel_17.sp4_1.197_OCISchemaAS', '/Users/luke/Development/php/Broadworks_OCIP/api/');
$gen->generate();

//$gen->buildSimpleTypes('OCISchemaDataTypes.xsd');
//$gen->buildComplexTypes('OCISchemaDataTypes.xsd', 'OCISchemaDataTypes.xsd');
//$gen->buildComplexTypes('OCISchemaUser.xsd', );
