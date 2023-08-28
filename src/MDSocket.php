<?php
/**
 * This file is part of MDSocket.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    mdMandoinfo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace MDSocket;

class MDSocket
{
    /**
     * Version.
     *
     * @var string
     */
    public const VERSION = '0.0.1-beta.1';

    /**
     * Name of the MDSocket processes.
     *
     * @var string
     */
    public string $name = 'MDSocket';

    /**
     * Number of MDSocket processes.
     *
     * @var int
     */
    public int $count = 1;

    public static function run(): void
    {
    }

    protected static function displayUI(): void
    {
    }

}
