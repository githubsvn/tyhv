<?php
use SM\Bundle\SoapBundle\SMSoapBundle;

class RssService
{
    public function getLocalRssLink($link = '', $email = '')
    {
        $em = SMSoapBundle::getContainer()->get('doctrine')->getEntityManager('default');
        $container = SMSoapBundle::getContainer();
        $param = array(
            'rss_user'       => $container->getParameter('rss_user'),
            'rss_password'   => $container->getParameter('rss_password'),
            'proxy_server'   => $container->getParameter('proxy_server'),
            'proxy_user'     => $container->getParameter('proxy_user'),
            'proxy_password' =>  $container->getParameter('proxy_password')
        );

        $rep = $em->getRepository("SMAdminBundle:RssFeed");
        return $rep->getInternalLinkAndStatusByLinkFromWebService($link, $email, $param);
    }
}
