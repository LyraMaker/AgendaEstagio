<?php
namespace AgendaEstagio\application\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager():EntityManagerInterface{
        $isDev = true;
        $root = __DIR__."/../../";
        $config = Setup::createAnnotationMetadataConfiguration([$root."application/"],$isDev);
        $connec = [
            'driver'=> 'pdo_sqlite',
            'path'=>  $root.'/var/data/banco.sqlite'];
        return EntityManager::create($connec,$config);
    }
}

