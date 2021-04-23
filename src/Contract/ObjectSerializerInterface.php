<?php

/**
 * ObjectSerializerInterface.php
 *
 * Copyright 2020 Danny Damsky
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package coffeephp\serialize
 * @author Danny Damsky <dannydamsky99@gmail.com>
 * @since 2020-07-17
 */

declare(strict_types=1);

namespace CoffeePhp\Serialize\Contract;

use CoffeePhp\Serialize\Exception\SerializeException;

/**
 * Interface ObjectSerializerInterface
 * @package coffeephp\serialize
 * @since 2020-07-17
 * @author Danny Damsky <dannydamsky99@gmail.com>
 */
interface ObjectSerializerInterface
{
    /**
     * Serialize the given class into a binary string.
     *
     * @throws SerializeException
     */
    public function serializeObject(object $object): string;
}
