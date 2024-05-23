1. DOPO AVER INSTALLATO IL PACK: composer require pacificdev/laravel_9_preset
   BOOTSTRAP: php artisan preset:ui bootstrap
   NODE_MODULES: npm install
   CONTROLLER: php artisan make:controller NomeFileController (PageController) [CARTELLA DI SALVATAGGIO: app->Http->Controllers]
   MODELS: php artisan make:model NomeFileModel (Movie) [CARTELLA DI SALVATAGGIO: app->Models]

   Nel file .env imposto le credenziali per collegare il DB importato su MyPhpAdmin (PHP Launcher)
        
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=laravel_model_controller (<-NOME DATABASE)
    DB_USERNAME=root
    DB_PASSWORD=

2. In VIEWS cancello il file welcome.blade.php e creo una cartella LAYOUTS in cui creo un file app.blade.php che sarà lo scheletro dell'HTML, in cui importo bootstrap tramite la direttiva
    @vite('resources/js/app.js')

3. In VIEWS creo una cartella PARTIALS in cui creo due file: navBar.blade.php (header) & credits.blade.php (footer), entrambi da includere in app.blade.php
    [@include('nome_cartella.nome_file')]

4. Nel file PageController.php:
Inserisco il percorso del Models: @use App/Models/NomeFileModel (file: Movie.php)
Nella class PageController, inserisco i metodi da passare poi nella Route web.php:
public function nomeFunzione(){..} (nomeFunzione: index)
Nella Funzione creo una variabile, in cui dichiaro il Models che invoca il metodo statico all() che mi restituisce un oggetto:
$variabile = NomeFileModels::all(); (->come se scrivessi una query: SELECT * FROM `nome_tabella`)
Infine ritorno alla vista con 2 parametri:
return view('nomeFileRotta', comapct('nomeVariabile')) [il metodo compact() restituisce un array associativo]

5. Dalla cartella ROUTES prendo il file web.php e modifico la Route del primo url ('/').
Concello il parametro function e il return e, al suo posto, come secondo parametro, gli assegno un array:
[NomeController::class, 'nome_metodo'] ([PageController::class, 'index'])

6. Nel file app.blade.php nella main, tramite la direttiva @yield('nome_segnaposto'), collego il file movie.blade.php creato nella cartella VIEWS.

7. Nel file movie.blade.php ho esteso il file app.blade.php mediante la direttiva @extends('nome_cartella.nome_file') [@extends('layouts.app')]
    ed ho creato la parte di contenuto che andrà a sostituirsi allo @yield() dell'app.blade.php, mediante la direttiva @section('nome_segnaposto')//@endsection,
    al cui interno ho usato la direttiva foreach per ciclare l'array associativo così da stampare in pagina il contenuto del database:
    @foreach($array as $elemento)//@endforeach
    In questo caso, per prendere le proprietà dell'array: {{$elemento->proprietà}}

