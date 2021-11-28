@foreach($urls as $item)
    <link rel="alternate" href="{{ $item['url'] }}" hreflang="{{ $item['lang_code'] }}" />
@endforeach
