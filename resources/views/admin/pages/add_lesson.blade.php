@extends('admin.app')
@section('content')
<div class="admin-content">
        <div class="title"><h4>add lesson</h4><button><span><i class="fa fa-angle-left" aria-hidden="true"></i></span> list of lesson</button></div>

        <div class="add-lesson-block">
         <div class="add-lesson-form">
            <div class="form-group form-check">
             <img src="{{ asset('admin/image/form-user.png') }}"/><input type="text" placeholder="Lesson name">
           </div>
           <div class="form-group form-check">
             <img src="{{ asset('admin/image/text-file.png') }}"/><textarea placeholder="Enter description"></textarea>
           </div>
           <div class="form-group form-check">
             <img src="{{ asset('admin/image/model-admin.png') }}"/><input type="text" placeholder="Enter lesson price ">
           </div>
         </div>
         <!-- <div class="add-lesson-info">
             <div class="add-lesson-info-inner">
                 <div class="add-lesson-info-count"><span>1</span></div>
                     <div class="add-lesson-info_des">
                         This is Photoshop's version  of lorem Ipsdgin gravida nibh vel velit auctor alique aenean licitudin.
                     </div>
             </div>
               <div class="add-lesson-info-inner">
                 <div class="add-lesson-info-count"><span>2</span></div>
                     <div class="add-lesson-info_des">
                         This is Photoshop's version  of lorem Ipsdgin gravida nibh vel velit auctor alique aenean licitudin.
                     </div>
             </div>
               <div class="add-lesson-info-inner">
                 <div class="add-lesson-info-count"><span>3</span></div>
                     <div class="add-lesson-info_des">
                         This is Photoshop's version  of lorem Ipsdgin gravida nibh vel velit auctor alique aenean licitudin.
                     </div>
             </div>
         </div> -->
        </div>
     </div>
@endsection