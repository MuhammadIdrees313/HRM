<div>
    <div class="col-12" wire:ignore x-data="{
        value: $wire.entangle('{{ $entangle }}').live,
        options: {{ json_encode($options) }},
        debounce: null,
        itemRemoved: false,
    }" x-init="$nextTick(() => {
        const choices = new Choices($refs.select, {
            removeItems: true,
            removeItemButton: true,
            duplicateItemsAllowed: false,
            allowHTML: false,
            placeholder: 'Select {{ $label }}',
        })
        const refreshChoices = () => {
            const selection = value
            choices.clearStore()
            var labelOptions = [];
            for (const label of options) {
                let newOption = {
                    label: label.name,
                    id: label.id,
                    disabled: false,
                    choices: []
                };
                if (label['sub_options'].length > 0) {
                    for (const sub_option of label['sub_options']) {
                        newOption.choices.push({
                            label: sub_option.name,
                            value: sub_option.id,
                            selected: selection.includes(sub_option.id)
                        });
                    }
                }
                labelOptions.push(newOption);
            }
            choices.setChoices(labelOptions,
                'value',
                'label',
                false)
        }
        $refs.select.addEventListener('removeItem', (e) => {
            itemRemoved = true;
        });
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
                selectedValue = itemRemoved ? '0' : selectedValue;
                this.debounce = setTimeout(() => {
                    $wire.set('{{ $inputName }}', selectedValue)
                }, 300)
                itemRemoved = false;
            }
        })
        $refs.select.addEventListener('addItem', (e) => {
            itemRemoved = false;
        });

        $watch('value', () => refreshChoices())
        $watch('options', () => refreshChoices())
        refreshChoices()
        document.addEventListener('livewire:navigating', () => {
            choices.destroy()
        })

    })">
        <label for="{{ $inputName }}" class="col-3 col-form-label">{{ $label }} *</label>
        <select class="w-full" {{ $multiple ? 'multiple' : '' }} x-ref="select"></select>
    </div>
</div>
