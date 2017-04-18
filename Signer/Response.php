<?php
namespace Dfe\Paypal\Signer;
// 2017-04-18
final class Response extends \Dfe\Paypal\Signer {
	/**
	 * 2017-04-18
	 * @override
	 * @see \Dfe\Paypal\Signer::values()
	 * @used-by \Dfe\Paypal\Signer::sign()
	 * @return string[]
	 */
	protected function values() {return dfa_select_ordered($this->v(), []);}
}