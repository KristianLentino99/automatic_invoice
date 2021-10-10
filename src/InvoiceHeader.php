<?php

namespace Kristianlentino\AutomaticInvoice;

use Kristianlentino\AutomaticInvoice\header\InvoiceTransfereePrincipal;
use Kristianlentino\AutomaticInvoice\header\InvoiceTransferorLenderData;
use Kristianlentino\AutomaticInvoice\header\InvoiceTransmissionData;

class InvoiceHeader
{

	/* @var $transmission_data InvoiceTransmissionData */
	private $transmission_data;
	/* @var $transferor_lender_data InvoiceTransferorLenderData */
	private $transferor_lender_data;
	/* @var $transferee_principal InvoiceTransfereePrincipal */
	private $transferee_principal;
	
	/**
	 * @return InvoiceTransmissionData
	 */
	public function getTransmissionData(): InvoiceTransmissionData
	{
		return $this->transmission_data;
	}

	/**
	 * @param mixed $transmission_data
	 */
	public function setTransmissionData(InvoiceTransmissionData $transmission_data): InvoiceHeader
	{
		$this->transmission_data = $transmission_data;
		return $this;
	}
	/**
	 * @return InvoiceTransferorLenderData
	 */
	public function getTransferorLenderData(): InvoiceTransferorLenderData
	{
		return $this->transferor_lender_data;
	}

	/**
	 * @param InvoiceTransferorLenderData $transferor_lender_data
	 */
	public function setTransferorLenderData(InvoiceTransferorLenderData $transferor_lender_data): InvoiceHeader
	{
		$this->transferor_lender_data = $transferor_lender_data;
		return $this;
	}

	/**
	 * @return InvoiceTransfereePrincipal
	 */
	public function getTransfereePrincipal(): InvoiceTransfereePrincipal
	{
		return $this->transferee_principal;
	}

	/**
	 * @param InvoiceTransfereePrincipal $transferee_principal
	 * @return InvoiceHeader
	 */
	public function setTransfereePrincipal(InvoiceTransfereePrincipal $transferee_principal): InvoiceHeader
	{
		$this->transferee_principal = $transferee_principal;
		return $this;
	}
}