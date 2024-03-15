<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <p >{{__("Something went wrong")}}</p>
            <ul class="list-group list-unstyled  ">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif
</div>
