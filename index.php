<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>62107339_panupong</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .container {
        
        display: flex;
        justify-content: center;    
        padding: 2px 16px;
    }
    h2{
        align-content: center;
    }
    .card{
        background-color : rgb(217, 245, 255);
        box-shadow: 0 4px 8px 0 skyblue;
        align-content: center;
        width: 600px;
    }
    .card:hover {
        box-shadow: 0 8px 16px 0 skyblue;
    }
    .card_s:hover {
        box-shadow: 0 8px 16px 0 skyblue;
    }
    span{
        font-family: Arial, Helvetica, sans-serif; 
    }
    h3{
         padding-left: 50px;
         padding-top: 15px;
    }.dataweather{
        padding-left: 50px;
    }.Dataweather{
        padding-left: 50px;
    }
    #lat{
         margin-top: 10px;
         margin-bottom: 5px;
         margin-left: 20px;
         margin-right: 20px;
    }
    #lon{margin-top: 10px;
         margin-bottom: 5px;
         margin-left: 20px;
         margin-right: 20px;
    }
    #search{
        margin-top: 10px;
         margin-bottom: 5px;
         margin-left: 20px;
         margin-right: 20px;
    }
    
</style>
<script> 
    function findingweather(){ 
      $(".dataweather").hide();
      var url ="https://api.openweathermap.org/data/2.5/weather?lat=8.669323&lon=99.892052&appid=0d67fcc57039eb5d6f167c8beec907c9&units=metric";
      
            $.get(url)
             .done((data)=>{
               console.log(data)
                 $("#location").append(data.name);
                 $("#temp").append(data.main.temp);
                 $("#temp-max").append(data.main.temp_max);
                 $("#temp-min").append(data.main.temp_min);
                 $("#humidity").append(data.main.humidity);
                 $("#country").append(data.sys.country);
                 $("#sun-rise").append(data.sys.sunrise);
                 $("#sun-set").append(data.sys.sunset);
                 $("#wind-deg").append(data.wind.deg);
                 $("#wind-speed").append(data.wind.speed);
                 $("#cloud").append(data.clouds.all);
                       })         
            .fail((xhr, status, err)=>{
                     console.log("error")
                 });      
           }
    function findweather(){ 
        $(".Dataweather").hide();
           $(".dataweather").show();
            var url ="https://api.openweathermap.org";
            var a = $("#lat").val();
            var b = $("#lon").val();
 
            url = url + "/data/2.5/weather?lat=" + a + "&lon=" + b +"&appid=0d67fcc57039eb5d6f167c8beec907c9&units=metric"; 
            
             $.getJSON(url)
             .done((data)=>{
               console.log(data)
               $("#location1").append(data.name);
               $("#temp1").append(data.main.temp);
               $("#temp-max1").append(data.main.temp_max);
               $("#temp-min1").append(data.main.temp_min);
               $("#humidity1").append(data.main.humidity);
               $("#country1").append(data.sys.country);
               $("#sun-rise1").append(data.sys.sunrise);
               $("#sun-set1").append(data.sys.sunset);
               $("#wind-deg1").append(data.wind.deg);
               $("#wind-speed1").append(data.wind.speed);
               $("#cloud1").append(data.clouds.all);
                       })         
            .fail((xhr, status, err)=>{
                     console.log("error")
                 });
           }      
     function removing(){
        $("#location1").empty();
          $("#country1").empty();
          $("#temp1").empty();
          $("#temp-max1").empty();
          $("#temp-min1").empty();
          $("#humidity1").empty();
          $("#country1").empty();
          $("#sun-rise1").empty();
          $("#sun-set1").empty();
          $("#wind-deg1").empty();
          $("#wind-speed1").empty();
          $("#cloud1").empty();
     }
     $(()=>{ 
             findingweather();
             $("#search").click(()=>{ 
                 findweather();
             });
             $("#search").click(()=>{
                 removing();
             }); 
             
      });
    </script>   
<header class="container">
    <h2>พยากรณ์อากาศ</h2>
</header>
<body>
    <div class="container">  
        <div class="row">
            <div class="col-md">
        <div class="card">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d246.5145619626044!2d99.89208759175783!3d8.669378912507197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sth!2sth!4v1611235487153!5m2!1sth!2sth" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
     
     <input type="text" id="lat" placeholder="Latitude" value="8.669323">
            <input type="text" id="lon" placeholder="Longitude" value="99.892052" >
            <button id="search" class="btn btn-primary" >Search</button>
            <hr>
            <div class="Dataweather">      
                <h3>Location nows : <span id="location"></span><br></h3>
                 <span id="country"> Country is </span><br>
                 <span id="temp"> Temperature is </span> c ํ<br>
                 <span id="temp-max"> Temperature Max is </span> c ํ<br>
                 <span id="temp-min"> Temperature Min is </span> c ํ<br>
                 <span id="sun-rise"> Sunrise is </span> Unix <br>
                 <span id="sun-set"> Sunset is </span> Unix <br>
                 <span id="humidity"> Humidity is </span> % <br>
                 <span id="wind-deg"> Wind Deg is </span> Degrees <br>
                 <span id="wind-speed"> Wind Speed is </span> M/s <br>
                 <span id="cloud"> Cloud is </span> % <br>
                 
             </div>

             <div class="dataweather">
                <div class="head"><h3>Location nows : <span id="location1"></span><br></h3></div>
                 Country is <span id="country1">  </span><br>
                Temperature is <span id="temp1"> </span> c ํ<br>
                Temperature Max is <span id="temp-max1">  </span> c ํ<br>
                Temperature Min is <span id="temp-min1"> </span> c ํ<br>
                Sunrise is <span id="sun-rise1"> </span> Unix <br>
                Sunset is <span id="sun-set1"> </span> Unix <br>
                Humidity is <span id="humidity1"> </span> % <br>
                Wind Deg is <span id="wind-deg1"> </span> Degrees <br>
                Wind Speed is <span id="wind-speed1"> </span> M/s <br>
                Cloud is <span id="cloud1"> </span> % <br>
             </div>
    </div>
    </div>
    </div>
</div>
</div>
</body>
</html>