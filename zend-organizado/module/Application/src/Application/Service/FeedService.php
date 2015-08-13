<?php

namespace Application\Service;

use Zend\Feed\Reader\Reader;

class FeedService
{
	protected $reader;
	
	public function __construct(Reader $reader)
	{
		$this->reader = $reader;
	}
	
	public function getFeed($url)
	{
		return $this->reader->import($url);		
	}
}