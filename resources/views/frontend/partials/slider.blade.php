
<section class="carousel carousel-slider center mainSlider aa">
    @if($sliders)
        @foreach($sliders as $slider)
            <div class="slider-content">
                <div class="bb">
                    <div class="carousel-item" href="#{{$slider->id}}!" style="background-image: url({{asset('img/' . $slider->image)}});   filter: blur(3px);-webkit-filter: blur(2px);"></div>
                </div>
            </div>
        @endforeach
    @else
        <div class="carousel-item amber indigo-text"
             style="background-image: url({{ asset('frontend/images/real_estate.jpg') }})" href="#1!">
        </div>
    @endif

    {{--    Search Section--}}
    <section class="SerachBarMarigin">
        <div class="container flex-row">
            <div class="row m-b-0">
                <div class="col s12">
                    <form action="{{ route('search')}} " method="GET">
                        <div class="searchbarCustom">
                            <div class="input-field col s12 m4">
                                <input type="text" name="city" id="hero-input" class="autocomplete"
                                       autocomplete="off" placeholder="Enter City or State">
                            </div>

                            <div class="input-field col s12 m4">
                                <select name="type" class="browser-default" id="optionsStyle">
                                   @foreach($propertyTypes as $propertyType)
                                        <option value="{{$propertyType->property_type}}">
                                            {{$propertyType->property_type}}
                                        </option>
                                   @endforeach
                                </select>
                            </div>

                            <div class="input-field col s12 m3">
                                <select name="purpose" class="browser-default" id="optionsStyle">
                                    <option value="" disabled selected>Purpose</option>
                                    <option value="rent">Rent</option>
                                    <option value="sale">Sale</option>
                                </select>
                            </div>
                            <div class="input-field col sm12 " id="searchButtom">
                                <button class="btn btnsearch" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</section>
<section>
    <!-- <div class="row">
        <h1>OR</h1>
        <div class="col-md-4 offset-4">
            <a href="{{route('advertise')}}"><button>Advertise Property</button></a>
        </div>
    </div> -->
</section>