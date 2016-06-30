<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aftkad</title>

    <link href="/css/fullcalendar.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/sweet-alert.css" rel="stylesheet">
    <link href="/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/css/bootstrap-select.css" rel="stylesheet">
    <link href="/css/jquery.nouislider.min.css" rel="stylesheet">
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/css/farbtastic.css" rel="stylesheet">
    <link href="/css/chosen.min.css" rel="stylesheet">
    <link href="/css/summernote.css" rel="stylesheet">



    <!-- CSS -->
    <link href="/css/app.min.1.css" rel="stylesheet">
    <link href="/css/app.min.2.css" rel="stylesheet">

</head>
<body class="login-content">
<!-- Login -->
<div class="lc-block toggled" id="l-login">

    <form action="/login"  id="loginForm" method="post" onsubmit="return validate();">
        {{$user_data['message']}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Username" id="UsernameID" name="Username">
            </div>
        </div>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
            <div class="fg-line">
                <input type="password" class="form-control" placeholder="Password" id="PasswordID" name="Password">
            </div>
        </div>

        <button type="submit" name="btn-login" class="btn btn-login btn-danger btn-float"> GO </button>

    </form>
</div>

<!-- Javascript Libraries -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/waves.min.js"></script>
<script src="/js/bootstrap-growl.min.js"></script>
<script src="/js/sweet-alert.min.js"></script>

<script src="/js/moment.min.js"></script>
<script src="/js/bootstrap-select.js"></script>
<script src="/js/jquery.nouislider.all.min.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/typeahead.bundle.min.js"></script>
<script src="/js/summernote-updated.min.js"></script>

<script src="/js/chosen.jquery.min.js"></script>
<script src="/js/fileinput.min.js"></script>
<script src="/js/input-mask.min.js"></script>
<script src="/js/farbtastic.min.js"></script>

<script src="/js/curved-line-chart.js"></script>
<script src="/js/line-chart.js"></script>
<script src="/js/charts.js"></script>

<script src="/js/charts.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/demo.js"></script>

<script type="text/javascript">
    function validate()
    {
        var username = document.getElementById('UsernameID').value;
        var pass 	  = document.getElementById("PasswordID").value;
        //validate mail
        if( username == null || username =="")
        {
            alert("please enter the username");
            return false ;
        }
        //validate password
        if(pass ==null || pass =="")
        {
            alert("please enter the password ");
            return false ;
        }
        return true;
    }
</script>
</body>