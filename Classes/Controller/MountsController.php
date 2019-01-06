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
use Bertigolf\Msrouten\Domain\Model\Mounts;
use Bertigolf\Msrouten\Domain\Repository\MountsRepository;
/**
 *
 *
 * @package msrouten
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class MountsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * mountsRepository
	 *
	 * @var MountsRepository
	 */
	protected $mountsRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$mountss = $this->mountsRepository->findAll();
		$this->view->assign('mountss', $mountss);
	}

	/**
	 * action show
	 *
	 * @param Tx_Msrouten_Domain_Model_Mounts $mounts
	 * @return void
	 */
	public function showAction(Tx_Msrouten_Domain_Model_Mounts $mounts) {
		$this->view->assign('mounts', $mounts);
	}

	/**
	 * action new
	 *
	 * @param Mounts $newMounts
	 * @dontvalidate $newMounts
	 * @return void
	 */
	public function newAction(Mounts $newMounts = NULL) {
		$this->view->assign('newMounts', $newMounts);
	}

	/**
	 * action create
	 *
	 * @param Mounts $newMounts
	 * @return void
	 */
	public function createAction(Mounts $newMounts) {
		$this->mountsRepository->add($newMounts);
		$this->flashMessageContainer->add('Your new Mounts was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Mounts $mounts
	 * @return void
	 */
	public function editAction(Mounts $mounts) {
		$this->view->assign('mounts', $mounts);
	}

	/**
	 * action update
	 *
	 * @param Mounts $mounts
	 * @return void
	 */
	public function updateAction(Mounts $mounts) {
		$this->mountsRepository->update($mounts);
		$this->flashMessageContainer->add('Your Mounts was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Mounts $mounts
	 * @return void
	 */
	public function deleteAction(Mounts $mounts) {
		$this->mountsRepository->remove($mounts);
		$this->flashMessageContainer->add('Your Mounts was removed.');
		$this->redirect('list');
	}

	/**
	 * injectMountsRepository
	 *
	 * @param MountsRepository $mountsRepository
	 * @return void
	 */
	public function injectMountsRepository(MountsRepository $mountsRepository) {
		$this->mountsRepository = $mountsRepository;
	}

}