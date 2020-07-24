<?php 
    $menu = [
        'Childcare Cleaning' => 'childcare-cleaning-services',
        'Cinema & Theatre Cleaning' => 'cinema-theatre-cleaning-services',
        'Commercial Cleaning' => 'commercial-cleaning-services',
        'Gym & Sporting Complex Cleaning' => 'gym-sporting-complex-cleaning-services',
        'Places of Worship Cleaning' => 'worship-places-cleaning-services',
        'Office Cleaning' => 'office-cleaning-services',
        'Retail & Shoping Complex Cleaning' => 'retail-shopping-complex-cleaning-services',
        'School & University Cleaning' => 'school-university-cleaning-services',
];
?>
@foreach ($menu as $key => $item)
    @if (\Request::is($item))
        <li class="nav-item active">
            <a class="nav-link" href="/clean-services/{{$item}}">{{$key}} <span class="sr-only">(current)</span></a>
        </li>
    @else
        <li class="nav-item ">
            <a class="nav-link" href="/clean-services/{{$item}}">{{$key}} <span class="sr-only">(current)</span></a>
        </li>
    @endif

@endforeach
