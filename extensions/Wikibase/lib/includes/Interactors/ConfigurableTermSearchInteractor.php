<?php

namespace Wikibase\Lib\Interactors;

/**
 * Interface for TermSearchInteractors that can be configured using TermSearchOptions.
 *
 * @license GPL-2.0+
 */
interface ConfigurableTermSearchInteractor extends TermSearchInteractor {

	public function setTermSearchOptions( TermSearchOptions $termSearchOptions );

}
