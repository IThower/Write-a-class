@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nova Aula - WaC</title>
 
</head>

<body style="font-family: Poppins, sans-serif;">

    </nav>
    <section class="py-5">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-6">Nova Aula</h1>
                        <form><label class="form-label">Nome da Aula</label>
                            <div></div><input class="form-control" type="text" placeholder="Escreva um título que defina bem a aula."><label class="form-label">Autor</label><input class="form-control" type="text" placeholder="Fabio Carvalho" readonly=""><label class="form-label">Categoria</label><select class="form-select">
                                <optgroup label="Tecnologia">
                                    <option value="front" selected="">Front-end</option>
                                    <option value="back">Back-end</option>
                                    <option value="ux">UI/UX Design</option>
                                    <option value="outros">Outros</option>
                                </optgroup>
                                <optgroup label="Dia a Dia">
                                    <option value="culinaria">Culinária</option>
                                    <option value="math">Matemática</option>
                                    <option value="biologia">Biologia</option>
                                </optgroup>
                            </select><label class="form-label">Conteúdo</label>
                            <div id="toolbar_container" class="sun-editor"></div><textarea class="form-control" id="editor" placeholder="Insert placeholder text in sunEditorInit.js"></textarea><button class="btn btn-warning" type="button" style="margin-top: 20px;">Enviar Aula</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection