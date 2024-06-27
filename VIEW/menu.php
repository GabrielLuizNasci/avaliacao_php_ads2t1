<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS em Arquivos -->
    <link rel="stylesheet" href="../VIEW/css/menuStyle.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

    <h1>Bem-Vindo a País de Pet</h1>
    <div class="nav">
         <div class="toggle-btn">
              <span class="one"></span>
              <span class="two"></span>
         </div>

         <div class="menu">
              <div class="data">
                   <ul>
                        <li>Navegação</li>
                        <li><a href="VIEW/Animal/listarAnimal.php">Animal</a></li>
                        <li><a href="VIEW/Dono/listarDono.php">Donos</a></li>
                        <li><a href="VIEW/Dono/listarVet.php">Veterinário</a></li>
                        <li><a href="VIEW/Dono/listarServ.php">Serviço</a></li>
                   </ul>
              </div>
         </div>
    </div>     

    <div class="example">
         
    </div>
    <script>
        var t1 = new TimelineMax({paused: true});

        t1.to(".one", 0.8, {
            y: 6,
            rotation: 45,
            ease: Expo.easeInOut
        });
        t1.to(".two", 0.8, {
            y: -6,
            rotation: -45,
            ease: Expo.easeInOut,
            delay: -0.8
        });

        t1.to(".menu", 2, {
            top: "0%", 
            ease: Expo.easeInOut,
            delay: -2
        });

        t1.staggerFrom(".menu ul li", 2, {x: -200, opacity: 0, ease:Expo.easeOut}, 0.3);

        t1.reverse();
        $(document).on("click", ".toggle-btn", function() {
            t1.reversed(!t1.reversed());
        });
        $(document).on("click", "a", function() {
            t1.reversed(!t1.reversed());
        });
    </script>
<body>

</html>