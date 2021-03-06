<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace AppBundle\Repository;

use AppBundle\Entity\Book;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Sylius\Bundle\ResourceBundle\test\src\AppBundle\Repository\BookRepositoryInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

final class BookRepository extends EntityRepository implements BookRepositoryInterface
{
}
