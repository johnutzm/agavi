<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Agavi package.                                   |
// | Copyright (c) 2005-2009 the Agavi Project.                                |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.agavi.org/LICENSE.txt                   |
// |   vi: set noexpandtab:                                                    |
// |   Local Variables:                                                        |
// |   indent-tabs-mode: t                                                     |
// |   End:                                                                    |
// +---------------------------------------------------------------------------+

class Default_Error404SuccessView extends AgaviSampleAppDefaultBaseView
{

	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);

		// set the title
		$this->setAttribute('title', $this->getContext()->getTranslationManager()->_('404 Not Found', 'default.ErrorActions'));

		$this->container->getResponse()->setHttpStatusCode('404');
	}

	public function executeXmlrpc(AgaviRequestDataHolder $rd)
	{
		return array(
			'faultCode' => -32601, // as per http://xmlrpc-epi.sourceforge.net/specs/rfc.fault_codes.php
			'faultString' => 'requested method not found',
		);
	}
}

?>