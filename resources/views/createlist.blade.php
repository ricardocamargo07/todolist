<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>createlist</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 300;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 20px;
        }

        .content {
            text-align: center;
            text-decoration: none;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 25px;
            font-size: 13px;
            font-weight: 580;
            letter-spacing: .2rem;
            text-decoration: none;
            text-transform: uppercase;
            align-items: flex-start;
            justify-content: center;
            text-indent:  500px;




        }

        .m-b-md {
            margin-bottom: 200px;
        }
    </style>
</head>
<body>

</div>
<div class="content">
    <div class="title m-b-md">
        Let's create your list!
    </div>

    <h1>
        Write here what you have to do:
    </h1>

    <p>
        <textarea> </textarea>
    </p>
    <p>
        <a href="/createlist/edit">Edit</a>
    </p>
    <h2>
        <button><a href="https://todolist.com/createlist">Let the organized live begins...</a></button>
    </h2>

</div>

    <div class="links">
    <a href="https://todolist.com/">Home</a>
    <a href="https://todolist.com/todo">To do.</a>
    <a href="https://todolist.com/doing">Doing...</a>
    <a href="https://todolist.com/done">Done!</a></div>
</body>
</html>
