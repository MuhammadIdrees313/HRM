<div wire:ignore x-data="{
    value: $wire.entangle('{{ $entangle }}').live,
    options: {{ json_encode($options) }},
    debounce: null,
    itemRemoved: false,
}" x-init="$nextTick(() => {

    const choices = new Choices($refs.select, {
        removeItems: '{{ $multiple }}' ? true : false,
        removeItemButton: '{{ $multiple }}' ? true : false,
        duplicateItemsAllowed: false,
        allowHTML: true,
        placeholderValue: 'Select {{ $label }}',
    })

    const refreshChoices = () => {
        const selection = value
        choices.clearStore()
        choices.setChoices(options.map(({ value, label }) => ({
            value,
            label,
            selected: selection.includes(value),
            disabled: value == 0 ? true : false,
        })))
    }

    $refs.select.addEventListener('change', (e) => {
        if ('{{ $multiple }}') {
            var index = value.indexOf(event.detail.value);
            if (index >= 0) {
                value.splice(index, 1);
            } else {
                value.push(event.detail.value)
            }
            let selectedValues = value;
            $wire.set('{{ $inputName }}', selectedValues);
        } else {
            var selectedValue = event.detail.value;
            $refs.select.addEventListener('removeItem', (e) => {
                itemRemoved = true;
            })
            selectedValue = itemRemoved ? '0' : selectedValue;
            this.debounce = setTimeout(() => {
                $wire.set('{{ $inputName }}', selectedValue)
            }, 300)
            itemRemoved = false;
        }
    })




    $wire.on('{{ $eventName }}', ({
        data
    }) => {
        options = data;
        refreshChoices()
    })

    $watch('value', () => refreshChoices())
    $watch('options', () => refreshChoices())
    document.addEventListener('livewire:navigating', () => {
        choices.destroy()
    })
    refreshChoices()
})">
    <label for="agentId" class="col-3 col-form-label">{{ $label }} *</label>
    <select class="w-full" {{ $multiple ? 'multiple' : '' }} x-ref="select"></select>
</div>
