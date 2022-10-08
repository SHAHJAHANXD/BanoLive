    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="">
    <title>{!! $Settings->meta_title !!}</title>
    <base href="{{url('/')}}">

    <meta name="description" content="{!! $Settings->meta_title !!}" />
    <meta name="keywords" content="{!! $Settings->meta_keywords !!}" />

    <meta property="og:url"           content="https://banolive.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{!! $Settings->meta_title !!}" />
    <meta property="og:description"   content="{!! $Settings->meta_description !!}" />
    <meta property="og:image"         content="{!! $Settings->thumbnail !!}" />
