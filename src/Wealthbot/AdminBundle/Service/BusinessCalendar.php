<?php

namespace Wealthbot\AdminBundle\Service;

use Doctrine\ORM\EntityManager;
use Wealthbot\AdminBundle\Entity\Holiday;
use Wealthbot\AdminBundle\Model\AbstractBusinessCalendar;

class BusinessCalendar extends AbstractBusinessCalendar
{
    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;

        parent::__construct();
    }

    protected function loadHolidays(\DateTime $dateFrom, \DateTime $dateTo)
    {
        //TODO: May be create caching of query.
        $from = clone $dateFrom;
        $to = clone $dateTo;

        $interval = $from->diff($to);
        $days = 30 + ($interval->y * 50);
        $from->modify('-'.$days.' days');
        $to->modify('+'.$days.' days');
        /** @var Holiday[] $holidays */
        $holidays = $this->em->getRepository('WealthbotAdminBundle:Holiday')->getFromTo($from, $to);
        foreach ($holidays as $holiday) {
            $this->holidays[$holiday->getDate()->format('m/d/Y')] = $holiday;
        }
    }
}
