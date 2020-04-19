<html>

    <head>
        <meta charset="utf-8">
        <title>Sistema de Lista de Tarefas</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
        <link href="{{ asset('css/tarefas.css') }}" rel="stylesheet">
    </head>

    <body>
        <br/><br/>

        <div class="home">
            <label class="lista">
                    Exibir Tarefa
            </label>
        </div>

        <br/>

        
            <div class="card-body">
        
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label>Título da Tarefa:</label>
                    </div>
                    <div class="col-sm-5">
                        <label style="color:blue;">{{$tarefa->titulo}}</label>
                    </div>
                </div>
        
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label>Resolvido:</label>
                    </div>
                    <div class="col-sm-5">
                        <label style="color:blue;">@if ($tarefa->resolvido==1) SIM @else NÃO @endif</label>
                    </div>
                </div>
                    
                </div>
        
            </div>
        

        <div class="botao">
            <a href="/tarefas">
                <button type="button" class="btn btn-primary">
                    Listagem das Tarefas
                </button>
            </a>
        </div>
        
    </body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>