<?php

namespace TheoLeonet;

class MakeSrcset
{
	public function __construct(string $image_path, array $sizes) {
		$this->make_srcset($image_path, $sizes);
	}

	protected function make_srcset(string $image_path, array $sizes): void
	{
		$srcset = '';
		$image_infos = pathinfo($image_path);
		foreach ($sizes as $width => $height) {
			$srcset .= $image_infos['dirname'] . '/' . $image_infos['filename'] . "_${width}" . "_${height}." . $image_infos['extension'] . " ${width}w,<br>";
		}
		echo rtrim($srcset, ",");
	}
}
