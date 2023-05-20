@extends('front.layouts.master')
@section('content')
  <!-- contact section -->
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-12 contact_form-container">
          <div class="contact_box">
            <h4>اطلب الخدمة الان</h1>
              <form action="{{route('order.form')}}" method="post">
                @csrf
                <input type="text" name="name" required placeholder="اسمك">
                <input type="text" name="email" required placeholder="بريد إلكتروني">
                <input type="text" name="phone" required placeholder="رقم الهاتف">
                <br>
                <label for="" class="b-2">الخدمة</label>
                <select class="form-control" required name="service" id="">
                    <option value="امن خاص">امن خاص</option>
                    <option value="امن الفنادق">امن الفنادق</option>
                    <option value="امن المنازل">امن المنازل</option>
                    <option value="الامن المصرفي">الامن المصرفي</option>
                </select>
                <div>
                  <button type="submit">
                    إرسال
                  </button>
                </div>
              </form>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- end contact section -->
@endsection
