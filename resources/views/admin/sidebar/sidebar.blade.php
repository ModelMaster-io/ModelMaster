
<div class="admin-sidebar">
        <ul>
                 

        <li class="{{ request()->is('admin/user') ? 'active' : '' }}"><a href="javascript:void(0)"><img src="{{ asset('admin/image/user-profile.png') }}"/> my profile</a></li>
             <li class="{{ request()->is('admin/lesson') ? 'active' : '' }}"><a href="{{ route('admin.lesson') }}"><img src="{{ asset('admin/image/lesson.png') }}"/> lesson management</a></li>
             <li class="{{ request()->is('admin/lesson/add') ? 'active' : '' }}"><a href="{{ route('admin.lesson.add') }}"> add lesson</a></li>
             <li class="{{ request()->is('admin/order') ? 'active' : '' }}"><a href="{{ route('admin.order') }}"><img src="{{ asset('admin/image/oder.png') }}"/> order management</a></li>
             <li class="{{ request()->is('admin/user') ? 'active' : '' }}"><a href="{{ route('admin.user') }}"><img src="{{ asset('admin/image/user-management.png') }}"/> user management</a></li>
         </ul>
     </div>