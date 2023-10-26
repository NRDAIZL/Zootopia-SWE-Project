<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv ="X-UA- compatible compatible" content ="IE=edge">
        <meta name ="viewport" content="width=device-width,initial-scale=1.0">
        <title>zootopia-services </title>

<!--font type-->
<!--<link rel ="stylesheet" herf="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel ="stylesheet"herf="css/style.css">-->
<style type = "text/css">
*{
      margin: 0;
    padding:0;
     text-align: center;
      font-family:arial;
          transition: 0.5s;



      }
      body{
        width: 100vw;
        height: 100vh;
        background:#c8e8e0 ;
        padding-top: 50 px;

      }

        h2{
         color:#2e937a;
         font-weight: 400;
        }
        h1{
          color:#2e937a;
          font-size: 45px;
          margin-top: 10px;

        }
        .row{
          padding-top: 50px;
          width: 1000px;
          margin: auto;
          display: flex;
          justify-content: space-between;
          align-items: center;

        }
        .box{
          width: 320px;
          height: 500px;
          background-color: #fff;
          border-radius: 20px;



        }
        .box .img{

          width:250px;
        }
        .box.h3{
          front-size:25px;
          padding-top: 20px;
          color:#2e937a;


        }

        .box .p{
        color:#4e746b;
        padding-top:20px;
        line-height: 25px;



        }
        .box .btn{
          width:150px;
          border:none;
          color:#fff;
          font-size: 17px;
          cursor:pointer;
          font-weight: bold;
          margin-top: 20px;
          border-radius:10px;



        } 
        .box.btn:hover{
          background:#fff;
          color:#2e937a;
          border:1px solid #2e937a;

        }




















   </style>
    <body>
    <?php include '../partials/menu.php';?>
    <h2>FEATURES</h2>
<h1>Our Services.</h2>
   <div class="row">
      <div class="box">
<img src="img.02.png">
<h3>appointment</h3>
<p> appointment<br>Vets at our clinic do all they can do to help your pet<br>stop.</p>

<button class="btn">make an oppointment</button>
</div>
<div class="box">
<img src="img.04.jpg">
<h3>grooming</h3>
<p> We offer services to take good care of your pet<br>grooming is so imortant for every pet health<br>stop.</p>

<button class="btn">make an oppointment</button>
</div>
<div class="box">
<img src="img.03.jpg">
<h3>pet hotel</h3>
<p> lablablabaa<br>stop.labllalalalb<br>stop.</p>

<button class="btn">book now</button>
</div>
<div class="box">
<img src="img.01.jpg">
<h3>vaccine times</h3>
<p> lablablabaa<br>stop.labllalalalb<br>stop.</p>

<button class="btn">book now</button>
</div>

</div>




<script src ="js/script.js" ></script>
    </body>
</html>
