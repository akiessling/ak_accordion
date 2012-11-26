<?php
namespace AK\AkAccordion\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Georg Ringer <typo3@ringerge.org>
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
 * Basic domain model for tt_content
 * Credits go to Georg Ringer and his inspiring news extension
 * TODO: Fix new relations in TYPO3 6.0, e.g. image
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class TtContent extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
	/**
	 * @var int
	 */
	protected $colPos;

	/**
	 * @var \DateTime
	 */
	protected $crdate;

	/**
	 * @var \DateTime
	 */
	protected $tstamp;

	/**
	 * @var string
	 */
	protected $CType;

	/**
	 * @var string
	 */
	protected $header;

	/**
	 * @var string
	 */
	protected $headerPosition;

	/**
	 * @var string
	 */
	protected $bodytext;

	/**
	 * @var string
	 */
	protected $image;

	/**
	 * @var integer
	 */
	protected $imagewidth;

	/**
	 * @var integer
	 */
	protected $imageorient;

	/**
	 * @var string
	 */
	protected $imagecaption;

	/**
	 * @var integer
	 */
	protected $imagecols;

	/**
	 * @var integer
	 */
	protected $imageborder;

	/**
	 * @var string
	 */
	protected $media;

	/**
	 * @var string
	 */
	protected $layout;

	/**
	 * @var integer
	 */
	protected $cols;

	/**
	 * @var string
	 */
	protected $subheader;

	/**
	 * @var string
	 */
	protected $headerLink;

	/**
	 * @var string
	 */
	protected $imageLink;

	/**
	 * @var bool
	 */
	protected $imageZoom;

	/**
	 * @var string
	 */
	protected $altText;

	/**
	 * @var string
	 */
	protected $titleText;

	/**
	 * @var string
	 */
	protected $headerLayout;

	/**
	 * @var string
	 */
	protected $listType;

	/**
	 * @param string $altText
	 */
	public function setAltText($altText) {
		$this->altText = $altText;
	}

	/**
	 * @return string
	 */
	public function getAltText() {
		return $this->altText;
	}

	/**
	 * @param string $bodytext
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
	}

	/**
	 * @return string
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * @param int $cols
	 */
	public function setCols($cols) {
		$this->cols = $cols;
	}

	/**
	 * @return int
	 */
	public function getCols() {
		return $this->cols;
	}

	/**
	 * @param \DateTime $crdate
	 */
	public function setCrdate($crdate) {
		$this->crdate = $crdate;
	}

	/**
	 * @return \DateTime
	 */
	public function getCrdate() {
		return $this->crdate;
	}

	/**
	 * @param string $header
	 */
	public function setHeader($header) {
		$this->header = $header;
	}

	/**
	 * @return string
	 */
	public function getHeader() {
		return $this->header;
	}

	/**
	 * @param string $headerLayout
	 */
	public function setHeaderLayout($headerLayout) {
		$this->headerLayout = $headerLayout;
	}

	/**
	 * @return string
	 */
	public function getHeaderLayout() {
		return $this->headerLayout;
	}

	/**
	 * @param string $headerLink
	 */
	public function setHeaderLink($headerLink) {
		$this->headerLink = $headerLink;
	}

	/**
	 * @return string
	 */
	public function getHeaderLink() {
		return $this->headerLink;
	}

	/**
	 * @param string $headerPosition
	 */
	public function setHeaderPosition($headerPosition) {
		$this->headerPosition = $headerPosition;
	}

	/**
	 * @return string
	 */
	public function getHeaderPosition() {
		return $this->headerPosition;
	}

	/**
	 * @param string $image
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * @return string
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @param string $imageLink
	 */
	public function setImageLink($imageLink) {
		$this->imageLink = $imageLink;
	}

	/**
	 * @return string
	 */
	public function getImageLink() {
		return $this->imageLink;
	}

	/**
	 * @param boolean $imageZoom
	 */
	public function setImageZoom($imageZoom) {
		$this->imageZoom = $imageZoom;
	}

	/**
	 * @return boolean
	 */
	public function getImageZoom() {
		return $this->imageZoom;
	}

	/**
	 * @param int $imageborder
	 */
	public function setImageborder($imageborder) {
		$this->imageborder = $imageborder;
	}

	/**
	 * @return int
	 */
	public function getImageborder() {
		return $this->imageborder;
	}

	/**
	 * @param string $imagecaption
	 */
	public function setImagecaption($imagecaption) {
		$this->imagecaption = $imagecaption;
	}

	/**
	 * @return string
	 */
	public function getImagecaption() {
		return $this->imagecaption;
	}

	/**
	 * @param int $imagecols
	 */
	public function setImagecols($imagecols) {
		$this->imagecols = $imagecols;
	}

	/**
	 * @return int
	 */
	public function getImagecols() {
		return $this->imagecols;
	}

	/**
	 * @param int $imageorient
	 */
	public function setImageorient($imageorient) {
		$this->imageorient = $imageorient;
	}

	/**
	 * @return int
	 */
	public function getImageorient() {
		return $this->imageorient;
	}

	/**
	 * @param int $imagewidth
	 */
	public function setImagewidth($imagewidth) {
		$this->imagewidth = $imagewidth;
	}

	/**
	 * @return int
	 */
	public function getImagewidth() {
		return $this->imagewidth;
	}

	/**
	 * @param string $layout
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
	}

	/**
	 * @return string
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * @param string $listType
	 */
	public function setListType($listType) {
		$this->listType = $listType;
	}

	/**
	 * @return string
	 */
	public function getListType() {
		return $this->listType;
	}

	/**
	 * @param string $media
	 */
	public function setMedia($media) {
		$this->media = $media;
	}

	/**
	 * @return string
	 */
	public function getMedia() {
		return $this->media;
	}

	/**
	 * @param string $subheader
	 */
	public function setSubheader($subheader) {
		$this->subheader = $subheader;
	}

	/**
	 * @return string
	 */
	public function getSubheader() {
		return $this->subheader;
	}

	/**
	 * @param string $titleText
	 */
	public function setTitleText($titleText) {
		$this->titleText = $titleText;
	}

	/**
	 * @return string
	 */
	public function getTitleText() {
		return $this->titleText;
	}

	/**
	 * @param \DateTime $tstamp
	 */
	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}

	/**
	 * @return \DateTime
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * @param int $colPos
	 */
	public function setColPos($colPos) {
		$this->colPos = $colPos;
	}

	/**
	 * @return int
	 */
	public function getColPos() {
		return $this->colPos;
	}
}

?>