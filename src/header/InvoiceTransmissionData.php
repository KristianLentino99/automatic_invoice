<?php

namespace Kristianlentino\AutomaticInvoice\header;
use Kristianlentino\AutomaticInvoice\BaseClass;

/**
	* Data that will be used to generate the field DatiTrasmissione of the invoice's xml
*/
class InvoiceTransmissionData extends BaseClass
{
	/** the code of the country of the sender, for example for Aruba is IT */
	private string $id_country;
	/** usually is the p.iva */
	private string $code;


	/**
	 * the unique identifier of the invoice, if empty the library will generate it automatically
	 */
	public ?string $transmission_progressive;
	/**
	 * identification code of the type of transmission being carried out and its format, usually it's “FPR12”
	 */
	public string $transmission_format;
	/**
	 * identifies the telematic channel through which the the invoice to be delivered; it must contain an alphanumeric value of 7
	 */
	private string $destinatary_code;
	/**
	 *  phone of the sender
	*/
	public string $sender_phone;
	public string $sender_email;
	/**
	 *  pec of the user that will receive the invoice
	 */
	public string $destinatary_pec;

	/**
	 * @return string
	 */
	public function getIdCountry(): string
	{
		return $this->id_country;
	}

	/**
	 * @param string $id_country
	 */
	public function setIdCountry(string $id_country): void
	{
		$this->id_country = $id_country;
	}

	/**
	 * @return string
	 */
	public function getCode(): string
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 */
	public function setCode(string $code): void
	{
		$this->code = $code;
	}

	/**
	 * @return string|null
	 */
	public function getTransmissionProgressive(): ?string
	{
		return $this->transmission_progressive;
	}

	/**
	 * @param string|null $transmission_progressive
	 */
	public function setTransmissionProgressive(?string $transmission_progressive): void
	{
		$this->transmission_progressive = $transmission_progressive;
	}

	/**
	 * @return string
	 */
	public function getTransmissionFormat(): string
	{
		return $this->transmission_format;
	}

	/**
	 * @param string $transmission_format
	 */
	public function setTransmissionFormat(string $transmission_format): void
	{
		$this->transmission_format = $transmission_format;
	}

	/**
	 * @return string
	 */
	public function getDestinataryCode(): string
	{
		return $this->destinatary_code;
	}

	/**
	 * @param string $destinatary_code
	 */
	public function setDestinataryCode(string $destinatary_code): void
	{
		$this->destinatary_code = $destinatary_code;
	}

	/**
	 * @return string
	 */
	public function getSenderPhone(): string
	{
		return $this->sender_phone;
	}

	/**
	 * @param string $sender_phone
	 */
	public function setSenderPhone(string $sender_phone): void
	{
		$this->sender_phone = $sender_phone;
	}

	/**
	 * @return string
	 */
	public function getSenderEmail(): string
	{
		return $this->sender_email;
	}

	/**
	 * @param string $sender_email
	 */
	public function setSenderEmail(string $sender_email): void
	{
		$this->sender_email = $sender_email;
	}

	/**
	 * @return string
	 */
	public function getDestinataryPec(): string
	{
		return $this->destinatary_pec;
	}

	/**
	 * @param string $destinatary_pec
	 */
	public function setDestinataryPec(string $destinatary_pec): void
	{
		$this->destinatary_pec = $destinatary_pec;
	}
}