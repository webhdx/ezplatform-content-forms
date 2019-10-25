<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformContentForms\Tests\Validator\Constraints;

use EzSystems\EzPlatformContentForms\Validator\Constraints\Password;
use EzSystems\EzPlatformContentForms\Validator\Constraints\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase
{
    /** @var \EzSystems\EzPlatformContentForms\Validator\Constraints\Password */
    private $constraint;

    protected function setUp(): void
    {
        $this->constraint = new Password();
    }

    public function testConstruct()
    {
        $this->assertSame('ez.user.password.invalid', $this->constraint->message);
    }

    public function testValidatedBy()
    {
        $this->assertSame(PasswordValidator::class, $this->constraint->validatedBy());
    }

    public function testGetTargets()
    {
        $this->assertSame([Password::CLASS_CONSTRAINT, Password::PROPERTY_CONSTRAINT], $this->constraint->getTargets());
    }
}
