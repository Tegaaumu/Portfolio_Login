<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Font-Awesome-master/css/all.min.css">
    <title>delte celebrities</title>
    <style>
        /* .body{
            width: 100%;
            height: auto;
        } */

        .bodylayers{
            position: relative;
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            row-gap: 20px;
        }
        .image2{
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 380px;
            height: 160px;
            z-index: 1111;
            background-color: blanchedalmond;
            border-radius: 5px;
            box-shadow: 12px 5px 20px rgba(0, 0, 0, 0.564);
        }
        .bobylayer1{
            display: flex;
            align-items: center;
            /* background-color: blue; */
            /* flex-direction: row; */
            border-radius: 5px;
        }
        .image{
            position: relative;
            margin: 0 20px;
            width: 100px;
            height: 100px;
            background-position: contain;
            border-radius: 50%;
        }
        .textarea{
            position: relative;
            margin-right: 0px;
        }
        .textarea h5{
            font-size: clamp(15px, 2vw, 20px);
            text-transform: capitalize;
            /* background-color: blueviolet; */
            width: 160px;
        }
        .textarea p{
            font-size: clamp(10px, 2vw, 15px);

        }
        #contain{
            display: flex;
            align-items: center;
            background-color: red;
            width: 120px;
            height: 60px;
            z-index: 11111;
            border-radius: 5px;
            color: blanchedalmond;
        }
        .sharecontain .fas{
            margin-left: 10px;
        }
        .sharecontain{
            position: absolute;
            z-index: -11;
            /* float: left; */
            margin-left: 10px;
        }
        #contain:hover .sharecontain{
            margin-right: 20px;

        }
        #contain:hover .trashcontain{
            margin-left: 20px;

        }
        .trashcontain{
            position: absolute;
            float: left;
            right: 160px;
        }
        .trashcontain .fas{
            float: right;
            margin-left: 95px;
        }
    </style>
</head>
<body>
    <div class="body">
        <div class="bodylayers">
            <div class="bobylayer1"> 
                    <div id="contain" class="sharecontain ">
                        <i class="fas fa-share"></i>
                    </div>
                    <div class="image2">
                        <img class="image" src="img/Background/d7535ebe43893aa2683ed546bff378a1 - Copy.jpg" alt="">
                        <div class="textarea">
                            <h5>captain America</h5>
                            <p>Ben james</p>
                        </div>

                    </div>
                    <div id="contain" class="trashcontain ">
                        <i class="fas fa-trash"></i>
                    </div>
            </div>
<!--             
            <div class="bobylayer1">
                <div class="sharecontain">
                    <i class="fas fa-share"></i>
                </div>
                <img class="image" src="img/Background/d7535ebe43893aa2683ed546bff378a1 - Copy.jpg" alt="">
                <div class="textarea">
                    <h5>captain America</h5>
                    <p>Ben james</p>
                </div>
                <div class="trashcontain">
                    <i class="fas fa-trash"></i>
                </div>
                
            </div>
            <div class="bobylayer1">
                <div class="sharecontain">
                    <i class="fas fa-share"></i>
                </div>
                <img class="image" src="img/Background/d7535ebe43893aa2683ed546bff378a1 - Copy.jpg" alt="">
                <div class="textarea">
                    <h5>captain America</h5>
                    <p>Ben james</p>
                </div>
                <div class="trashcontain">
                    <i class="fas fa-trash"></i>
                </div>
                
            </div> -->
        </div>
    </div>
</body>
</html>