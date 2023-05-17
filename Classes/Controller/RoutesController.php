<?php
namespace Bertigolf\Msrouten\Controller;
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
use Bertigolf\Msrouten\Domain\Model\Routes;
use Bertigolf\Msrouten\Domain\Repository\RoutesRepository;
/**
 *
 *
 * @package msrouten
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class RoutesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * routesRepository
	 *
	 * @var RoutesRepository
	 */
	protected $routesRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$gebirge= (int) $this->settings['flexform']['gebirge'];
		$mount= (int) $this->settings['flexform']['mount'];
		$wall=   (int)$this->settings['flexform']['walls'];
		$singlePID=   (int)$this->settings['flexform']['singlePID'];
		if ( $singlePID <1)  $singlePID = 1518;
		$route_sort_field = $this->settings['route_sort_field'];		
		//$routes = $this->routesRepository->findAll();
		$routes =   $this->routesRepository->findAllOrt( $gebirge, $mount, $wall, $route_sort_field );
		$this->view->assign('routess', $routes);
		$this->view->assign('singlePID', $singlePID);
	}
	
	/**
	 * action listGebirge
	 *
	 * @return void
	 */
	public function listGebirgeAction() {
		
		$gebirge= (int) $this->settings['flexform']['gebirge'];
		$mount= (int) $this->settings['flexform']['mount'];
		$wall=   (int)$this->settings['flexform']['walls'];
		$singlePID=   (int)$this->settings['flexform']['singlePID'];
				
		//$routes = $this->routesRepository->findAll();
		$routes =   $this->routesRepository->findAllOrt( $gebirge, $mount, $wall);
	
		foreach ( $routes as $route ){		
			$berge[ $route->getWalls()->getMounts()->getUid() ] = array(  'name'	=>  $route->getWalls()->getMounts()->getMountName(), 
										      'uid' 	=>  $route->getWalls()->getMounts()->getUid(),
										      'height' 	=>  $route->getWalls()->getMounts()->getHeight()
									);
		}
		$this->view->assign('singlePID', $singlePID);
		$this->view->assign('mounts', $berge);
		$this->view->assign('routess', $routes);
	}
	
	

	/**
	 * action show
	 *
	 * @param Routes $routes
	 * @param boolean $pdf
	 * @TYPO3\\CMS\\extbase\\Annotation\\ignorevalidation $routes
	 *
	 * @return void
	 */
	public function showAction(Routes $routes, $pdf=FALSE) {	
		$this->view->assign('routes', $routes);
		$this->view->assign('pdf', $pdf);
	}

	/**
	 * action new
	 *
	 * @param Routes $newRoutes
	 * 
	 * @return void
	 */
	public function newAction(Routes $newRoutes = NULL) {
		$this->view->assign('newRoutes', $newRoutes);
	}

	/**
	 * action create
	 *
	 * @param Routes $newRoutes
	 * @return void
	 */
	public function createAction(Routes $newRoutes) {
		$this->routesRepository->add($newRoutes);
		$this->flashMessageContainer->add('Your new Routes was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Routes $routes
	 * @return void
	 */
	public function editAction(Routes $routes) {
		$this->view->assign('routes', $routes);
	}

	/**
	 * action update
	 *
	 * @param Routes $routes
	 * @return void
	 */
	public function updateAction(Routes $routes) {
		$this->routesRepository->update($routes);
		$this->flashMessageContainer->add('Your Routes was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Routes $routes
	 * @return void
	 */
	public function deleteAction(Routes $routes) {
		$this->routesRepository->remove($routes);
		$this->flashMessageContainer->add('Your Routes was removed.');
		$this->redirect('list');
	}

	/**
	 * injectRoutesRepository
	 *
	 * @param RoutesRepository $routesRepository
	 * @return void
	 */
	public function injectRoutesRepository(RoutesRepository $routesRepository) {
		$this->routesRepository = $routesRepository;
	}

}