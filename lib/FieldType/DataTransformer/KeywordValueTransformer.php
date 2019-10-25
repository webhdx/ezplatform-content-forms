<?php

/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 *
 * @version //autogentag//
 */
namespace EzSystems\EzPlatformContentForms\FieldType\DataTransformer;

use eZ\Publish\Core\FieldType\Keyword\Value;
use Symfony\Component\Form\DataTransformerInterface;

/**
 * DataTransformer for Keyword\Value.
 */
class KeywordValueTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        if (!$value instanceof Value) {
            return null;
        }

        return implode(', ', $value->values);
    }

    public function reverseTransform($value)
    {
        if (empty($value)) {
            return null;
        }

        return new Value($value);
    }
}
