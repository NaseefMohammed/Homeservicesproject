@extends("layouts.master")
@section("contact")
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<html lang="en">
<head>
    <title>javascript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="css/javascript.css" rel="stylesheet" >
</head>
<body>
    <header class="header container-fluid">
        <div class="container features">
            <div class="row">
                <div class="col mt-3 pl-5">
                    <a href="#" class="facebook-text text-white text-left" data-toggle="collapse"  title="Go to Facebook home" >
                    facebook</a>
                </div>
                    <div class="col mt-2 pl-3.1 login-box">
                        <div class="row">
                            <div class="col ml-1 pl-2.1">
                              <label>Email or Phone</label>
                              <input type="text" class="border-1 p-1 m-0 h-15 w-142">
                            </div>
                            <div class="col ml-1 pl-1">
                              <label>Password</label>
                              <input type="text" class="border-1 p-1 m-0 h-15 w-142">
                              <a href="#" class="forgotten">Forgotten password?</a>
                            </div>
    </header>
<div id="gradient">
    <div class="container mainarea">
    <div class="firstcol">


    <div class="secondcol">
        <div class="head2">Create an account</div>
        <div class="grid">
        <input class="inputbox" type="text" name="firstname" placeholder="First name">
        <input class="inputbox" type="text" name="surname" placeholder="Surname">
        <input class="mobile" type="text" name="mobilenumber" placeholder="Mobile number or email"><br>
        <input class="password" type="password" name="password" placeholder="New password">
        </div>
        <div id="bday">Birthday</div>
        <span>
            <select name="month" id="birthmonth">
                <option value="month">month</option>
                <option value="jan">Jan</option>
                <option value="feb">Feb</option>
                <option value="mar">Mar</option>
                <option value="apr">Apr</option>
                <option value="may">May</option>
                <option value="jun">Jun</option>
                <option value="jul">Jul</option>
                <option value="aug">Aug</option>
                <option value="sep">Sep</option>
                <option value="oct">Oct</option>
                <option value="nov">Nov</option>
                <option value="dec">Dec</option>
            </select>
            <select name="day" id="birthday">
                <option value="day">Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="year" id="birthyear">
                <option value="year">Year</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
            </select>
        </span>
        <br>
        <br>
        <span class="femaleradio">
            <input type="radio" name="gender" id="female" >
            <label for="female">Female</label>
        </span>
        <span class="maleradio">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
        </span>
        <br>
        <br>
        <button type="submit" class="signup" onclick="alert('Successfully signed up')"></button>
        <div class="createpage">
        </div>
    </div>
    </div>
</div>
</div>

<footer class="white-section" id="footer">
<p style="text-align: center">@naseef mottath</p>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>

@endsection
