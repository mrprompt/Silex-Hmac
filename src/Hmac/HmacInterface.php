<?php
/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace MrPrompt\Silex\Hmac;

/**
 * HMAC validation service
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 * @author Marcel Araujo <admin@marcelaraujo.me>
 */
interface HmacInterface
{
    /**
     * @var string
     */
    const HMAC_VALIDATE_REQUEST = 'service.http.hmac';
}
