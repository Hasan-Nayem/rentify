@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">CMS</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('backend.cms.index') }}"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Edit {{ $sectionEnum->label() }}</li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
      <a href="{{ route('backend.cms.index') }}" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Back to Sections
      </a>
    </div>
  </div>
<div class="card">
    <div class="card-header py-3">
      <h6 class="mb-0">{{ $sectionEnum->label() }}</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3" method="POST" action="{{ route('backend.cms.update') }}" enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" name="page" value="{{ $pageEnum->value }}">
                 <input type="hidden" name="section" value="{{ $sectionEnum->value }}">

                 {{-- ====== TOP BAR ====== --}}
                 @if($sectionEnum->value == 'top_bar')
                   <div class="col-12">
                     <label class="form-label">Phone Number</label>
                     <input type="text" name="title" class="form-control" placeholder="+208 333 9296" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="col-6">
                     <label class="form-label">Email</label>
                     <input type="text" name="sub_title_one" class="form-control" placeholder="contact@rentaly.com" value="{{ old('sub_title_one', $data->sub_title_one ?? '') }}">
                   </div>
                   <div class="col-6">
                     <label class="form-label">Working Hours</label>
                     <input type="text" name="sub_title_two" class="form-control" placeholder="Mon - Fri 08.00 - 18.00" value="{{ old('sub_title_two', $data->sub_title_two ?? '') }}">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Facebook URL</label>
                     <input type="text" name="btn1" class="form-control" placeholder="https://facebook.com/..." value="{{ old('btn1', $data->btn1 ?? '') }}">
                   </div>
                   <div class="col-6">
                     <label class="form-label">Twitter URL</label>
                     <input type="text" name="btn2" class="form-control" placeholder="https://twitter.com/..." value="{{ old('btn2', $data->btn2 ?? '') }}">
                   </div>
                   <div class="col-6">
                     <label class="form-label">YouTube URL</label>
                     <input type="text" name="header" class="form-control" placeholder="https://youtube.com/..." value="{{ old('header', $data->header ?? '') }}">
                   </div>
                 @endif

                 {{-- ====== HERO SECTION ====== --}}
                 @if($sectionEnum->value == 'hero')
                   <div class="col-12">
                     <label class="form-label">Sub Header (Tagline)</label>
                     <input type="text" name="title" class="form-control" placeholder="Plan your trip now" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Main Header</label>
                     <input type="text" name="header" class="form-control" placeholder="Explore the world with comfortable car" value="{{ old('header', $data->header ?? '') }}">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Description</label>
                     <textarea name="description" class="form-control" rows="3" placeholder="Hero section description">{{ old('description', $data->description ?? '') }}</textarea>
                   </div>
                   <div class="col-4">
                     <label class="form-label">Button 1 Text</label>
                     <input type="text" name="btn1" class="form-control" placeholder="Choose a Car" value="{{ old('btn1', $data->btn1 ?? '') }}">
                   </div>
                   <div class="col-4">
                     <label class="form-label">Button 2 Text</label>
                     <input type="text" name="btn2" class="form-control" placeholder="Get the App" value="{{ old('btn2', $data->btn2 ?? '') }}">
                   </div>
                   <div class="col-4">
                     <label class="form-label">Button 2 Link</label>
                     <input type="text" name="sub_title_one" class="form-control" placeholder="# or URL" value="{{ old('sub_title_one', $data->sub_title_one ?? '') }}">
                   </div>
                   <div class="col-6">
                     <label class="form-label">Car Image</label>
                     <input type="file" name="image1" class="form-control" accept="image/*">
                     @if(!empty($data->image1))
                       <div class="mt-2">
                         <img src="{{ asset($data->image1) }}" style="max-height:80px;" class="border rounded p-1">
                       </div>
                     @endif
                   </div>
                   <div class="col-6">
                     <label class="form-label">Background Image</label>
                     <input type="file" name="image2" class="form-control" accept="image/*">
                     @if(!empty($data->image2))
                       <div class="mt-2">
                         <img src="{{ asset($data->image2) }}" style="max-height:80px;" class="border rounded p-1">
                       </div>
                     @endif
                   </div>
                 @endif

                 {{-- ====== FLEET SECTION ====== --}}
                 @if($sectionEnum->value == 'fleet')
                   <div class="col-12">
                     <label class="form-label">Title</label>
                     <input type="text" name="title" class="form-control" placeholder="Our Vehicle Fleet" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Description</label>
                     <textarea name="description" class="form-control" rows="3" placeholder="Fleet description">{{ old('description', $data->description ?? '') }}</textarea>
                   </div>
                 @endif

                 {{-- ====== QUALITY SECTION ====== --}}
                 @if($sectionEnum->value == 'quality')
                   <div class="col-12">
                     <label class="form-label">Title</label>
                     <input type="text" name="title" class="form-control" placeholder="Only Quality For Clients" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Section Image (Background)</label>
                     <input type="file" name="image1" class="form-control" accept="image/*">
                     @if(!empty($data->image1))
                       <div class="mt-2">
                         <img src="{{ asset($data->image1) }}" style="max-height:80px;" class="border rounded p-1">
                       </div>
                     @endif
                   </div>
                   <div class="col-12">
                     <hr>
                     <h6 class="fw-bold">Tab Items (Luxury / Comfort / Prestige)</h6>
                     <div class="row g-3 repeater">
                       @php $list = old('list', $data->list ?? [['title'=>'','description'=>''],['title'=>'','description'=>''],['title'=>'','description'=>'']]) @endphp
                       @foreach($list as $i => $item)
                         <div class="col-md-4">
                           <label class="form-label">Tab #{{ $i+1 }} Title</label>
                           <input type="text" name="list[{{ $i }}][title]" class="form-control mb-2" placeholder="Luxury" value="{{ $item['title'] ?? '' }}">
                           <label class="form-label">Tab #{{ $i+1 }} Description</label>
                           <textarea name="list[{{ $i }}][description]" class="form-control" rows="3" placeholder="Description">{{ $item['description'] ?? '' }}</textarea>
                         </div>
                       @endforeach
                     </div>
                   </div>
                 @endif

                 {{-- ====== FEATURES SECTION ====== --}}
                 @if($sectionEnum->value == 'features')
                   <div class="col-12">
                     <label class="form-label">Main Title</label>
                     <input type="text" name="title" class="form-control" placeholder="Explore the world with comfortable car" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="row">
                     @for($i = 1; $i <= 3; $i++)
                       @php
                         $titleKey = match($i){1=>'sub_title_one',2=>'sub_title_two',3=>'sub_title_three'};
                         $descKey = match($i){1=>'sub_des_one',2=>'sub_des_two',3=>'sub_des_three'};
                         $imgKey = match($i){1=>'sub_image_one',2=>'sub_image_two',3=>'sub_image_three'};
                       @endphp
                       <div class="col-md-4">
                         <label class="form-label">Feature #{{ $i }} Title</label>
                         <input type="text" name="{{ $titleKey }}" class="form-control mb-2" placeholder="Feature title" value="{{ old($titleKey, $data->$titleKey ?? '') }}">
                         <label class="form-label">Feature #{{ $i }} Description</label>
                         <textarea name="{{ $descKey }}" class="form-control mb-2" rows="3" placeholder="Feature description">{{ old($descKey, $data->$descKey ?? '') }}</textarea>
                       </div>
                     @endfor
                   </div>
                 @endif

                 {{-- ====== NEWS SECTION ====== --}}
                 @if($sectionEnum->value == 'news')
                   <div class="col-12">
                     <label class="form-label">Title</label>
                     <input type="text" name="title" class="form-control" placeholder="Latest News" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="col-12">
                     <label class="form-label">Sub Title / Description</label>
                     <textarea name="description" class="form-control" rows="2" placeholder="News section description">{{ old('description', $data->description ?? '') }}</textarea>
                   </div>
                 @endif

                 {{-- ====== TESTIMONIALS SECTION ====== --}}
                 @if($sectionEnum->value == 'testimonials')
                   <div class="col-12">
                     <label class="form-label">Section Title</label>
                     <input type="text" name="title" class="form-control" placeholder="Happy Customers" value="{{ old('title', $data->title ?? '') }}">
                   </div>
                   <div class="col-12">
                     <hr>
                     <h6 class="fw-bold">Testimonials (Up to 3)</h6>
                     <div class="row g-3">
                       @php
                         $testimonials = old('sub_list_one', $data->sub_list_one ?? [
                           ['title'=>'', 'description'=>'', 'image'=>null],
                           ['title'=>'', 'description'=>'', 'image'=>null],
                           ['title'=>'', 'description'=>'', 'image'=>null],
                         ]);
                       @endphp
                       @foreach($testimonials as $i => $item)
                         <div class="col-md-4">
                           <label class="form-label">Testimonial #{{ $i+1 }} Title</label>
                           <input type="text" name="sub_list_one[{{ $i }}][title]" class="form-control mb-2" placeholder="Excellent Service!" value="{{ $item['title'] ?? '' }}">
                           <label class="form-label">Testimonial #{{ $i+1 }} Quote</label>
                           <textarea name="sub_list_one[{{ $i }}][description]" class="form-control mb-2" rows="3" placeholder="Testimonial quote">{{ $item['description'] ?? '' }}</textarea>
                           <label class="form-label">Author Name</label>
                           <input type="text" name="sub_list_one[{{ $i }}][author]" class="form-control mb-2" placeholder="Author name" value="{{ $item['author'] ?? '' }}">
                         </div>
                       @endforeach
                     </div>
                   </div>
                 @endif

                 <div class="col-12 mt-4">
                   <div class="d-grid">
                     <button class="btn btn-primary"><i class="bi bi-check-lg me-2"></i>Save {{ $sectionEnum->label() }}</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>
@endsection
