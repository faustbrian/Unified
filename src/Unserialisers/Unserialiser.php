<?php

declare(strict_types=1);

/*
 * This file is part of Unified.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Unified\Unserialisers;

/**
 * Interface Unserialiser.
 */
interface Unserialiser
{
    /**
     * @param string $input
     *
     * @return mixed
     */
    public function unserialise(string $input);
}
