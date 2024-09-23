@foreach ($cars as $item)
    <div class="col-lg-12">
        <div class="de-item-list mb30">
            <div class="d-img">
                <img src="{{ asset($item->image) }}" class="img-fluid" style="max-width: 150px" alt="">
            </div>
            <div class="d-info">
                <div class="d-text">
                    <h4>{{ $item->name }}</h4>
                    <ul class="d-atr">
                        <li><span>Brand:</span>{{ $item->brand }}</li>
                        <li><span>Model:</span>{{ $item->model }}</li>
                        <li><span>Type:</span>{{ $item->car_type }}</li>
                        <li><span>Fuel:</span>{{ rand(0, 1) ? 'Petrol' : 'Electric' }}</li>
                        <li><span>Daily Rate:</span>{{ $item->daily_rent_price }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach
