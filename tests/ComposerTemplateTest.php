<?php

use PHPUnit\Framework\TestCase;
use WaughJ\ComposerTemplate\ComposerTemplate;

class ComposerTemplateTest extends TestCase
{
	public function testObjectWorks()
	{
		$object = new ComposerTemplate();
		$this->assertTrue( is_object( $object ) );
	}
}
