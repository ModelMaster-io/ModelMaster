@extends('app')
@section('content')
<div class="wapper newfuture_block_main">
  <div class="title_main">New & Future Lessons</div>
  <p> This is photoshop's version of rem ipsum geaida nibha<br>  velit autor aliquet aenean sollicitudin.</p>

<div class="newfuture_block">
  <div class="new_future_block_inner">
    <div class="bottom_block">
    <div class="top_block_des">
          <img src="{{ URL::asset('images/Lesson_10.png') }}"/>
           <div class="des_new">
        <div class="des_new_title">Simple 3-Statement<br> Model </div>
        <div class="des_new_price">$40.00</div>
        <a href="javascript:void(0)" class="buy_now_btn">start lesson</a>
      </div>
    </div>
    <div class="top_block_des">
      <img src="{{ URL::asset('images/Lesson_12.png') }}"/>
       <div class="des_new">
        <div class="des_new_title">LBO Lesson 1 - Buying<br> a house </div>
        <div class="des_new_price">$40.00</div>
        <a href="javascript:void(0)" class="buy_now_btn">start lesson</a>
      </div>
    </div>
    <div class="top_block_des">
          <img src="{{ URL::asset('images/Lesson_07.png') }}"/>
           <div class="des_new">
        <div class="des_new_title">LBO Lesson 2 - <br> Understand a Loan </div>
        <div class="des_new_price">$40.00</div>
        <a href="javascript:void(0)" class="buy_now_btn">start lesson</a>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
@endsection