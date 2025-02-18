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
        display: flex;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        perspective: 1000px;
        flex-wrap: wrap;
    }

    .card {
        width: 600px;
        height: 400px;
        background-color: #fff;
        flex-wrap: wrap;
        transform-style: preserve-3d;
        position: relative;
        box-shadow: 0 15px 60px rgba(0, 0, 0, 0.3);
        border-radius: 15px;
        transition: transform 1s;
    }
    .card-wrapper:hover .card{
        /* transform: rotateY(180deg); */
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
        width: 70%;
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
    p
   {
    word-wrap: break-word;    
   }
   @media (max-width:600px){
    .card-wrapper{
        flex: 100%;
        max-width: 400px;
    }
    }
  </style>

</head>
<body>
    <div class="card-wrapper">
        <div class="card">
            <div class="card-front">
                <div class="left">
                  <img src="{{asset('img/157x54.png')}}"  />  
                  <h5><span>{{$employees->website }} </span></h5>                 
                    <br>
                        <img src="{{$employees->qr_path}}" style="width:120px;height:120px;" alt="" >
                     
                </div>
                <div class="right">
                    <div class="person right-content">
                        <i class="fas fa-user-tie"></i>
                        <div>
                            <h4>{{$employees->fname}} {{$employees->lname}}</h4>
                            <p>{{$employees->job_position}}</p>
                        </div>
                    </div>
                    <div class="phone right-content">
                        <i class="fas fa-phone"></i>
                        <div>
                            <p>{{$employees->contact_no}}</p>
                            <p>{{$employees->mobile_no}}</p>
                        </div>
                    </div>
                    <div class="email right-content">
                        <i class="fas fa-envelope-open"></i>
                        <div>
                            <p>{{$employees->email_add}}</p>
                        </div>
                    </div>
                    <div class="address right-content">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p style="font-size:14px;">{{$employees->company_add}}</p>
                            {{-- <p>Warehouse G09 DAFZA</p>
                            <p>Dubai, UAE</p> --}}
                            <p>PO Box: {{$employees->postcode}}</p>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="card-back">
                <img src="{{$employees->qr_path}}" alt="" >
            </div>
        </div>
    </div>

</body>
</html>
