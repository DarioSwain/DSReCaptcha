<?php
/*
* This file is part of the DSReCaptcha Component.
*
* (c) Ilya Pokamestov
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace DS\Component\ReCaptcha\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * ReCaptcha Constraint.
 *
 * @author Ilya Pokamestov <dario_swain@yahoo.com>
 */
class ReCaptchaConstraint extends Constraint
{
	/** @var string */
	public $message = 'ds.recaptcha.invalid';

	/** @return string */
	public function validatedBy()
	{
		return 'ds.re_captcha_validator';
	}
}