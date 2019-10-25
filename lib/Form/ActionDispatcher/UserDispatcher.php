<?php
/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace EzSystems\EzPlatformContentForms\Form\ActionDispatcher;

use EzSystems\EzPlatformContentForms\Event\ContentFormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserDispatcher extends AbstractActionDispatcher
{
    protected function configureOptions(OptionsResolver $resolver)
    {
    }

    protected function getActionEventBaseName()
    {
        return ContentFormEvents::USER_EDIT;
    }
}
