<div class="my-3">
    <ul>
        @foreach ($comment as $item)
            <li>
                {{ $item->komentar }}
            </li>
        @endforeach
    </ul>
</div>