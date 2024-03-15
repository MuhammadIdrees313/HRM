@props(['disabled' => false,'type' => 'text','inputName' => '','label' => '', 'modelName' => ''])
<div
x-data="{
        value: '',
        handleChange(event) {
            this.value = event.target.value;
            @this.set('{{ $modelName }}', this.value);
        }
    }">
    <div class="col-12">
        <label for="{{$inputName}}" class="col-6 col-form-label">{{$label}} *</label>
        <input
        x-model="value"
        x-on:input="handleChange($event)"
        type="{{$type}}"  
        name="{{$inputName}}"
        id="{{$inputName}}"
        class ='border focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-100 choices__input p-2'
        >
    </div>
</div>
