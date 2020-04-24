@extends('app')
@section('content')
<div class="wapper newfuture_block_main">
  <div class="title_main">Lessons</div>
  <p>New lessons to be added every few weeks</p>

<div class="newfuture_block">
  <div class="new_future_block_inner">
    <div class="bottom_block">
    @foreach($lessonlist as $lesson)
    <div class="top_block_des">
          <img src="{{ URL::asset('images/Lesson_10.png') }}"/>
           <div class="des_new">
        <!-- <div class="des_new_title">Simple 3-Statement<br> Model </div> -->
        <div class="des_new_title">{{$lesson->name}}</div>
        <a href="{{ route('single-lesson', encrypt($lesson->id)) }}" class="buy_now_btn">{{App\LessonSteps::userLessonStatus($lesson->id)}}</a>
      </div>
    </div>
    @endforeach
    </div>
  </div>
</div>
</div>
@endsection