<?php
// auto-generated by sfValidatorConfigHandler
// date: 2013/02/09 12:08:01

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
  $context->getRequest()->setAttribute('fillin', array (
  'enable' => true,
), 'symfony/filter');
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validatorManager->registerName('aboutus', 1, 'Please Enter About Us Data', null, null, false);
  $context->getRequest()->setAttribute('fillin', array (
  'enable' => true,
), 'symfony/filter');
}
