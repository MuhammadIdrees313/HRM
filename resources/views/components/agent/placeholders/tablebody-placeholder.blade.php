@for ($i = 0; $i < $rowValue; $i++)
    <div class="card mb-2 w-100">
        <div class="card-body py-2 px-0">
            <div class="row justify-content-sm-between">
                <div class="col-sm-12 mb-2 mb-sm-0">
                    <div class="form-check p-0">
                        <div class="d-flex align-items-center">
                            @for ($j = 0; $j < $columnCount; $j++)
                                <div class="content w-100 placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor


