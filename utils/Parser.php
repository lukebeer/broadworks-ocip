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
                return "'boolean'";
            case 'xs:string':
            case 'xs:token':
                return "'string'";
            case 'xs:int':
                return "'int'";
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
    private $path;
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
        $this->getTypes($dataTypes);
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
                        }
                        $elements[] = $data;
                    }
                }
                $types = [];
                $maxlen = 0;
                $name = $complexType->attributes()['name'];
                $code = "class $name extends ComplexType implements ComplexInterface\n";
                $code .= "{\n";
                $code .= "    public    \$name = __CLASS__;\n\n";
                $code .= "    public function __construct(";
                $pad = "            ";
                foreach ($elements as $item) {
                    $maxlen = (strlen($item['name']) > $maxlen) ? strlen($item['name']) : $maxlen;
                    $code .= "\n$pad ";
                    if ($this->checkComplexType($item['type'])) {
                        if (array_key_exists('type', $item)) $code .= TypeMap::type($item['type'])." ";
                    }
                    $code .= '$'.$item['name'];
                    $code .= (array_key_exists('minOccurs', $item)) ? "=null," : ",";
                }
                $code = rtrim($code, ',');
                if (!empty($elements)) $code .= "\n";
                $code .= "    ) {";
                foreach ($elements as $item) {
                    $code .= "\n";
                    $code .= str_pad('        $this->'.$item['name'], $maxlen+15, ' ');
                    $code .= " = ";
                    if (array_key_exists('type', $item)) {
                        $types[] = "use $this->base_namespace\\$this->schema_out\\OCISchemaDataTypes\\".$item['type'].";";
                        $code .= ($this->checkSimpleType($item['type']))
                            ? "new ".TypeMap::type($item['type']).'($'.$item['name'].");"
                            : '$'.$item['name'].";";
                    } else {
                        $code .= '$'.$item['name'].";";
                    }
                }
                $code .= str_pad("\n        \$this->args", $maxlen+17, ' ').'= func_get_args();';
                $code .= "\n    }\n";
                $pad = "    ";
                foreach ($elements as $item) {
                    $code .= "\n$pad";
                    $code .= "public function set".ucfirst($item['name'])."(\${$item['name']})\n";
                    $code .= "$pad{\n";
                    $code .= "$pad    \${$item['name']} and \$this->{$item['name']} = new {$item['type']}(\${$item['name']});\n";
                    $code .= "$pad}\n";
                    $code .= "\n$pad";
                    $code .= "public function get".ucfirst($item['name'])."()\n";
                    $code .= "$pad{\n";
                    $code .= "$pad    return (!\$this->{$item['name']}) ?: \$this->{$item['name']}->value();\n";
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
                $header .= implode("\n", array_unique($types))."\n";
                $header .= "use Broadworks_OCIP\\core\\Builder\\Types\\ComplexInterface;\n";
                $header .= "use Broadworks_OCIP\\core\\Builder\\Types\\ComplexType;\n\n\n";
                $header .= "/**\n";
                $header .= " * ".implode("\n * ", explode("\n", trim($complexType->annotation->documentation)));
                $header .= "\n */\n";
                $code = $header . $code;
                $out_file = dirname(str_replace($this->base_dir.$this->schema, $this->dest, $file))."/$namespace/$name.php";
                if (!is_dir(dirname($out_file))) mkdir(dirname($out_file), 0777, true);
                file_put_contents($out_file, $code);
            }
        }
        return false;
    }

    private function getTypes($file) {
        $xml = simplexml_load_string(file_get_contents($file), 'SimpleXMLElement', 0, "xs", true);
        if (is_object($xml)) {
            foreach ($xml->simpleType as $simpleType) {
                $this->simpleTypes[] = (string) $simpleType->attributes()['name'];
            }
            foreach ($xml->complexType as $complexType) {
                $this->complexTypes[] = (string) $complexType->attributes()['name'];
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
                $name = $simpleType->attributes()['name'];
                $header = "<?php\n";
                $header .= "/**\n";
                $header .= " * This file is part of http://github.com/LukeBeer/Broadworks_OCIP\n";
                $header .= " * \n";
                $header .= " * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>\n";
                $header .= " */\n\n";
                $header .= "namespace $this->base_namespace\\$this->schema_out\\$namespace; \n\n";
                $header .= "use Broadworks_OCIP\core\Builder\Types\SimpleInterface;\n";
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
                        $code .= "        \$this->addRestriction(new ".ucfirst($restriction->getName())."({$restriction->attributes()->value}));\n";
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
                        $code .= "        \$this-addRestriction(new Enumeration([\n";
                        $pad = "                                             ";
                        $code .= "$pad '".implode("',\n$pad '", $enumerations)."'\n";
                        $code .= "$pad]);\n";
                    }
                }
                $code .= "    }\n";
                $code .= "}\n";
                $header .= "\n\n";
                $code = $header.$code;
                $out_file = dirname(str_replace($this->base_dir.$this->schema, $this->dest, $file))."/$namespace/$name.php";
                if (!is_dir(dirname($out_file))) mkdir(dirname($out_file), 0777, true);
                file_put_contents($out_file, $code);
            }
        }
    }

    public function generate() {
        $files = explode("\n", trim(shell_exec("find {$this->base_dir}{$this->schema} -type f -name '*.xsd'")));
        foreach ($files as $file) {
            $this->buildSimpleTypes($file);
            $this->buildComplexTypes($file);
        }
    }
}

$gen = new BuildAPI('/Users/luke/Development/php/', 'Rel_17.sp4_1.197_OCISchemaAS', '/Users/luke/Development/php/Broadworks_OCIP/api/');
$gen->generate();

//$gen->buildSimpleTypes('OCISchemaDataTypes.xsd');
//$gen->buildComplexTypes('OCISchemaDataTypes.xsd', 'OCISchemaDataTypes.xsd');
//$gen->buildComplexTypes('OCISchemaUser.xsd', );

