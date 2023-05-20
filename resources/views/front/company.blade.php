@extends('front.layouts.master')
@section('content')

<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%%;
  }
  
  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  
  .container {
    padding: 2px 16px;
  }
  </style>
    <!-- welcome section -->
    <!-- <section class="welcome_section layout_padding">
        <div class="container-fluid">
          <div class="row">
            <div class=" col-md-6">
              <div>
                <img class="img-fluid" src="images/welcome.jpg" alt="" />
              </div>
            </div>
            <div class=" col-md-6">
              <div class="welcome_detail">
                <div class="welcome_detail-btn">
                  <a href="">
                    <span>
                      قراءة المزيد
                    </span>
                    <img src="images/arrow-black.png" alt="" class="ml-2" />
                  </a>
                </div>

                <h3>
                  أهلا بكم
                </h3>
                <h2>
                  في شركة سكيورتي لخدمات الأمن
                </h2>
                <p>
                  لدينا افراد امن وجارد لحمايتك وحماية المنشآت وتأمين المؤتمرات والاحتفالات والشخصيات الهامة. افراد جارد بلياقة بدنية وامانة وخبرة آمنية لسلامة الافراد والمباني والمناسبات والاحتفالات. حراسة افراد ومنشآت. حراسات جارد مدربه. لدينا افراد امن وجارد لحمايتك وحماية المنشآت وتأمين المؤتمرات والاحتفالات والشخصيات الهامة. افراد جارد بلياقة بدنية وامانة وخبرة آمنية لسلامة الافراد والمباني والمناسبات والاحتفالات. حراسة افراد ومنشآت. حراسات جارد مدربه.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    <!-- end welcome section -->

    <!-- service section -->
    {{-- <section class="service_section "> --}}
        <div class="container">
            <div class="service_detail">

                <h2 class="pt-10" style="padding: 3%">
                    الشركات التي تقدم الخدمة</h2>
            </div>

            <div class="row" style="padding-bottom: 2%">
              <div class="col-md-4">
                <div class="card">
                  <img src="{{ asset('images/7327cf7f-2844-4cc9-9d21-9ff151955357.webp') }}" alt="Avatar" style="width:100%">
                  <div class="container" style="text-align: center">
                      <h4><b>شركة المعادي</b></h4>
                      <p>للحراسات الخاصة</p>
                      <a href="{{route('order')}}"><button class="btn btn-primary" type="button" style="margin-bottom:2%">طلب الخدمة</button>
</a>                   </div>
  
              </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="{{ asset('images/71f338c0-d452-47fa-91fa-6b180e2bbbb4.webp') }}" alt="Avatar" style="width:100%">
                  <div class="container" style="text-align: center">
                      <h4><b>سينا مصر </b></h4>
                      <p>للامن والحراسة</p>
                      <a href="{{route('order')}}"><button class="btn btn-primary" type="button"  style="margin-bottom:2%">طلب الخدمة</button></a> 

                  </div>
  
              </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="{{ asset('images/73854a4b-d39b-494c-bbbd-e832fb06f6d6.webp') }}" alt="Avatar" style="width:100%">
                  <div class="container" style="text-align: center">
                      <h4><b>دلتا سيكيورتي سيرفس</b></h4>
                      <p>للامن</p>
                      <a href="{{route('order')}}"><button class="btn btn-primary" type="button" style="margin-bottom:2%">طلب الخدمة</button>
</a>                   </div>
  
              </div>
              </div>

            </div>

            <!-- <div class="service_btn">
            <a href="">
              <span>
                قراءة المزيد
              </span>
              <img src="images/arrow-black.png" alt="" class="ml-2" />
            </a>
          </div> -->
        </div>
    {{-- </section> --}}
    <!-- end service section -->

    <!-- security section -->

    <!-- <section class="security_section layout_padding">
        <h3>
          حماية


        </h3>
        <h2>
          وامان
        </h2>
        <div class="security_container" dir="ltr">
          <div class="carousel-wrap">
            <div class="owl-carousel">
              <div class="item">
                <div class="security_img-box i-box-1">
                  <a href=""> عرض المزيد</a>
                </div>
              </div>
              <div class="item">
                <div class="security_img-box i-box-2">
                  <a href=""> عرض المزيد</a>
                </div>
              </div>
              <div class="item">
                <div class="security_img-box i-box-3">
                  <a href=""> عرض المزيد</a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="security_btn">
          <a href="">
            <span>
              قراءة المزيد
            </span>
            <img src="images/arrow-black.png" alt="" class="ml-2" />
          </a>
        </div>
      </section> -->
    <!-- end security section -->


    <!-- story section -->

    <!-- <section class="layout_padding story_section">
        <div class="container-fluid">
          <div class="row">
            <div class=" col-md-6">
              <div>
                <img class="img-fluid" src="images/security.jpg" alt="" />
              </div>
            </div>
            <div class=" col-md-6 p-5">
              <div class="story_detail">
                <h3>
                  لدينا الكثر من
                </h3>
                <h2>
                  قصص النجاح
                </h2>
                <p>
    منذ بدات شركتنا في عام 1997 ونحن نقوم بدعم الكثير من الشركات والفنادق والمنازل واصحاب الاعمال بافراد الامن الموثوق بهم لحمايتم وحماية ممتلكاتهم وقد قدمنا نجاحا مبهرا في ذللك وايضا امتلكنا سمعة حسنة في مجال الامن والحراسةز نعمل دائما علي مساعدة المجتكع من خلال توفير فرص للشياي للعمل معنا في قطاع الامن ةالادارة وقد استطعنا اشغال الكثير من المتقدمين لوظائفنا بمرتبات مجزيةز
                </p>
                <div class="story_detail-btn">
                  <a href="">
                    <span>
                      قراءة المزيد
                    </span>
                    <img src="images/arrow-black.png" alt="" class="ml-2" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

    <!-- end story section -->

    <!-- contact section -->


    <!-- end contact section -->
@endsection
