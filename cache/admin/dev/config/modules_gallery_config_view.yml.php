<?php
// auto-generated by sfViewConfigHandler
// date: 2013/02/09 12:08:08
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Joseph Borge Ltd.', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'Joseph Borge Ltd.', false, false);
  $response->addMeta('keywords', 'Joseph Borge Ltd.', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());


