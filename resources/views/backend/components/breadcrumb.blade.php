
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>this is pge title</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    @foreach ($links as $link)
                        @if($link['url'])
                            <li class="breadcrumb-item"><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
                        @else
                            <li class="breadcrumb-item active">{{ $link['title'] }}</li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->
