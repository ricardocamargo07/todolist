<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>todolist</title>

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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 500px ;
            }
        </style>
    </head>
    <body>


            <div class="content">
                <div class="title m-b-md">
                    To Do List
                </div>

                <h2>
                    <button><a href="https://todolist.com/createlist">Create list</a></button>
                </h2>

                <div class="links">
                    <a href="https://todolist.com/">Home</a>
                    <a href="https://todolist.com/todo">To do.</a>
                    <a href="https://todolist.com/doing">Doing...</a>
                    <a href="https://todolist.com/done">Done!</a>
                </div>
            </div>
        </div>
    </body>
</html>
