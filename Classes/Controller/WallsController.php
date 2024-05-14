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
use TYPO3\CMS\Extbase\Annotation\IgnoreValidation;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Bertigolf\Msrouten\Domain\Model\Walls;
use Bertigolf\Msrouten\Domain\Repository\WallsRepository;
/**
 *
 *
 * @package msrouten
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class WallsController extends ActionController {

	/**
	 * wallsRepository
	 *
	 * @vaWallsRepository
	 */
	protected $wallsRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$wallss = $this->wallsRepository->findAll();
		$this->view->assign('wallss', $wallss);
	}

	/**
	 * action show
	 *
	 * @param Walls $walls
	 * @return void
	 */
	public function showAction(Walls $walls) {
		$this->view->assign('walls', $walls);
	}

	/**
	 * action new
	 *
	 * @param Walls $newWalls
	 * @IgnoreValidation; $newWalls
	 * @return void
	 */
	public function newAction(Walls $newWalls = NULL) {
		$this->view->assign('newWalls', $newWalls);
	}

	/**
	 * action create
	 *
	 * @param Walls $newWalls
	 * @return void
	 */
	public function createAction(Walls $newWalls) {
		$this->wallsRepository->add($newWalls);
		$this->flashMessageContainer->add('Your new Walls was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Tx_Msrouten_Domain_Model_Walls $walls
	 * @return void
	 */
	public function editAction(Walls $walls) {
		$this->view->assign('walls', $walls);
	}

	/**
	 * action update
	 *
	 * @param Tx_Msrouten_Domain_Model_Walls $walls
	 * @return void
	 */
	public function updateAction(Walls $walls) {
		$this->wallsRepository->update($walls);
		$this->flashMessageContainer->add('Your Walls was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Tx_Msrouten_Domain_Model_Walls $walls
	 * @return void
	 */
	public function deleteAction(Walls $walls) {
		$this->wallsRepository->remove($walls);
		$this->flashMessageContainer->add('Your Walls was removed.');
		$this->redirect('list');
	}

	/**
	 * injectWallsRepository
	 *
	 * @param WallsRepository $wallsRepository
	 * @return void
	 */
	public function injectWallsRepository(WallsRepository $wallsRepository) {
		$this->wallsRepository = $wallsRepository;
	}

}
?>