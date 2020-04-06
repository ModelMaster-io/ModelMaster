@extends('admin.app')

@section('content')

<div class="admin-content">
        <div class="title"><h4>user Management</h4></div>
        <table id="lesson-data" class="table table-striped order-management-table" style="width:100%">
            <div class="Payment-Status">
                <select>
                <option>Payment Status</option>
                <option>pending</option>
                <option>received</option>
            </select>
        </div>
              <thead>
        <tr>
            <th>user ID</th>
            <th>user name</th>
            <th>email</th>
            <th>register data</th>
            <th>active/deactive</th>
            <th>action</th>
        </tr>
    </thead>
     <tbody>
        <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>
           <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>
         <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>
         <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>
         <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>
         <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>
         <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>SophieSlater99@gmail.com</td>
            <td>24/09/19</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive"></td>
            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
        </tr>


    </tbody>
        </table>
    </div>

@endsection