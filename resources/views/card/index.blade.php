<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Prime Logistics Card</title>
  <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        font-family: "Montserrat", sans-serif;
        background-color: #ccc;       
        
    }

    .card-wrapper{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        perspective: 1000px;
    }

    .card {
        width: 600px;
        height: 400px;
        background-color: #fff;
        transform-style: preserve-3d;
        position: relative;
        box-shadow: 0 15px 60px rgba(0, 0, 0, 0.3);
        border-radius: 15px;
        transition: transform 1s;
    }
    .card-wrapper:hover .card{
        transform: rotateY(180deg);
    }
    .card-front, 
    .card-back{
        width: 100%;
        height: 100%;
        backface-visibility: hidden; 
        border-radius: inherit;
    }

    .card-front{
        display: flex;
        background: linear-gradient(100deg, rgb(255,255,255) 40%, rgba(250, 196, 18, 0.905) 0);
    }
    .left{
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .left img{
        width: 80%;
    }

    .left h4{
        margin: 10px;
        font-size: 18px;
        letter-spacing: 1px;
    }

    .left span{
        /* text-transform: uppercase; */
        color: #0d5692;
    }

    .right {
        width: 60%;
        color: #fff;
    }

    .right-content {
        display: flex;
        align-items: center;
        margin: 20px, 0; 
        text-indent: 10px;
    }
    .person {
        background-color: #1187ac;
        padding: 5px 0 5px 30px;
        margin: 30px 0;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    .right-content i {
      width: 35px;
      height: 35px;
      border: 2px solid #fff;
      border-radius: 50%;  
      display: flex;
      /* justify-content: center; */
      align-items: center;
      background-color: #1187ac;
      margin-right: 20px;
      margin: 10px 0;
    }

    .person h4{
        text-transform: uppercase;
    }

    .phone {
        padding-left: 30px;
        color: #2924bb;
    }
    .email {
        padding-left: 30px;
        color: #2924bb;
    }
    .address {
        padding-left: 30px;
        color: #2924bb;
    }
    .card-back{
        transform: rotateY(180deg);
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-back img{
        width: 40%;
    }

  </style>

</head>
<body>
    <div class="card-wrapper">
        <div class="card">
            <div class="card-front">
                <div class="left">
                  <img src="{{asset('img/157x54.png')}}"  />  
                  <h5><span>www.primelogistics.ae</span></h5>
                </div>
                <div class="right">
                    <div class="person right-content">
                        <i class="fas fa-user-tie"></i>
                        <div>
                            <h4>Nasser Alajmi</h4>
                            <p>CEO</p>
                        </div>
                    </div>
                    <div class="phone right-content">
                        <i class="fas fa-phone"></i>
                        <div>
                            <p>+971559990696</p>
                            <p>+966559149000</p>
                        </div>
                    </div>
                    <div class="email right-content">
                        <i class="fas fa-envelope-open"></i>
                        <div>
                            <p>nasser@primelogistics.ae</p>
                        </div>
                    </div>
                    <div class="address right-content">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>Warehouse G09 DAFZA</p>
                            <p>Dubai, UAE</p>
                            <p>Post Box: 371961</p>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="card-back">
                <img src="{{asset('qr/000002.png')}}" alt="" >
            </div>
        </div>
    </div>

</body>
</html>