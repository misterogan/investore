@extends('frontend.layout.nav')

@section('css')

@endsection

@section('content')
<div class="clear-fix" style="padding: 30px 0;overflow: hidden;">
</div>

<section id="contact" class="contact step step1">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <header class="section-header">
      <p>Tujuan Investasi Kamu {{$title}}</p>
    </header>
      <div class="row">
      <form class="row g-3">
          <div class="row step1">
            
            <div class="col-md-6">
              <label for="validationDefault01" class="form-label">Judul Tujuan Investasi</label>
              <input type="text" class="form-control" id="validationDefault01" required>
            </div>

            <div class="col-md-3">
            <label for="validationDefaultUsername" class="form-label">Kapan Kamu Membutuhkan</label>
              <div class="input-group">
              <input class="form-control date-planning" type="date">
                <span class="input-group-text" id="date-planning-label">0 bulan</span>
              </div>
            </div>
            
            <div class="col-md-6">
            <label for="validationDefaultUsername" class="form-label">Berapa Nilai yang Kamu Butuhkan</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                <input type="text" class="form-control currency-format" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>

            <div class="col-md-3">
            <label for="validationDefaultUsername" class="form-label">Asumsi Inflasi</label>
              <div class="input-group">
                <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                <span class="input-group-text" id="inputGroupPrepend2">%</span>
              </div>
            </div>

            <div class="col-md-6">
              <label for="validationDefault02" class="form-label">Perkiraan Nilai Masa Depan</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                <input type="text" class="form-control currency-format" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>

            <div class="col-md-3">
            </div>

            <div class="col-md-6">
              <label for="validationDefault02" class="form-label">Berapa Nilai Investasi Awal Kamu</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                <input type="text" class="form-control currency-format" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>
            
            <div class="col-md-6">
              <label for="validationDefaultUsername" class="form-label">Berapa Nilai Investasi Bulanan Kamu</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                <input type="text" class="form-control currency-format" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>

            <div class="col-md-6">
              <br>
                <h3 style="color: #ff901c;">Nilai Investasi Bulanan Kamu</h3>
                <div class="price"><sup>Rp</sup> 49.000.000<span> / bulan</span></div>
            </div>

          </div>
          <!--<div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>-->
        <div class="col-12 text-align-reight">
          <button class="btn btn-primary" type="submit">Selanjutnya</button>
        </div>
      </form>
      </div>
  </div>
</section>


<section id="contact" class="contact step step2">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <header class="section-header">
      <p>Kenali Profil Resiko Kamu</p>
    </header>
      <div class="row">
      <form class="row g-3">
        <div class="col-6">
        <h3>Total Penghasilan Pertahun</h3>
        @foreach($penghasilan as $index=>$val)
          <div class="form-check">
            <input class="form-check-input" type="radio" name="penghasilan" id="penghasilan{{$index}}">
            <label class="form-check-label" for="penghasilan{{$index}}">
              {{$val}}
            </label>
          </div>
        @endforeach
        </div>

        <div class="col-6">
        <h3>Jenis aset investasi yang dimiliki saat ini</h3>
        @foreach($current_invest as $index=>$val)
          <div class="form-check">
            <input class="form-check-input" type="radio" name="planning" id="current_invest{{$index}}">
            <label class="form-check-label" for="current_invest{{$index}}">
              {{$val}}
            </label>
          </div>
        @endforeach
        </div>

        <div class="col-6">
        <h3>Jika nilai investasi anda turun, maka</h3>
        @foreach($current_invest as $index=>$val)
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="planning{{$index}}">
            <label class="form-check-label" for="planning{{$index}}">
              {{$val}}
            </label>
          </div>
        @endforeach
        </div>

        <div class="col-6">
        <h3>Apa harapan anda pada hasil investasi?</h3>
        @foreach($goal_invest as $index=>$val)
          <div class="form-check">
            <input class="form-check-input" type="radio" name="goal" id="goal{{$index}}">
            <label class="form-check-label" for="goal{{$index}}">
              {{$val}}
            </label>
          </div>
        @endforeach
        </div>        
        <div class="col-12 text-align-reight">
          <button class="btn btn-primary" type="submit">Selanjutnya</button>
        </div>
      </form>
      </div>
  </div>
</section>
@section('js')
<script src="{{url('/assets/js/utils.js')}}" type="application/javascript" ></script>
<script>
  $(document).on('keyup' , '.currency-format' , function(){
    
    var number = $(this).val();
    var rupiah = formatRupiah(number , '');
    $(this).val(rupiah);
  })

  $(document).on('change' , '.date-planning' , function(){
    var str = $(this).val();
    var planning_date = str.split("-");
    $('#date-planning-label').text(monthDiff(new Date(),new Date(str))+' bulan');
    //console.log(monthDiff(new Date(),new Date(str)));
  });
</script>
@endsection

@endsection

