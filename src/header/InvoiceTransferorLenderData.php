<?php

namespace Kristianlentino\AutomaticInvoice\header;
use Kristianlentino\AutomaticInvoice\BaseClass;
use Kristianlentino\AutomaticInvoice\enums\FiscalRegimeEnum;

/**
	* Data that will be used to generate the field CedentePrestatore of the invoice's xml
 *  the data of the company that is sending the invoice.
 *
 */
class InvoiceTransferorLenderData extends BaseClass
{
	/** the ISo code of the country of the sender */
	private string $id_country;
	/** usually is the p.iva */
	private string $code;
	/** the business name of the company */
	private string $denomination;
	/** the fiscal regime of the company, it allows only this data:
	 *	RF01 Ordinario;
		RF02 Contribuenti minimi (art. 1, c.96-117, L.244/2007);
	 *  RF04 Agricoltura e attività connesse e pesca (artt. 34 e 34-bis, D.P.R. 633/1972);
		RF05 Vendita sali e tabacchi (art. 74, c.1, D.P.R. 633/1972);
		RF06 Commercio dei fiammiferi (art. 74, c.1, D.P.R. 633/1972);
		RF07 Editoria (art. 74, c.1, D.P.R. 633/1972);
		RF08 Gestione di servizi di telefonia pubblica (art. 74, c.1, D.P.R. 633/1972);
		RF09 Rivendita di documenti di trasporto pubblico e di sosta (art. 74, c.1, D.P.R. 633/1972);
		RF10 Intrattenimenti, giochi e altre attività di cui alla tariffa allegata al D.P.R. n. 640/72 (art. 74, c.6, D.P.R. 633/1972);
		RF11 Agenzie di viaggi e turismo (art. 74-ter, D.P.R. 633/1972);
		RF12 Agriturismo (art. 5, c.2, L. 413/1991);
		RF13 Vendite a domicilio (art. 25-bis, c.6, D.P.R. 600/1973);
		RF14 Rivendita di beni usati, di oggetti d’arte, d’antiquariato o da collezione (art. 36, D.L. 41/1995);
		RF15 Agenzie di vendite all’asta di oggetti d’arte, antiquariato o da collezione (art. 40-bis, D.L. 41/1995);
		RF16 IVA per cassa P.A. (art. 6, c.5, D.P.R. 633/1972);
		RF17 IVA per cassa (art. 32-bis, D.L. 83/2012);
		RF18 Altro;
		RF19 Forfettario (art.1, c. 54-89, L. 190/2014)
	 *
	 *
	 */
	private string $fiscal_regime = FiscalRegimeEnum::ENUM_FISCAL_REGIME_RF04;
	/** @var string $headquarter_address the address of the headquarter of the company that is emitting the invoice  */
	public string $headquarter_address;
	/** @var string $headquarter_civic the civic of the headquarter of the company that is emitting the invoice  */
	public string $headquarter_civic;
	/** @var string $headquarter_cap the CAP (zip code) of the headquarter of the company that is emitting the invoice  */
	public string $headquarter_cap;
	/** @var string $headquarter_city the city of the headquarter of the company that is emitting the invoice  */
	public string $headquarter_city;
	/** @var string $headquarter_province the province of the headquarter of the company that is emitting the invoice  */
	public string $headquarter_province;
	/** @var string $headquarter_nation
	 *
	 *  standard ISO 3166-1 alpha-2 code (example IT for Italy or ES for Spain).
	 */
	public string $headquarter_nation;
}