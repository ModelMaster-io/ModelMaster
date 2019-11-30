<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" name="viewport" />
<title>Model Master</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

<!--  jQuery 1.7+  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<!-- Default Theme -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link href="{{asset('admin/css/admin-style.css')}}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Include js plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>

<body>
    <div class="wapper">
        <div class="ad-nav">
            <div class="home-btn"><a href="#"><img src="{{asset('admin/image/model-admin.png')}}"/>Model Master Administration</a></div>
            <div class="login-btn"><a href="#">Hello, Admin<img src="{{asset('admin/image/user.png')}}"/></a></div>
        </div>

        @include('admin.sidebar.sidebar')

@yield('content')

</div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#lesson-data').DataTable( {
   language: { search: '', searchPlaceholder: "Search..." }
    });

} );
</script>
<script>
$(document).ready(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>
</html>
