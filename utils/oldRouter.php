<?php

namespace App\Config;

class Router
{
    private $routes = [];
    public function addRoute(String $uri, String $Controller, String $method)
    {
        // Ici on stock toutes nos routes
        /*
          Example
            Si notre uri est = à /home
            Alors notre tableau sera
            [
            '/home' => ['Controller' => HomeController, 'method' => home]
            ]
        */
        $this->routes[$uri] = ['Controller' => $Controller, 'method' => $method];
    }

    public function dispatch(String $uri)
    {
        // Ici on va faire en sorte que nos routes soient comprises par l'application
        /*
            Lorsqu'on tape dans l'url l'uri /home 
            Alors l'application la comprend et peut appeler le bon Controller qui va avec la route
         */

        /*
            Pour cela on va récupérer notre variable routes et on va boucler dessus avec un foreach
            
            Le foreach prend en paramètre 3 éléments, le premier étant notre tableau de routes et les deux autres 
            sont les détails à l'intérieur de notre tableau
            exemple:
             foreach($this->routes as $uri => $infos) 
             * $uri est par exemple /home et $infos correspond au tableau que contient la clés /home par exemple elle pourrait contenir cela
             * ['Controller' => HomeController, 'method' => home]
         */

        foreach ($this->routes as $uriPath => $infos) {
            /*
                Maintenant qu'on a fait la boucle on va utiliser la fonction extract de php pour faire en sorte 
                que les clés du tableau $infos soient accessible directement en variable php au lieu d'accéder comme cela
                $infos['Controller'] && $infos['method'] on accédera comme ceci

                $Controller
                $method

                pour pouvoir avoir cette effet on devras procéder commme ci

                extract($infos);
                $Controller
                $method
            */

            extract($infos);
            /*
             Maintenant on va comparer ce qui est passer en paramètre par la fonction dispatch $uri et on va la comparer à $uri de la boucle foreach
             Tant que la route ne match pas alors on appelle pas de controller.
            */

            if ($uriPath === $uri) {
                /* 
                    Pour rappel le controller passer en paramètre dans l'objet Router et un Objet de type Controller c'est pour cela qu'on peut appeler
                    le mot clés new dessus

                    Pareillement pour la method qui est passé en paramètre dans le constructeur du routeur qui est de type callable c'est pour qu'on puisse l'appeler
                    avec les parenthèse parce que c'est une function
                */
                $controller = new $Controller();
                $controller->$method();
            }
        }
    }
}
