<?php
namespace AK\AkAccordion\Domain\Model\Plugins;

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
 * Domain model for the accordion plugin
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Accordion extends \AK\AkAccordion\Domain\Model\TtContent {
	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<AK\AkAccordion\Domain\Model\AccordionContent>
	 */
	protected $rows;

	/**
	 * Setter for Rows
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $rows
	 * @return void
	 */
	public function setRows($rows) {
		$this->rows = $rows;
	}

	/**
	 * Getter for Rows
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getRows() {
		return $this->rows;
	}
}


?>