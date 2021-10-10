<?php

namespace Kristianlentino\AutomaticInvoice;

class InvoiceDetailRepository
{
	/** @var $details array<InvoiceDetail> */
	private array $details = [];

	/**
	 * @return InvoiceDetail[]
	 */
	public function getDetails(): array
	{
		return $this->details;
	}

	/**
	 * @param InvoiceDetail[] $details
	 * @return InvoiceDetailRepository
	 */
	public function setDetails(array $details): InvoiceDetailRepository
	{
		$this->details = $details;
		return $this;
	}
}