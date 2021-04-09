<?php 

function pdo_connect_mysql() {
    $host = "sql3.freesqldatabase.com:3306";
    $username = "sql3402886";
    $password = "gn4yJmWUfg";

    $db_name = "sql3402886";

    try {
        return new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
    }
   catch (PDOException $exception) {
       exit('Failed to connect to database!');
   }
}

function template_header($title) {
    echo <<< HTML

    <!DOCTYPE html>
    <html>
        <head>
            <title>$title</title>
        </head>

        <body>
            <header>
                <div class="content-wrapper">
                    <h1>$title</h1>

                
                </div>
            </header>

            <main>

    HTML;
}

function template_footer() {
    $year = date('Y');
    echo <<< HTML

            </main>

            <footer>

            </footer>
            <script src="script.js"></script>
        </body>
    </html>

    HTML;
}

?>