<?php
namespace Bertigolf\Msrouten\Domain\Repository;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Sebastian B. <info@buzted.de>, buzted.de
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use \TYPO3\CMS\Extbase\Persistence\Repository;

/**
 *
 *
 * @package msrouten
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class RoutesRepository extends Repository {

/**
	 * holt die Routen aus der Db nach Ortsfilter
	 * 
	 * @param int $gebirge
	 * @param int $mount 
	 * @param int $wall 
	 *
	 * @return void
	 */
	public function findAllOrt( $gebirge = 0, $mount=0, $wall=0, $route_sort_field = 'uid'){
	      
	        
		$query = $this->createQuery();
		
		if ($wall>0 )  $constraints[] = $query->equals('walls.uid', $wall);
		if ($mount>0 )  $constraints[] = $query->equals('walls.mounts.uid', $mount);
                if ($gebirge >0 )  $constraints[] = $query->equals('walls.mounts.gebirge.uid', $gebirge );
		$query->setOrderings(array( $route_sort_field => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));   
		$result = $query->matching( $query->logicalAnd(  ...array_values($constraints) )  )->execute();
		return $result;
	}

}