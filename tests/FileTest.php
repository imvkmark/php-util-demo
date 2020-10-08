<?php namespace Duoli\UtilDemoTests;

use Duoli\UtilDemo\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{

	public function testExtension()
	{
		$extension = File::extension('readme.md');
		$this->assertEquals('md', $extension);
	}

}