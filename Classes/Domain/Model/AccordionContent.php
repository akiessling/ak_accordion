<?php
namespace AK\AkAccordion\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Andreas Kießling <andreas.kiessling@web.de>
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

/**
 * Domain model for accordion content
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class AccordionContent extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * head
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $head;

	/**
	 * bodytext
	 *
	 * @var \string
	 */
	protected $bodytext;

	/**
	 * image
	 *
	 * @var \string
	 */
	protected $image;

	/**
	 * Returns the head
	 *
	 * @return \string $head
	 */
	public function getHead() {
		return $this->head;
	}

	/**
	 * Sets the head
	 *
	 * @param \string $head
	 * @return void
	 */
	public function setHead($head) {
		$this->head = $head;
	}

	/**
	 * Returns the bodytext
	 *
	 * @return \string $bodytext
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * Sets the bodytext
	 *
	 * @param \string $bodytext
	 * @return void
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
	}

	/**
	 * Returns the image
	 *
	 * @return \string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

}
?>