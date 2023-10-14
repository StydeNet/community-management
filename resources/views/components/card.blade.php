<div class="card">
    <header class="card-head">
        <h2>{{ $title }}</h2>
        @if($icon)
        <i class="card-icon icon-{{ $icon }}"></i>
        @endif
    </header>
    <div class="card-cont">
        {{ $slot }}
    </div>
</div>
