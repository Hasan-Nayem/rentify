@extends('frontend.layout')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    {{-- <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('/frontend/images/background/2.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Cars</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section> --}}

    <section id="subheader" class="jarallax text-light bg-white">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-dark">Cars</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-cars">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="item_filter_group">
                        <h4>Car Type</h4>
                        <div class="de_form">

                            <div class="de_checkbox">
                                <input id="car_body_type_4" name="car_body_type_4" type="checkbox" value="car_body_type_4">
                                <label for="car_body_type_4">Hatchback</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_5" name="car_body_type_5" type="checkbox" value="car_body_type_5">
                                <label for="car_body_type_5">Minivan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_6" name="car_body_type_6" type="checkbox" value="car_body_type_6">
                                <label for="car_body_type_6">Truck</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_7" name="car_body_type_7" type="checkbox" value="car_body_type_7">
                                <label for="car_body_type_7">Sedan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_8" name="car_body_type_8" type="checkbox" value="car_body_type_8">
                                <label for="car_body_type_8">Sports Car</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_10" name="car_body_type_10" type="checkbox" value="car_body_type_10">
                                <label for="car_body_type_10">SUV</label>
                            </div>

                        </div>
                    </div>
                    <div class="item_filter_group">
                        <h4>Price ($)</h4>
                          <div class="price-input">
                            <div class="field">
                              <span>Min</span>
                              <input type="number" class="input-min" value="0">
                            </div>
                            <div class="field">
                              <span>Max</span>
                              <input type="number" class="input-max" value="2000">
                            </div>
                          </div>
                          <div class="slider">
                            <div class="progress"></div>
                          </div>
                          <div class="range-input">
                            <input type="range" class="range-min" min="0" max="2000" value="0" step="1">
                            <input type="range" class="range-max" min="0" max="2000" value="2000" step="1">
                          </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">

                        @foreach ($cars as $item)
                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset($item->image) }}" class="img-fluid" style="max-width: 150px" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>{{ $item->name }}</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Brand:</span>{{$item->brand}}</li>
                                                <li><span>Model:</span>{{$item->model}}</li>
                                                <li class="text-sentence"><span>Type:</span>{{$item->car_type}}</li>
                                                <li><span>Avaibility:</span>
                                                    @if ($item->availability)
                                                        <span class="badge bg-primary">Available Now!</span>
                                                    @else
                                                        <span class="badge bg-danger">Not Available</span>
                                                    @endif
                                                </li>
                                                <li><span>Fuel:</span>
                                                @php
                                                    $i = array('Petrol', 'Gas', 'Hybrid', 'Electric');
                                                    echo $i[rand(0, count($i) - 1)];
                                                @endphp
                                                </li>
                                                <li><span>Horsepower:</span>{{rand(500,10000)}}</li>
                                                <li><span>Engine:</span>{{rand(500,10000)}}</li>
                                                {{-- <li><span>Drive:</span>4x4</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>${{$item->daily_rent_price}}</span>
                                    <a class="btn-main" href="{{ route('car.details',$item->id) }}">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.de_checkbox input, .input-min, .input-max').on('change', function () {
            filterCars();
        });

        function filterCars() {
            let carTypes = [];
            $('.de_checkbox input:checked').each(function () {
                carTypes.push($(this).val());
            });


            let minPrice = $('.input-min').val();
            let maxPrice = $('.input-max').val();
            $.ajax({
                url: '{{ route('cars.filter') }}',
                type: 'GET',
                data: {
                    car_types: carTypes,
                    min_price: minPrice,
                    max_price: maxPrice
                },
                success: function (response) {
                    $('.row').html(response);
                }
            });
        }
    });
</script>
<!-- content close -->
@endsection
