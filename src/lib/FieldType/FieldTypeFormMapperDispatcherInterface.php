<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformContentForms\FieldType;

use EzSystems\EzPlatformContentForms\Data\Content\FieldData;
use Symfony\Component\Form\FormInterface;

/**
 * FieldType mappers dispatcher. Maps Field (definition, value) data to a Form using the appropriate mapper.
 */
interface FieldTypeFormMapperDispatcherInterface
{
    /**
     * Adds a new Field mapper for a fieldtype identifier.
     *
     * @param \EzSystems\EzPlatformContentForms\FieldType\FieldValueFormMapperInterface
     * @param string $fieldTypeIdentifier fieldType identifier this mapper is for
     *
     * @return mixed
     */
    public function addMapper(FieldValueFormMapperInterface $mapper, string $fieldTypeIdentifier): void;

    /**
     * Maps, if a mapper is available for the fieldtype, $data to $form.
     *
     * @param \Symfony\Component\Form\FormInterface $form
     * @param \EzSystems\EzPlatformContentForms\Data\Content\FieldData $data
     *
     * @throws \InvalidArgumentException If $data is not a FieldData or FieldDefinitionData
     */
    public function map(FormInterface $form, FieldData $data): void;
}
