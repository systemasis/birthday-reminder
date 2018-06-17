<?php

namespace Birthday\ReminderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BirthdayReminderBundle:Default:index.html.twig');
    }
}
