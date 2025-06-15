<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <title>Accountancy Format</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .hd1{
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .container{
            width: 70%;
            margin: auto;
            height: auto;
            border: 2px solid black;
            display: flex;
            justify-content: center
        }
        .container1{
            width: 94%;
            margin: auto;
        }
        .inbox{
            height: auto;
            border: 2px solid black;
        }
        .ib1{
            width: 14%;
        }
        .ib2{
            width: 50%;
        }
        .ib3{
            width: 4%;
        }
        .ib4{
            width: 16%;
        }
        .ib5{
            width: 16%;
        }
        .ib6{
            width: 6%;
        }

        .ib7{
            width: 16%;
        }
        .hib{
            height: 50px;
            border-bottom: 2px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .ibh1{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .mbd{
            border-top: 2px solid black;
        }
        .particulars{
            height: 150px;
            border-bottom: 2px dotted black;
        }
        input{
            height: 30px;
            font: 20px;
            border: none
        }
        h2{
            font-size: 30px;
            font-weight: 700;
        }
        h3{
            font-size: 20px;
            font-weight: 600;
        }
        .body{
            width: 100%;
            height: auto;
            margin-bottom: 30px
        }
        .body .div{
            width: 100%;
            height: auto;
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>

    <x-header />

    {{$slot}}


    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}

</body>
</html>
{{-- npx @tailwindcss/cli -i ./public/css/input.css -o ./public/css/output.css --watch --}}
