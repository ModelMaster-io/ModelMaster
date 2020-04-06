@extends('admin.app')
@section('content')
<div class="admin-content">
        <div class="title"><h4>lesson management</h4><button><span>+</span> add lesson</button></div>
        <table id="lesson-data" class="table table-striped" style="width:100%">
            <div class="price">
                <select>
                <option>price</option>
                <option>$12.22</option>
                <option>$12.22</option>
                <option>$12.22</option>
            </select>
        </div>
              <thead>
        <tr>
            <th>No</th>
            <th>lesson name</th>
            <th>lesson uploaded url </th>
            <th>price </th>
            <th>action</th>
        </tr>
    </thead>
     <tbody>
        <tr>
            <td>1</td>
            <td>The principles of scientific management</td>
            <td><a>http://thoughttless-rabbit.w6.wpsandbox.pro</a></td>
            <td>$26.55</td>
           <td>
            <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>2</td>
            <td>Swim with the sharks without being eaten alive</td>
            <td><a>https://api.uploadcare.com/convert/document</a></td>
            <td>$25.45</td>
            <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>3</td>
            <td>Leadership and self deception</td>
            <td><a>https://upload.uploadcare.com/from_url</a></td>
            <td>$20.25</td>
             <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>4</td>
            <td>The five dysfunctions of a team</td>
            <td><a>http://document/format/jpg/-/page/1</a></td>
            <td>$35.65</td>
         <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
           <tr>
            <td>5</td>
            <td>Competing for the future</td>
            <td><a>https://upload.uploadcare.com/from_url/status</a></td>
            <td>$26.55</td>
            <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>The principles of scientific management</td>
            <td><a>http://thoughttless-rabbit.w6.wpsandbox.pro</a></td>
            <td>$26.55</td>
           <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>7</td>
            <td>Swim with the sharks without being eaten alive</td>
            <td><a>https://api.uploadcare.com/convert/document</a></td>
            <td>$25.45</td>
            <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>8</td>
            <td>Leadership and self deception</td>
            <td><a>https://upload.uploadcare.com/from_url</a></td>
            <td>$20.25</td>
             <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>9</td>
            <td>The five dysfunctions of a team</td>
            <td><a>http://document/format/jpg/-/page/1</a></td>
            <td>$35.65</td>
         <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
           <tr>
            <td>10</td>
            <td>Competing for the future</td>
            <td><a>https://upload.uploadcare.com/from_url/status</a></td>
            <td>$26.55</td>
            <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
        <tr>
            <td>11</td>
            <td>The principles of scientific management</td>
            <td><a>http://thoughttless-rabbit.w6.wpsandbox.pro</a></td>
            <td>$26.55</td>
           <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>12</td>
            <td>Swim with the sharks without being eaten alive</td>
            <td><a>https://api.uploadcare.com/convert/document</a></td>
            <td>$25.45</td>
            <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>13</td>
            <td>Leadership and self deception</td>
            <td><a>https://upload.uploadcare.com/from_url</a></td>
            <td>$20.25</td>
             <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
          <tr>
            <td>14</td>
            <td>The five dysfunctions of a team</td>
            <td><a>http://document/format/jpg/-/page/1</a></td>
            <td>$35.65</td>
         <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
           <tr>
            <td>15</td>
            <td>Competing for the future</td>
            <td><a>https://upload.uploadcare.com/from_url/status</a></td>
            <td>$26.55</td>
            <td>
                <a class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a><span class="divider">|</span>  <a class="btn-action"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
        </table>
    </div>
@endsection