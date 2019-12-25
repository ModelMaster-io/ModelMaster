@extends('app')

@section('scripts_and_styles')
    <link href="{{ asset('css/other_style.css') }}" rel="stylesheet" type="text/css" />



  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@endsection

@section('content')
  <div class="wapper user_profile">
    <div class="title_main">user profile</div>
    <div class="main_login_content">

      <div class="user-sidebar">

        <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
          <li class="nav-item ">
            <img src="images/my_profile.png"/><a  id="my-profile-md" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile" aria-selected="false">my profile</a>
          </li> 
          <li class="nav-item active">
            <img src="images/change_pass.png"/><a  id="change-password-md" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">change password</a>
          </li> 

          <li class="nav-item">
            <img src="images/my_order.png"/><a  id="order-tab-md" data-toggle="tab" href="#order-md" role="tab" aria-controls="order-md"
            aria-selected="false">my orders</a>
          </li>
          <li class="nav-item">
            <img src="images/lesson.png"/><a  id="lesson-tab-md" data-toggle="tab" href="#lesson-md" role="tab" aria-controls="lesson-md"
            aria-selected="false">my lessons</a>
          </li>
        </ul>

      </div>



      <div class="tab-content card" id="myTabContentMD">

        <div class="tab-pane fade show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile-md">
          <div class="sign_inner">
            <div class="sign_in_feild">
              <div class="user-img"><img src="images/user-img.png"/></div>
              <div class="user-detail ft">

                <div class="form-block">
                  <div class="form-group form-check">
                    <label>first name:</label>
                    <div class="user-input"><img src="images/user.png"/><input type="text"></div>
                  </div>

                  <div class="form-group form-check">
                    <label>last name:</label>
                    <div class="user-input"><img src="images/user.png"/><input type="text"></div>
                  </div>
                </div>

                <div class="form-block">
                  <div class="form-group form-check">
                    <label>email address:</label>
                    <div class="user-input email"><img src="images/email.png"/><input type="text"></div>
                  </div>
                  <div class="form-group form-check">
                    <label>web site:</label>
                    <div class="user-input"><img src="images/website.png"/><input type="text"></div>
                  </div>
                </div>


                <div class="form-block">
                  <div class="form-group form-check">
                    <label>cell phone:</label>
                    <div class="user-input"><img src="images/call.png"/><input type="text"></div>
                  </div>
                  <div class="form-group form-check">
                    <label>office phone:</label>
                    <div class="user-input"><img src="images/call.png"/><input type="text"></div>
                  </div>
                </div>

              </div>

              <div class="button">submit</div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade " id="change-password" role="tabpanel" aria-labelledby="change-password-md">
          <div class="sign_inner">
            <div class="sign_in_feild">
              <div class="form-group form-check">
                <label>old Password:</label>
                <div class="user-input"><img src="images/lock.png"/><input type="password"></div>
              </div>
              <div class="form-group form-check">
                <label>Password:</label>
                <div class="user-input"><img src="images/lock.png"/><input type="password"></div>
              </div>
              <div class="form-group form-check">
                <label>Confirm Password:</label>
                <div class="user-input"><img src="images/lock.png"/><input type="password"></div>
              </div>
              <div class="button">submit</div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="order-md" role="tabpanel" aria-labelledby="order-tab-md">
          <div class="order-block">
            <div class="order-name">
              <ul>
                <li class="order_head">#order id 1</li>
                <li>lesson 1</li>
                <li>lesson 2</li>
                <li>lesson 3</li>
              </ul>
            </div>
            <div class="order-date">
              <ul>
                <li class="order_head">date </li>
                <li><img src="images/date.png"/>27/11/19</li>
              </ul>
            </div>

            <div class="order-invoice">
              <ul>
                <li class="order_head">invoice</li>
                <li><img src="images/download_icon.png"/></li>
              </ul>
            </div>
          </div>
          <div class="order-block">
            <div class="order-name">
              <ul>
                <li class="order_head">#order id 1</li>
                <li>lesson 1</li>
                <li>lesson 2</li>
                <li>lesson 3</li>
              </ul>
            </div>
            <div class="order-date">
              <ul>
                <li class="order_head">date </li>
                <li><img src="images/date.png"/>27/11/19</li>
              </ul>
            </div>

            <div class="order-invoice">
              <ul>
                <li class="order_head">invoice</li>
                <li><img src="images/download_icon.png"/></li>
              </ul>
            </div>
          </div>
          <div class="order-block">
            <div class="order-name">
              <ul>
                <li class="order_head">#order id 1</li>
                <li>lesson 1</li>
                <li>lesson 2</li>
                <li>lesson 3</li>
              </ul>
            </div>
            <div class="order-date">
              <ul>
                <li class="order_head">date </li>
                <li><img src="images/date.png"/>27/11/19</li>
              </ul>
            </div>

            <div class="order-invoice">
              <ul>
                <li class="order_head">invoice</li>
                <li><img src="images/download_icon.png"/></li>
              </ul>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="lesson-md" role="tabpanel" aria-labelledby="lesson-tab-md">
          <table class="table table-striped">
            <tr>
              <th>No</th>
              <th>lesson name</th>
              <th>price</th>
              <th></th>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
            <tr>
              <td>1</td>
              <td>The principles of scientific management </td>
              <td>$26.00</td>
              <td><button>start lesson</button></td>
            </tr>
          </table>
        </div>
      </div>





    </div>
  </div>
  @endsection