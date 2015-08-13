<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Using this controller for manipulate methods to FeedService and send response for feed view
 * @author erikprogramador
 *
 */
class IndexController extends AbstractActionController
{
	/**
	 * Index action call the FeedService to get feed rss, using geetFeed($url) for get rss
	 * @see \Zend\Mvc\Controller\AbstractActionController::indexAction()
	 */
    public function indexAction()
    {
    	$feedService = $this->getServiceLocator()->get("FeedService");
    	$itens		 = $feedService->getFeed("http://rss.slashdot.org/Slashdot/slashdot");
    	
        return new ViewModel(array('itens' => $itens));
    }
}
