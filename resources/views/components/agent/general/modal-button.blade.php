<div>
    <button wire:click="{{ $click }}" wire:loading.attr="disabled" class="{{ $class }}">
        <span wire:loading.remove wire:target="{{ $target }}">{{ $text }}</span>
        <span wire:loading wire:target="{{ $target }}" class="spinner-border spinner-border-sm me-1" role="status"
            aria-hidden="true"></span>
    </button>
</div>
