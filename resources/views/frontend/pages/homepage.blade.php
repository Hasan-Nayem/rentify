@extends('frontend.layout')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    @php $hero = $cmsSections->get('hero'); @endphp
    <section id="section-hero" aria-label="section" class="full-height vertical-center" data-bgimage="url({{ !empty($hero->image2) ? asset($hero->image2) : 'https://www.madebydesignesia.com/themes/rentaly/images/background/7.jpg' }}) bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="spacer-double sm-hide"></div>
                <div class="col-lg-6">
                    <h4><span class="id-color">{{ $hero->title ?? 'Plan your trip now' }}</span></h4>
                    <div class="spacer-10"></div>
                    <h1>{{ $hero->header ?? 'Explore the world with comfortable car' }}</h1>
                    <p class="lead">{{ $hero->description ?? 'Embark on unforgettable adventures and discover the world in unparalleled comfort and style with our fleet of exceptionally comfortable cars.' }}</p>

                    <a class="btn-main" href="#">{{ $hero->btn1 ?? 'Choose a Car' }}</a>&nbsp;&nbsp;&nbsp;<a class="btn-main btn-black" href="{{ $hero->sub_title_one ?? '#' }}">{{ $hero->btn2 ?? 'Get the App' }}</a>
                </div>

                <div class="col-lg-6">
                    @if(!empty($hero->image1))
                        <img src="{{ asset($hero->image1) }}" class="img-fluid" alt="">
                    @else
                        <img src="{{ asset('/frontend/images/misc/car-2.png') }}" class="img-fluid" alt="">
                    @endif
                </div>

            </div>
        </div>
    </section>
    <section id="section-cars" class="no-top">
        <div class="container">
            @php $fleet = $cmsSections->get('fleet'); @endphp
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>{{ $fleet->title ?? 'Our Vehicle Fleet' }}</h2>
                    <p>{{ $fleet->description ?? 'Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable journeys.' }}</p>
                    <div class="spacer-20"></div>
                </div>

                <div class="clearfix"></div>

                <div id="items-carousel" class="owl-carousel wow fadeIn">

                @foreach ($cars as $car)
                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <div class="d-img">
                            <img src="{{ asset($car->image) }}" class="img-fluid" style="max-height: 220px" alt="">
                        </div>
                        <div class="d-info">
                            <div class="d-text">
                                <h4>{{ $car->name }}</h4>
                                <div class="d-item_like">
                                    <i class="fa fa-heart"></i><span>{{ rand(1,200) }}</span>
                                </div>
                                <div class="d-atr-group">
                                    <span class="d-atr"><img src="{{ asset('/frontend/images/icons/1-green.svg') }}" alt="">5</span>
                                    <span class="d-atr"><img src="{{ asset('/frontend/images/icons/2-green.svg') }}" alt="">2</span>
                                    <span class="d-atr"><img src="{{ asset('/frontend/images/icons/3-green.svg') }}" alt="">4</span>
                                    <span class="d-atr text-uppercase"><img src="{{ asset('/frontend/images/icons/4-green.svg') }}" alt="">
                                        {{ $car->car_type }}
                                    </span>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>${{ $car->daily_rent_price }}</span>
                                    <a class="btn-main" href="{{ route('car.details',$car->id) }}">Rent Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                    <!-- <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/bmw-m5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>BMW M2</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>36</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4-green.svg" alt="">Sedan</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$244</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Ferarri Enzo</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>85</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4-green.svg" alt="">Exotic Car</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$167</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/ford-raptor.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Ford Raptor</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>59</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4-green.svg" alt="">Truck</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$147</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/mini-cooper.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Mini Cooper</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>19</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4-green.svg" alt="">Hatchback</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$238</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/vw-polo.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>VW Polo</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>79</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4-green.svg" alt="">Hatchback</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$106</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>
    </section>

    @php $quality = $cmsSections->get('quality'); @endphp
    <section id="section-img-with-tab" data-bgcolor="#f8f8f8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">

                    <h2>{{ $quality->title ?? 'Only Quality For Clients' }}</h2>
                    <div class="spacer-20"></div>

                    @php $tabList = $quality->list ?? [['title'=>'Luxury','description'=>'We offer a meticulously curated collection...'],['title'=>'Comfort','description'=>'We prioritize your comfort...'],['title'=>'Prestige','description'=>'We understand that prestige goes beyond luxury...']] @endphp
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      @foreach($tabList as $i => $item)
                      <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $i == 0 ? 'active' : '' }}" id="pills-{{ $i }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $i }}" type="button" role="tab" aria-controls="pills-{{ $i }}" aria-selected="{{ $i == 0 ? 'true' : 'false' }}">{{ $item['title'] ?? 'Tab ' . ($i+1) }}</button>
                      </li>
                      @endforeach
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      @foreach($tabList as $i => $item)
                      <div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="pills-{{ $i }}" role="tabpanel" aria-labelledby="pills-{{ $i }}-tab"><p>{{ $item['description'] ?? '' }}</p></div>
                      @endforeach
                    </div>

                </div>
            </div>
        </div>

        @php $qualityBg = !empty($quality->image1) ? asset($quality->image1) : 'https://www.madebydesignesia.com/themes/rentaly/images/background/5.jpg' @endphp
        <div class="image-container col-md-6 pull-right" data-bgimage="url({{ $qualityBg }}) center"></div>
    </section>

    @php $features = $cmsSections->get('features'); @endphp
    <section>
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
                <h2>{{ $features->title ?? 'Explore the world with comfortable car' }}</h2>
                <div class="spacer-20"></div>
            </div>
            <div class="col-md-3">
                <i class="fa fa-trophy de-icon mb20"></i>
                <h4>{{ $features->sub_title_one ?? 'First Class Services' }}</h4>
                <p>{{ $features->sub_des_one ?? 'Where luxury meets exceptional care...' }}</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-road de-icon mb20"></i>
                <h4>{{ $features->sub_title_two ?? '24/7 road assistance' }}</h4>
                <p>{{ $features->sub_des_two ?? 'Reliable support when you need it most...' }}</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-map-pin de-icon mb20"></i>
                <h4>{{ $features->sub_title_three ?? 'Free Pick-Up & Drop-Off' }}</h4>
                <p>{{ $features->sub_des_three ?? 'Enjoy free pickup and drop-off services...' }}</p>
            </div>
        </div>
        </div>
    </section>

    @php $testimonials = $cmsSections->get('testimonials'); @endphp
    <section id="section-testimonials" class="no-top no-bottom">
        <div class="container">
            <div class="row">
                @php $testimonialList = $testimonials->sub_list_one ?? [['title'=>'Excellent Service!','description'=>'I have been using Rentaly...','author'=>'Stepanie Hutchkiss'],['title'=>'Excellent Service!','description'=>'We have been using Rentaly...','author'=>'Jovan Reels'],['title'=>'Excellent Service!','description'=>'Endorsed by industry experts...','author'=>'Kanesha Keyton']] @endphp
                @foreach($testimonialList as $i => $item)
                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>{{ $item['title'] ?? 'Excellent Service!' }}</h4>
                            <blockquote>
                               {{ $item['description'] ?? '' }}
                               @if(!empty($item['author']))
                               <span class="by">{{ $item['author'] }}</span>
                               @endif
                           </blockquote>
                        </div>
                        <img src="{{ asset('/frontend/images/testimonial/' . ($i+1) . '.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    @php $news = $cmsSections->get('news'); @endphp
    <section id="section-news">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>{{ $news->title ?? 'Latest News' }}</h2>
                    <p>{{ $news->description ?? 'Breaking news, fresh perspectives, and in-depth coverage - stay ahead with our latest news, insights, and analysis.' }}</p>
                    <div class="spacer-20"></div>
                </div>

                <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">10</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-1.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">12</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="images/news/pic-blog-2.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                        </div>

                <div class="col-lg-4 mb10">
                <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">14</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-3.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-fun-facts" class="bg-color text-light">
        <div class="container">
            <div class="row g-custom-x force-text-center">
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                        Trips Powered
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        Happy Customers
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                        Fleets Vehicle
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                        Years Experience
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#181818">
        <div class="wow fadeInRight d-flex">
          <div class="de-marquee-list">
            <div class="d-item">
              <span class="d-item-txt">SUV</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Hatchback</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Crossover</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Convertible</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Sedan</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Sports Car</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Coupe</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Minivan</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Station Wagon</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Truck</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Minivans</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Exotic Cars</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
             </div>
          </div>

          <div class="de-marquee-list">
            <div class="d-item">
              <span class="d-item-txt">SUV</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Hatchback</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Crossover</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Convertible</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Sedan</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Sports Car</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Coupe</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Minivan</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Station Wagon</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Truck</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Minivans</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
              <span class="d-item-txt">Exotic Cars</span>
              <span class="d-item-display">
                <i class="d-item-dot"></i>
              </span>
             </div>
          </div>
        </div>
    </section>

</div>
<!-- content close -->
@endsection
