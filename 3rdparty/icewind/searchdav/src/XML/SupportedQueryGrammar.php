<?php declare(strict_types=1);
/**
 * @copyright Copyright (c) 2017 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace SearchDAV\XML;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class SupportedQueryGrammar implements XmlSerializable {
	const GRAMMAR_BASIC_SEARCH = '{DAV:}basicsearch';

	public function xmlSerialize(Writer $writer): void {
		$writer->startElement('{DAV:}supported-query-grammar');
		$writer->startElement('{DAV:}grammar');
		$writer->startElement(self::GRAMMAR_BASIC_SEARCH);
		$writer->endElement();
		$writer->endElement();
		$writer->endElement();
	}
}
