@if($item->parent_id == null)
    <li {!! $item->getChildren()->count() ? 'class="has-children"' : '' !!}>
        @if($item->title == 'Contact')
            <a href="{{ route('contact') }}">{{ $item->title }}</a>
        @elseif($item->title == 'Assortiment')
            <a href="{{ route('assortment') }}">{{ $item->title }}</a>
        @else
            <a href="{{ route('show', ['name' => $item->title]) }}">{{ $item->title }}</a>
        @endif

        @if($item->getChildren()->count())
            <ul class="nested-ul">
                @foreach($item->getChildren() as $nestedItem)
                    <li><a href="#">{{ $nestedItem->title }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endif
