<?php

declare(strict_types=1);

test('config file is loaded with expected defaults', function () {
    expect(config('filament-newsletter.navigation_group'))->toBe('Newsletter')
        ->and(config('filament-newsletter.navigation_sort'))->toBeNull();
});
