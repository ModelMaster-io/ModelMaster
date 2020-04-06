@extends('admin.app')
@section('content')
<div class="admin-content">
        <div class="title"><h4>Order Management</h4></div>
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
            <th>Order ID</th>
            <th>user name</th>
            <th>order date</th>
            <th>Payment Status </th>
            <th>invoice</th>
            <th>detail</th>
        </tr>
    </thead>
     <tbody>
        <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>24/04/2019</td>
            <td class="received">received</td>
             <td>
                 #1<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8897</td>
            <td>Joshua Daniel</td>
            <td>24/04/2019</td>
            <td class="pending">pending</td>
             <td>
                #2<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8898</td>
            <td>William Gavin</td>
            <td>24/04/2019</td>
            <td class="received">received</td>
             <td>
                #3<span class="divider">|</span>  
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8899</td>
            <td>Jacob Jack</td>
            <td>24/04/2019</td>
            <td class="received">received</td>
             <td>
                #4<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8896</td>
            <td>Joshua Daniel</td>
            <td>24/04/2019</td>
            <td class="pending">pending</td>
             <td>
                #5<span class="divider">|</span>  
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8896</td>
            <td>William Gavin</td>
            <td>24/04/2019</td>
            <td class="received">received</td>
             <td>
                #6<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>24/04/2019</td>
            <td class="received">received</td>
             <td>
                #7<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8896</td>
            <td>William Gavin</td>
            <td>24/04/2019</td>
            <td class="pending">pending</td>
             <td>
                #8<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8896</td>
            <td>Sophie Slater</td>
            <td>24/04/2019</td>
            <td class="pending"> pending</td>
             <td>
                #9<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>
          <tr>
            <td>8896</td>
            <td>William Gavin</td>
            <td>24/04/2019</td>
            <td class="received">received</td>
             <td>
                #10<span class="divider">|</span> 
                <a class="btn-invoice"><img src="image/download.png"/></a>
            </td>
             <td><img src="image/information-icon.png"/></td>
        </tr>

    </tbody>
        </table>
    </div>
@endsection()