<th wire:click="setSortBy('{{ $name }}')" class="p-1">
    <button class="btn d-flex align-items-center m-0 p-1 fw-bold  justify-content-between border-0">
        {{ $displayName }}
        @if ($sortBy !== $name)
            <i class="ri-arrow-up-down-fill ms-2"></i>
        @elseif($sortDir === 'ASC')
            <i class="mdi mdi-arrow-down-thin mdi-18px ms-2 text-success"></i>
        @else
            <i class="mdi mdi-arrow-up-thin mdi-18px ms-2 text-success"></i>
        @endif
    </button>
</th>
