<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beagle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="wrapper indexPage">
        <div class="main">

            <div class="logoContainer">
                <img src="img/logo.svg" alt="logo" class="logo">
            </div>

            <div class="searchContainer">
                <!--send data to search.php via GET-->
                <form action="search.php" method="GET">
                    <input type="text" class="searchBox" name="term" placeholder="Search something...">

                    <input type="submit" class="searchBtn" value="Search">
                </form>

            </div>
        </div>
    </div>
</body>

</html> 