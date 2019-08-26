<!DOCTYPE html>
<html
    xmlns:h="http://xmlns.jcp.org/jsf/html"
    xmlns:f="http://java.sun.com/jsf/core"
    xmlns:p="http://primefaces.org/ui"
    >
    <head>k
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    locale: 'pt-br',
                    plugins: ['interaction', 'dayGrid'],
                    //defaultDate: '2019-04-12',
                    editable: true,
                    eventLimit: true,
                    events: 'http://172.16.154.95/CalendarioAPI/list_eventos.php',
                    extraParams: function () {
                        return {
                            cachebuster: new Date().valueOf()
                        };
                    }
                });

                calendar.render();
            });

        </script>
        <style>

            body {
                margin: 40px 10px;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 900px;
                margin: 0 auto;
            }

        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <h:body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="img/logo_marca.png" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                         <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Duvidas?</a>
                        </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">  

                   <!-- <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Logar</a>  -->
                       <a href="http://172.16.154.95:8080/FolgasN1/" class="btn btn-rounded bg-light">Logar</a>
                
                </form>
            </div>
        </nav>



        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Bem vindo!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="ml-3" >
                        <strong>Agora ficou fácil e rápido agendar sua folga!<br/><br></strong>
<strong> Passo 1:</strong> <br/>
Clique em “Logar” no canto superior do navegador, <br/><br/>
<strong>Passo 2:</strong> <br/>
Acesse o sistema com o seu usuário e senha, caso ainda não tenha fale com o seu gestor. <br/><br/>
<strong>Passo 3:</strong> Clique “Incluir Folga”

Lembre-se só são permitidas 2 folgas por semana, e cada analista pode folgar apenas 2x no mês, mais detalhes<a href="manualF.pdf" target="_black"> clique</a> aqui e baixe o Manual de Folgas.<br/><br/>
                        
                    </div>


                        
                
                </div>
            </div>
        </div>




        <div id='calendar'></div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </h:body>
</html>
