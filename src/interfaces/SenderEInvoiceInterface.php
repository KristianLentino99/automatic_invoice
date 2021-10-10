<?php

namespace Kristianlentino\AutomaticInvoice\interfaces;
use Kristianlentino\AutomaticInvoice\InvoiceTransmissionData;

/**
 * This interface is used to describe the invoice's sender like Acube,Aruba or many other
 *
 */
interface SenderEInvoiceInterface
{
	/**
	 * begin of the data required for the xml field "DatiTrasmissione"
	 *
	 * @return InvoiceTransmissionData
	 */
	public function getTransmissionData();
	/** end of the data required for the xml field "DatiTrasmissione" */
}