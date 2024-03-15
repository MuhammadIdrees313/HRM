<div wire:ignore x-data="{
    value: '',
    options: {{ json_encode($options) }},
    debounce: null,
    itemRemoved: false,
}" x-init="$nextTick(() => {
    const choices = new Choices($refs.select, {
        removeItems: true,
        removeItemButton: true,
        duplicateItemsAllowed: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: 'Select {{ $label }}',
    })
    const refreshChoices = () => {
        const selection = value
        choices.clearStore()
        choices.setChoices(options.map(({ value, label }) => ({
            value,
            label,
            selected: false,
            disabled: value == 0 ? true : false,
        })))
    }
    $refs.select.addEventListener('removeItem', (e) => {
        itemRemoved = true;
    });

    $refs.select.addEventListener('change', (e) => {
        var selectedValue = event.detail.value;
        selectedValue = itemRemoved ? '0' : selectedValue;
        if(selectedValue !== '0'){
        cannedMessage(selectedValue);
        }
    })

    $refs.select.addEventListener('addItem', (e) => {
        itemRemoved = false;
    });
    $watch('value', () => refreshChoices())
    $watch('options', () => refreshChoices())
    document.addEventListener('livewire:navigating', () => {
        choices.destroy()
    })
    refreshChoices()
})">
    @if($label)
        <label for="agentId" class="col-3 col-form-label">{{ $label }} *</label>
    @endif
    <select class="w-full" x-ref="select"></select>
</div>
