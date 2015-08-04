<?php

namespace Lem\Parsers;


use Lem\Exception\TypeException;

class Field
{

    public function parse($fields)
    {
        $declarations=explode(', ',$fields);
        $parsed = [];
        foreach ($declarations as $declaration) {
            list($property, $type)=explode(':', $declaration);
            if($type == 'except') throw new TypeException;
            $parsed[$property] = $type;
        }
        return $parsed;
    }
}
