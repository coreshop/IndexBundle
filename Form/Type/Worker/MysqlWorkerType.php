<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Bundle\IndexBundle\Form\Type\Worker;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

final class MysqlWorkerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('indexes', CollectionType::class, [
                'entry_type' => MysqlWorkerTableIndexType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('localizedIndexes', CollectionType::class, [
                'entry_type' => MysqlWorkerTableIndexType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'coreshop_index_worker_mysql';
    }
}
