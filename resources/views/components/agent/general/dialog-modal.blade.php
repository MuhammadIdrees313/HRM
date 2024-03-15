@props(['id' => null, 'maxWidth' => null])

<x-agent.general.modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{ $title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $content }}
        </div>
        @if(isset($footer))
        <div class="modal-footer bg-light">
            {{ $footer??'' }}
        </div>
        @endif
    </div>
</x-agent.general.modal>
