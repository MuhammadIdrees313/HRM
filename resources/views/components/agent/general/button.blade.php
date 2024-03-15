<button wire:click="{{ $click }}" wire:loading.attr="disabled" class="{{ $class }}" {{ $attribute }}>
    <span wire:loading.remove wire:target="{{ $target }}">{!! $icon ? '<i class="' . $icon . '"></i>' : '' !!}{{ $text ?? '' }}</span>
    <span wire:loading wire:target="{{ $target }}" class="spinner-border spinner-border-sm me-1" role="status"
        aria-hidden="true"></span>
</button>
