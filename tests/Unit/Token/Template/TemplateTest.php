<?php

declare(strict_types=1);

namespace Biscuit\BiscuitBundle\Tests\Unit\Token\Template;

use Biscuit\BiscuitBundle\Token\Template\Template;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Template::class)]
final class TemplateTest extends TestCase
{
    #[Test]
    public function fromArrayNormalisesMissingKeysToEmptyLists(): void
    {
        $template = Template::fromArray(['checks' => ['check if true']]);

        self::assertSame([], $template->facts);
        self::assertSame(['check if true'], $template->checks);
        self::assertSame([], $template->rules);
    }
}
