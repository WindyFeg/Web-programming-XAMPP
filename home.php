<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>My website</title>
</head>

<body>
    <header class="">
        <img src="/img/hcmut-logo.png" alt="My Logo">
        <h1>BK-Elearning</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/index.php?page=home">Home</a></li>
                <li><a href="http://localhost/index.php?page=products">Products</a></li>
                <li><a href="http://localhost/index.php?page=login">Login</a></li>
                <li><a href="http://localhost/index.php?page=register">Register</a></li>
            </ul>
        </nav>
    </header>

    <div class="body ">

        <div class="background">
            <div class="square">
                <span class="title">
                    QUESTION 3: sequence number
                </span>

                <div class="question3">
                    <div class="res">
                        <span id="sqnum">
                        </span>
                    </div>
                    <button id="Show" class="btn col-sm" onclick="ShowNumber()">
                        Show Number
                    </button>

                    <button id="maxBtn" class="btn col-sm" onclick="ShowMaxMin(0)">
                        Max
                    </button>

                    <button id="minBtn" class="btn" onclick="ShowMaxMin(1)">
                        Min
                    </button>
                    <button id="sortMaxBtn" class="btn" onclick="SortMinMax(0)">
                        Sort Max
                    </button>
                    <button id="sortMinBtn" class="btn" onclick="SortMinMax()">
                        Sort min
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="contact footer__section">
            <span>Liên hệ</span>
            <ul class="contact-list">
                <li class="contact-item">
                    <i class="ti-location-pin"></i>Địa chỉ: 268 Lý
                    Thường Kiệt, P.14, Q.10, TP.HCM
                </li>
                <li class="contact-item">
                    <i class="ti-email"></i>Email:
                    <a href="mailto: phong.tranwindyfeng@hcmut.edu.vn
">phong.tranwindyfeng@hcmut.edu.vn
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__section">
            <span>
                Powered by <i>Ky Phong <br /> </i>
                <span>
                    Ho Chi Minh
                    University of Technology
                    <img id="logo" src="/img/hcmut-logo.png" alt="" />
                </span>
            </span>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        function ShowNumber() {
            var sequence = [5, 25, 13, 8, 45, 6, 11]
            document.getElementById("sqnum").innerHTML = sequence
        }

        function ShowMaxMin(id) {
            var sequence = [5, 25, 13, 8, 45, 6, 11]
            var temp = sequence[0];
            sequence.forEach(e => {
                if (temp < e && id == 0) {
                    temp = e;
                }
                else if (temp > e && id == 1) {
                    temp = e;
                }
            })
            document.getElementById("sqnum").innerHTML = temp
        }

        function SortMinMax(typ) {
            var sequence = [5, 25, 13, 8, 45, 6, 11]
            for (var i = 0; i < sequence.length; i++) {
                for (var j = i + 1; j < sequence.length; j++) {
                    if (sequence[i] > sequence[j]) {
                        var temp = sequence[i];
                        sequence[i] = sequence[j];
                        sequence[j] = temp;
                    }
                }
            }

            if (typ == 1) {
                sequence = sequence.reverse()
            }

            document.getElementById("sqnum").innerHTML = sequence

        }
    </script>
</body>

</html>