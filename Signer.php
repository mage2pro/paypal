<?php
namespace Dfe\Paypal;
/**
 * 2017-04-18
 * @see \Dfe\Paypal\Signer\Request
 * @see \Dfe\Paypal\Signer\Response
 * @method Settings s()
 */
abstract class Signer extends \Df\PaypalClone\Signer {
	/**
	 * 2017-04-18
	 * @used-by sign()
	 * @see \Dfe\Paypal\Signer\Request::values()
	 * @see \Dfe\Paypal\Signer\Response::values()
	 * @return string[]
	 */
	abstract protected function values();

	/**
	 * 2017-04-18
	 * @override
	 * @see \Df\PaypalClone\Signer::sign()
	 * @used-by \Df\PaypalClone\Signer::_sign()
	 * @return string
	 */
	final protected function sign() {return implode($this->values());}
}