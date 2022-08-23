<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Bundle\IndexBundle\DependencyInjection\Compiler;

use CoreShop\Component\Registry\RegisterRegistryTypePass;

class RegisterFilterPreConditionTypesPass extends RegisterRegistryTypePass
{
    public const INDEX_FILTER_PRE_CONDITION_TAG = 'coreshop.filter.pre_condition_type';

    public function __construct()
    {
        parent::__construct(
            'coreshop.registry.filter.pre_condition_types',
            'coreshop.form_registry.filter.pre_condition_types',
            'coreshop.filter.pre_condition_types',
            self::INDEX_FILTER_PRE_CONDITION_TAG
        );
    }
}
