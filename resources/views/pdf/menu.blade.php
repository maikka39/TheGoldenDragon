<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ ltrim(mix('css/pdf/menu.css'), '/') }}" rel="stylesheet" type="text/css" />
    <title>Menu | {{ config('app.name') }}</title>
</head>

<body>
    <div class="title">
        <h1>De Gouden Draak</h1>
        <h2>Menu</h2>
    </div>
    <div class="menu_items">
        @foreach ($categories as $category)
            <div>
                <h3>{{ $category->name }}</h3>
                <ul class="items">
                    <ul class="items">
                        @foreach ($category->menuItems()->get() as $item)
                            <div class="menu_item">
                                <div class="main">
                                    <span class="number">{{ $item->number }}{{ $item->number_addition }}.</span>
                                    <h4 class="name">{!! $item->name !!}</h4>
                                    <span class="price">€{{ number_format($item->price, 2) }}</span>
                                    <span class="clear"></span>
                                </div>
                                <p class="description">{!! $item->description !!}</p>
                            </div>
                        @endforeach
                    </ul>
                </ul>
            </div>
        @endforeach
    </div>
    <div class="page-break"></div>
    <div class="title">
        <h2>Aanbiedingen</h2>
    </div>
    <p>Geen aanbiedingen gevonden.</p>
</body>

</html>
