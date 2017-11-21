@extends('layouts.default')

@section('title', 'Title')

@section('description', 'Description')

@section('content')
<!--
START MODULE AREA 2: Page Title 1 Background
-->
<section class="MOD_PAGETITLEBACKGROUND" data-theme="_bgp">
  <div data-layout="_r">
    <div data-layout="al16">
      <h1>Page Header</h1>
    </div>
  </div>
</section>
<!--
END MODULE AREA 2: Page Title 1 Background
-->

<!--
START MODULE AREA 2: Lightbox
-->
<section class="MOD_LIGHTBOXIMGX4BACKGROUND" data-theme="_bgp">
  <div data-layout="_r">
    @foreach($post as $key => $item)
    <div data-layout="al8 de4">
      <a href="{{$item->path}}" class="AP_lightbox" aria-haspopup="true">
        <figure>
          <img src="{{$item->path}}" alt="" data-theme="_is2">
          <figcaption>Fig{{$key}}. Image Caption</figcaption>
        </figure>
      </a>
    </div>
    @endforeach
  </div>
</section>
<!--
END MODULE AREA 2: Lightbox
-->

<!--
START MODULE AREA 3: CTA Bar 1
-->
<section class="MOD_CTABAR" data-theme="_bgp">
  <div data-layout="_r" class="nopadding">
    <div data-layout="ch10 ec12">
      <p class="MOD_CTABAR_Msg">Lorem ipsum dolor sit amet, consectetur adipi scing elit</p>
    </div>
    <div data-layout="al16 ch6 ec4" class="MOD_CTABAR_BtnContainer">
      <a class="btn" href="{{$post[0]->link_url}}" target="_blank">Read more</a>
    </div>
  </div>
</section>
<!--
END MODULE AREA 3: CTA Bar 1
-->
@endsection