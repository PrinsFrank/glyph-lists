<?php declare(strict_types=1);

namespace PrinsFrank\GlyphLists\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\GlyphLists\AGlyphList;

#[CoversClass(AGlyphList::class)]
class AGlyphListTest extends TestCase {
    public function testGetChar(): void {
        static::assertSame('A', AGlyphList::A->getChar());
        foreach (AGlyphList::cases() as $case) {
            static::assertTrue($case->getChar() !== '');
        }
    }
}
