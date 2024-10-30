@php
    $columns = $this->getColumns();
    $columns = is_int($columns) ? ['default' => $columns] : $columns;
@endphp

@props([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
])

<x-filament-widgets::widget class="fi-wi-stats-overview">
    <x-filament::grid
        :default="$columns['default'] ?? 1"
        :sm="$columns['sm'] ?? null"
        :md="$columns['md'] ?? null"
        :lg="$columns['lg'] ?? ($columns ? (is_array($columns) ? null : $columns) : 2)"
        :xl="$columns['xl'] ?? null"
        :two-xl="$columns['2xl'] ?? null"
        :attributes="\Filament\Support\prepare_inherited_attributes($attributes)->class('fi-wi-stats-overview-stats-ctn gap-6')"
    >
        @foreach ($this->getCachedStats() as $stat)
            {{ $stat }}
        @endforeach
    </x-filament::grid>
</x-filament-widgets::widget>
