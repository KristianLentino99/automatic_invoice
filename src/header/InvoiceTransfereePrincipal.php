<?php

namespace Kristianlentino\AutomaticInvoice\header;
use Kristianlentino\AutomaticInvoice\BaseClass;

/**
 * Data that will be used to generate the field CessionarioCommittente of the invoice's xml
 *  the data of the user that will receive the invoice.
 *
 */
class InvoiceTransfereePrincipal extends BaseClass
{
	/** standard ISO 3166-1 alpha-2 code (example IT for Italy or ES for Spain). */
	private ?string $id_country;
	/**
	 * usually is the p.iva, if the user is Italian this field will be ignored,
	 * otherwise this field will be filled with 11 zero
	 * if the user is a indivual you can also omit this parameter
	 */
	private ?string $code;
	/**
	 * fiscal code of the individual user, if the user is Italian this field will be filled with the value received,
	 * otherwise this field will be filled with 11 zero
	 * if the user is a juridical person you can also omit this parameter
	 */
	private ?string $fiscal_code;

	/** the business name of the company if the user is a juridical person */
	private ?string $denomination;
	/** the name of the user if the user is a individual person */
	private ?string $name;
	/** the business name of the company if the user is a individual person */
	private ?string $surname;
	public string $address;
	public string $civic;
	/** if the user is not in Italy ,this field can be omittes because it will be filled with 5 zeros */
	public ?string $cap;
	public string $city;
	/** if the user is not in Italy, this field can be omitted beacuse it will be ignored */
	public ?string $province;
	/** @var string $nation
	 *
	 *  standard ISO 3166-1 alpha-2 code (example IT for Italy or ES for Spain).
	 */
	public string $nation;
}