<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {
	padding: 0;
	margin: 0;
}

html,body {
	background-color: #000000;
	font-family: tahoma, sans-serif;
	color: #E6EBEE;
}

#card {
	background-color: #393B45;
	height: 650px;
	width: 550px;
	margin: 10vh auto;
	border-radius: 25px;
	padding-bottom: 1px;
	box-shadow: 2px 2px 5px #4069E2;
}

h1 {
	color: white;
	text-align: center;
	width: 100%;
	background-color: #E6EBEE;
	border-radius: 25px 25px 0 0;
	color: #393B45;
	padding: 30px 0;
	font-weight: 800;
	margin: 0;
}

.image-crop {
	display: block;
	position: relative;
	background-color: #E6EBEE;
	width: 150px;
	height: 150px;
	margin: 0 auto;
	margin-top: 30px;
	overflow: hidden;
	border-radius: 50%;
	box-shadow: 1px 1px 5px #4069E2;
}

#avatar {
	display: inline;
	height: 230px;
	width: auto;
	margin-left: -34px;
}

#bio {
	display: block;
	margin: 30px auto;
	width: 280px;
	height: auto;
}

#bio p {
	color: #E6EBEE;
	font-weight: lighter;
	font-size: 15px;
	text-align: justify;
}

#stats {
	display: flex;
	flex-direction: row;
	height: auto;
	width: 480px;
	justify-content: space-between;
	align-items: center;
	margin: 0 auto;
	font-weight: 500;
}

.col {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: auto;
}

.stat {
	font-size: 15px;
	margin: 0;
}

.label {
    font-size: 10px;
	margin: 0;
}

#buttons {
	display: flex;
	margin: 0 auto;
	justify-content: space-between;
	width: 280px;
}

button {
	display: block;
	position: relative;
	padding: 10px 0;
	width: 130px;
	margin: 30px 0;
	border-radius: 25px;
	border: none;
	font-size: 20px;
	letter-spacing: 0.2px;
	font-weight: 500;
	background-color: #4069E2;
	color: #E6EBEE;
}

button:focus {
	display: none;
}

button:hover {
	transform: scale(1.03);
	cursor: pointer;
	transition: all 0.2s ease-in-out;
}

#msg{
	background-color: #E6EBEE;
	color: #393B45;
}


</style>
</head>
<body>

    <div id="card">
        <h1>{{$employees->fname}} {{$employees->lname}}</h1>
        <div class="image-crop">
            <img id="avatar" src="{{$employees->photo}}" class="img-thumbnail max-w-30px"></img>
        </div>
        <div id="bio">
            <p>   </p>
        </div>
        <div id="stats">
            <div class="col">
                <p class="stat">{{$employees->company}}</p>
                <p class="label">Company</p>
            </div>
            <div class="col">
                <p class="stat">{{$employees->email_add}}</p>
                <p class="label">Email Add</p>
            </div>
            <div class="col">
                <p class="stat">{{$employees->mobile_no}}</p>
                <p class="label">Contact</p>
            </div>
        </div>
        <div id="buttons">
            <button>Save</button>
          
        </div>
    </div>
</body>
</html>
