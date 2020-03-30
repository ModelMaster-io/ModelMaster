@extends('admin.app')
@section('content')
<div class="admin-content">
        <div class="title"><h4>add lesson</h4><button><span><i class="fa fa-angle-left" aria-hidden="true"></i></span> list of lesson</button></div>
        
        <form id="frm-contact" action="" method="POST">
         @csrf

        <div class="add-lesson-block">
         <div class="add-lesson-form">
            <div class="form-group form-check">
             <input type="text" name="name" placeholder="Lesson name">
           </div>
           <div class="form-group form-check">
             <textarea name="description" placeholder="Description"></textarea>
           </div>
           <div class="form-group form-check">
             <input type="text" name="price" placeholder="Price ">
           </div>
           <div class="form-group form-check">
             <textarea name="lesson" placeholder="Enter lesson"></textarea>
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
        <div class="add-lsn-btn-blk">
           <input type="button" class="mm-btn-cls" value="Add Lesson">
         </div>

       </form>

     </div>
@endsection