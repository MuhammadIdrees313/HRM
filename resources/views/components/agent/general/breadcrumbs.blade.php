<div class="row m-n1">
    <div class="col-12">
        <div class="page-title-box  my-n3">
            <div class="page-title-right">
                <ol class="breadcrumb m-0 pt-2 pb-2">
                    <li class="breadcrumb-item "><a href="javascript: void(0);">Dashboard</a></li>
                    @forelse($breadcrumbs as $key  => $breadcrumb)
                        @if($loop->last)
                            <li class="breadcrumb-item active ">
                                {{$breadcrumb['title']??''}}
                            </li>
                        @else
                            <li class="breadcrumb-item ">
                                <a href="{{$breadcrumb['url']??'javascript: void(0);'}}">{{$breadcrumb['title']??''}}</a>
                            </li>
                        @endif
                    @empty
                    @endforelse
                </ol>
            </div>
            <h5 class="page-title mt-1">{{$pageTitle??'Home'}}</h5>
        </div>
    </div>
</div>
