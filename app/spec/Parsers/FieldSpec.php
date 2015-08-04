<?php

namespace spec\Lem\Parsers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FieldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lem\Parsers\Field');
    }


    function it_parses_fields_into_an_array(){
        $this->parse('title:string')->shouldReturn(['title' => 'string']);

        $this->parse('title:string, body:text')->shouldReturn(['title'=> 'string', 'body' => 'text']);
    }


    function it_should_throw_unknown_type_exception()
    {
        $this->shouldThrow('Lem\Exception\TypeException')->duringParse('title:except');
    }
}
