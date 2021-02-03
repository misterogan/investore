@extends('frontend.layout.nav')

@section('css')

@endsection

@section('content')
<div class="clear-fix" style="padding: 30px 0;overflow: hidden;">
</div>

<section id="services" class="services">

<div class="container aos-init aos-animate" data-aos="fade-up">

  <header class="section-header">
    <p>Tujuan Investasi Kamu</p>
  </header>

  <div class="row gy-4">
    <?php $i = 0;
      $icon = ['ri-open-arm-line' ,'ri-user-heart-line','ri-book-open-line' ,'ri-bank-line','ri-money-dollar-circle-line','ri-wheelchair-fill'];
    ?>
    @foreach($invesment as $index=>$val)
    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
      <div class="service-box {{$color[$i]}}">
        <i class="{{$icon[$i]}} icon"></i>
        <h3>{{$val}}</h3>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        <a href="{{url('/invest-calclulator/')}}/{{$index ?? ''}}" class="read-more"><span>Pelajari</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <?php $i++;?>
    @endforeach
  </div>

</div>

</section>
@section('js')

@endsection

@endsection

