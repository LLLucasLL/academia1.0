<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
    <title>FRESH START GYM</title>
</head>

<body>
    <nav>
        <div class="nav-logo">
            <a href="index.html">
                <img src="images/logo-removebg-preview.png">
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="index.php">Home</a></li>
            <li id="link3" class="link"><a href="#">Sobre</a></li>
        </ul>
        <a class="btn" href="login.html">Login</a>
    </nav>

    <main>
        <div id="slider">
            <img class="selected" src="./images/2.png" >
            <img src="./images/3.png">
            <img src="./images/4.png">
            <img src="./images/5.png">
            <img src="./images/6.png">
            <img src="./images/7.png">
            <img src="./images/8.png">
            <img src="./images/9.png">
        </div>
    </main>
    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <h4>Olá, venha fazer parte da nossa família!</h4>
            <h1>Nós somos a <span>FRESH START GYM</span>.</h1>
            <p>
                Nós estamos aqui para o seu bem. </p>
                <p>
                Pretendemos te ajudar com os seus treinos matinais, além de auxiliá-los na alimentação, com especialistas altamente capacitados.
            </p>
            <a class="btn" href="cadastro.html">Cadastre-se</a>
        </div>
        <div class="image">
            <img src="images/Amostra1-removebg-preview.png">
        </div>
    </header>

    <section class="container">
        <section class="ranking">
        <h2 class="header">*TOP RANKING DA ACADEMIA*</h2>
        <br>

        <div class="box">
            <fieldset>
            <br>
            <div align='center'>
                        <center>
                            <table border="10" cellpadding="0" cellspacing="0" width="90%">
                                <tr>
                                    <td width="25%" rgba(0, 0, 0, 0.8) align="center" >
                                        <p align="center"><b>
                                            <a> Colocação</a></b></td>
                                    <td width="25%" rgba(0, 0, 0, 0.8) align="center"><b>
            
                                        <a href="index.php?ordem=ACA_NOME">Nome</a></b></td>
                                    <td width="25%" rgba(0, 0, 0, 0.8) align="center"></b>
            
                                    <a href="index.php?ordem=ACA_PONTOS"> Pontos</a></b></td>
            </td>
            </tr>
            <?php
            
                require_once "conexao.php";
            
                    $ordem = 'PON_PONTOS';
                    $sql1 = "SELECT U.USU_NOME, P.PON_PONTOS 
                             FROM USUARIO U INNER JOIN PONTOS P
                             ON U.USU_CPF = P.USU_CPF
                             ORDER BY $ordem DESC";
                    $res = mysqli_query($conexao, "$sql1");
                    $contador = 1;
                    while($registro=mysqli_fetch_row($res))
                    {
                        if ($contador <= 5) {
                        $nome =$registro[0];
                        $pontos =$registro[1];
                        echo "<tr>";
                        echo "<td width='10%' style='padding-left: 5px; padding-right: 5px'>";
                        echo "<div style='text-align: center;'><p style='color: white;'>$contador</p></div>";
                        echo "</td>";
                        echo "<td align='center' width='25%' ><p style='color:white;'>$nome</p></td>";
                        echo "<td align='center' width='25%' ><p style='color:white;'>$pontos</p></td>";
                        echo "</tr>";
                        $contador++;
                        }
                        else {
                        break;
                        }
                        
                    }
                        mysqli_close($conexao)
                        ?>
            
                    </table>
                    </center>
                    </div>
                    <br>
            </fieldset>
            </div>
             </section>

        <br>
        <p class="sub-header">
            Ficamos felizes que você tenha chegado até aqui, como pode ser visto acima, aqui estão os nossos "TOP RANKING" do mês da nossa academia. Se caso tiver alguma dúvida sobre o ranking continue lendo abaixo.</p> 
            <br>
        <p class="sub-header">
             A classificação acima são aqueles amantes pela musculação que mais se comprometeram com a academia e consigo mesmo, no seu própio projeto de vida. Com isso em mente vamos explicar o esquema de ranking, que é
              baseado em pontos, que são ganhos durante os dias de treino da semana, levando a ser acumulados até o final do mês e no final de cada mês do ano, nós da FRESH START GYM presenteamos cada um deles com PRÊMIOS E BENEFÍCIOS EXCLUSIVOS.<br>
        </p>
        <br>
        <p class="sub-header">*Importante: Fique sempre de olho nesse ranking, pois seu nome pode estar dentre eles.</p>
        </section>

    <section class="container">
        <h2 class="header">PLANOS DE PREÇOS DE PROJETOS</h2>
        <p class="sub-header">
            Nossos planos de preços vêm com vários níveis de associação, cada um adaptado para atender a diferentes projetos e
            tipos de pessoas.
        </p>
        <div class="pricing">
            <div class="card">
                <div class="content">
                    <h4>Silver Plan</h4>
                    <h3>R$ 170,00  <span style="color:blank; font-size: 1rem; font-weight: 600;">por mês</span></h3>
                    <p>
                        <!-- Simbolo de certo-->
                        <i class="ri-checkbox-circle-line"></i>
                        <!---->
                        Mensal
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Personal trainer Público
                    </p>
                </div>
                <button class="btn">Assine agora</button>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Gold Plan</h4>
                    <h3>R$ 135,00  <span style="color:blank; font-size: 1rem; font-weight: 600;">por mês</span></h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Semestral (6 meses)
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Personal Trainer particular
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Nutricionista pública
                    </p>
                </div>
                <button class="btn">Assine agora</button>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Diamond Plan</h4>
                    <h3>R$ 100,00  <span style="color:blank; font-size: 1rem; font-weight: 600;">por mês</span></h3>
                    
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Anual (12 meses)
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Personal de Elite
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Nutricionista Particular
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Sala VIP
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Pré-treino GRATUITO
                    </p>
                </div>
                <button class="btn">Assine agora</button>
            </div>
        </div>
    </section>

    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <span class="blur"></span>
        <span class="blur"></span>
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="images/logo-removebg-preview.png">
            </div>
            <p>
                FRESH START GYM.
            </p>
            <div class="socials">
                <a href="https://www.youtube.com"><i class="ri-youtube-line"></i></a>
                <a href="https://www.instagram.com"><i class="ri-instagram-line"></i></a>
                <a href="https://www.twitter.com"><i class="ri-twitter-line"></i></a>
            </div>
        </div>
 
        <div class="column">
            <h4>Navegue</h4>
            <a href="index.html">Home</a>
            <a href="cadastro.html">Cadastro</a>
            <a href="login.html">Login</a>
        </div>
        <div class="column">
            <h4>Horário de Funcionamento:</h4>
            <p>Seg. -> Sex. <br>
                7:00 à 20:00</p>

            <p>Sáb. -> Dom <br>
            7:00 à 12:00</p>
                
        </div>
        <div class="column">
            <h4>Contatos</h4>
            <p>(12)99565 - 0260<br>
            (12)3526 - 8079</p>
            <p>Freshstartgym@gmail.com</p>
        </div>
    </footer>

    <div class="copyright">
        Copyright © 2024 Lucas Lima. Todos os direitos Reservados.
    </div>


    <script src="script.js"></script>
    <script src="script01.js"></script>
    
</body>

</html>