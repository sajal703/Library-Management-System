<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .loader{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #333333;
            transition: opacity 1s, visibility 0.75s;
        }
        .loader--hidden{
            opacity: 0;
            visibility: hidden;
        }
        .loader::after{
            content: "";
            width: 75px;
            height: 75px;
            border: 15px solid #dddddd;
            border-top-color: #009578;
            border-radius: 50%;
            animation: loading 1s ease infinite;
        }
        @keyframes loading{
            from{transform: rotate(0turn)}
            to{transform: rotate(1turn)}
        }
    </style>
    <script>
        window.addEventListener("load", () =>{
            const loader = document.querySelector(".loader");
            loader.classList.add("loader--hidden");

            loader.addEventListener("transitional",()=>{
                document.body.removeChild(loader);
            })
        })
    </script>
</head>
<body>
    <div class="loader"></div>
</body>
</html>