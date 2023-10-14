<nav class="breadcrumbs">
    <ul class="breadcrumb-list">
        @foreach ($items as $item)
        <li class="breadcrumb-item"><a href="{{ $item->url }}">{{ $item->text }}</a></li>
        @endforeach
        @if ($current !== null)
            <li class="breadcrumb-item"><span>{{ $current->text }}</span></li>
        @endif
    </ul>
</nav>
