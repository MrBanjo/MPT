<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MenuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuRepository extends EntityRepository
{

	public function getCurrentMenuClassique()
	{

		$query = $this->getEntityManager()
		->createQuery('SELECT m, c FROM AppBundle:Menu m JOIN m.categorie c WHERE c.nom = :nom AND m.active = :active ORDER BY m.date DESC')
		->setParameter('nom', 'Classique')
		->setParameter('active', 'oui');

		$results = $query->getResult();

		return $results;
	}

	public function getCurrentMenuVegan()
	{

		$query = $this->getEntityManager()
		->createQuery('SELECT m, c FROM AppBundle:Menu m JOIN m.categorie c WHERE c.nom = :nom AND m.active = :active ORDER BY m.date DESC')
		->setParameter('nom', 'Végétarien')
		->setParameter('active', 'oui');

		$results = $query->getResult();

		return $results;

	}

	public function getMenuAdmin()
	{

		$query = $this->getEntityManager()
		->createQuery('SELECT u FROM AppBundle:Menu u ORDER BY u.titre DESC');

		$results = $query->getResult();
		
		return $results;
	}
}
