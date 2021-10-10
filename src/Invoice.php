<?php

namespace Kristianlentino\AutomaticInvoice;

class Invoice
{
	/**
	 * Constants for root element ("FatturaElettronica")
	 */
	const ROOT_TAG_PREFIX = 'p';
	const ROOT_TAG_NAME   = 'FatturaElettronica';
	const ROOT_NAMESPACE  = 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2';
	const SCHEMA_LOCATION = 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 '
	. 'http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa'
	. '/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd';
	public InvoiceHeader $invoiceHeader;
}