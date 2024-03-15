<div class="rating">
    @for ($i = 0; $i < 5; $i++)
        @if ($i < $rating)
            <i class="ri-star-fill chat-rating"></i>
        @else
            <i class="ri-star-line"></i>
        @endif
    @endfor
</div>
