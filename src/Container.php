<?php
declare(strict_types=1);
/**
 * Dependency Injection.
 *
 * @author  Nicholas English <https://github.com/Nenglish7>.
 *
 * @link    <https://github.com/elixir-framework/dependency-injection> Github Repository.
 * @license <https://github.com/elixir-framework/dependency-injection/master/LICENSE> MIT License.
 *
 * @copyright Copyright (C) 2018 Elixir Framework
 */

namespace Elixir\DependencyInjection;

use ArrayAccess;
use SplObjectStorage, Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * Container.
 */
class Container implements ContainerInterface, PsrContainerInterface, ArrayAccess
{
    
    /**
     * @var SplObjectStorage $objectStoarge An object stoarge.
     */
    private $objectStoarge = new SplObjectStorage();
}
