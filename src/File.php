<?php namespace Duoli\UtilDemo;

class File
{

	/**
	 * 返回文件扩展名
	 * @param string $filename 文件名称
	 * @return string|string[]
	 */
	public static function extension($filename)
	{
		return pathinfo($filename, PATHINFO_EXTENSION);
	}

}