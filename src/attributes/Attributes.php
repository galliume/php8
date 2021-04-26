<?php

namespace attributes;

#[SomeAttribute("I am an attribute")]
class Attributes 
{
    public function method(#[ParamAttrib('Attrib')] $attrib) 
    {

    }
}