@php
    $total = $sent + $failed;
@endphp

<div class="fi-fo-newsletter-sending-status space-y-4">
    @if ($total === 0)
        <p class="text-sm text-gray-500 dark:text-gray-400">
            {{ __('filament-newsletter::filament-newsletter.actions.sending_status.no_data') }}
        </p>
    @else
        <dl class="grid grid-cols-2 gap-4">
            <div class="rounded-lg border border-gray-200 p-4 dark:border-gray-700">
                <dt class="text-sm text-gray-500 dark:text-gray-400">
                    {{ __('filament-newsletter::filament-newsletter.actions.sending_status.sent') }}
                </dt>
                <dd class="text-2xl font-semibold text-success-600 dark:text-success-400">
                    {{ $sent }}
                </dd>
            </div>

            <div class="rounded-lg border border-gray-200 p-4 dark:border-gray-700">
                <dt class="text-sm text-gray-500 dark:text-gray-400">
                    {{ __('filament-newsletter::filament-newsletter.actions.sending_status.failed') }}
                </dt>
                <dd class="text-2xl font-semibold text-danger-600 dark:text-danger-400">
                    {{ $failed }}
                </dd>
            </div>
        </dl>
    @endif
</div>
