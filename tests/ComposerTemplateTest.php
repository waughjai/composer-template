<?php

declare( strict_types = 1 );

use PHPUnit\Framework\TestCase;
use WaughJ\ComposerTemplate\ComposerTemplate;

class ComposerTemplateTest extends TestCase
{
	public function testObjectWorks() : void
	{
		$object = new ComposerTemplate();
		$this->assertTrue( is_object( $object ) );
	}
}
