<?php

namespace Kristianlentino\AutomaticInvoice;

class BaseClass
{
	public function __construct($fields = [])
	{
		foreach ($fields as $fieldName => $fieldValue) {

			if(property_exists($this,$fieldName)){
				$this->$fieldName = $fieldValue;
			} else {
				throw new \Exception("Invalida argument $fieldName");
			}
		}
	}
}