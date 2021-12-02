<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController


{

    /**
     * @Route("/profile", name="profile")
     */

        public function profile()
        {
        //var_dump('good try');
        //die;

        return $this->render("profile.html.twig");
        /**$this-> fait référence à la classe actuelle et permet d'utiliser les propriétés ou les méthodes de la classe
         * et de celles des classes parentes.
         */
        }
        /**
         * @Route("/contact", name="contact")
         */

        public function contact()
        {

        return $this->render("contact.html.twig");
        }

        //EXO :
        // - créez un nouveau projet Symfony
        //- dans ce projet, créez une première page home, qui, avec un fichier HTML / Twig, affiche un header avec un menu, un message de bienvenue, et un footer
        //- une deuxième page contact, qui afficher le même header et le footer + un titre, une image et un contenu texte au centre de la page
        //respectez les bonnes pratiques HTML pour ces pages
        // je veux utiliser un fichier HTML en tant que réponse
        // HTTP
        // pour ça j'appelle la méthode render (issue de l'AbstractController)
        // et je lui passe en premier parametre le nom / le chemin du fichier
        // twig (html) situé dans le dossier template


        //EXO 29/11/21:
        //créer une nouvelle page "article" qui va afficher grâce à un fichier Twig le titre, le contenu et l'image d'un
        // article issu du contrôleur
        //$article = [
        //"title" => "Le PHP c'est vraiment trop génial",
        //"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur
        // unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
        //"image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-
        //624x600-2.jpg"
        //];

        //EXO 30/11/21:
        //- en utilisant le tableau d'articles que je vous envoie, affichez sur la page d'un article un article issu du
        // tableau, en fonction de la valeur de la wildcard id que allez mettre dans la route.

        //COMMENTAIRE : La route indique le chemin de l'url (en http!), et la wildcard permet d'intégrer une partie
        //variable dans cette url sous la forme : /{id}. Cet id correspond à l'identifiant d'un article dans le tableau (multi dimensionnel)
        //$articles. La nouvelle variable $id devient paramètre de la méthode article grâce à symfony.


// Pour retourner une réponse à la valeur age obtenu par request, j'instancie la  variable $response en créant un nouvel objet
//, puis je retourne la valeur de respons en fonction de la valeur age




        // EXO :
        //- dans votre page d'article, si l'id demandé n'existe pas, renvoyez une erreur 404



        /**
         * @Route("/article/{id}", name="article")
        */
        public function article($id)
        {
            //var_dump("good try"); die;

            $articles = [
                1 => [
                    "title" => "Le PHP c'est vraiment trop génial",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => false,
                    "id" => 1
                ],
                2 => [
                    "title" => "Le PHP c'est vraiment trop génial 2",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => true,
                    "id" => 2
                ],
                3 => [
                    "title" => "Le PHP c'est vraiment trop génial 3",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => true,
                    "id" => 3
                ],
                4 => [
                    "title" => "Le PHP c'est vraiment trop génial 4",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => true,
                    "id" => 4
                ],
                5 => [
                    "title" => "Le PHP c'est vraiment trop génial 5",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => true,
                    "id" => 5
                ]
            ];


            // $article = [
            //  "title" => "Le PHP c'est vraiment trop génial",//  "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            //   "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            //  "video"=> "https://www.bing.com/videos/search?q=christian+clavier+no%c3%abl&&view=detail&mid=E4D3F757642184AABD51E4D3F757642184AABD51&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dchristian%2520clavier%2520no%25C3%25ABl%26qs%3Dn%26form%3DQBVR%26sp%3D-1%26pq%3Dchristian%2520clavier%2520no%25C3%25ABl%26sc%3D1-22%26sk%3D%26cvid%3DA542E60477D544B2B63D73923B55CD74#"];
            //
            // COMMENTAIRE on retourne par la méthode render un fichier twig html. On peut utiliser dans le fichier twig html,
            // la variable article, car on la passe en second parametre de la méthode render.
            // "article" correspondant dans le tableaux Sarticles à l'article dont l'id a été saisi dans l'url

            //test value in array + méthode renvoie message 404 o





            //if (!$id) {
             //   $response = new Response('valeur invalide');
             //   return $response;


            //} elseif ($id > 5) {
           //     $response = new Response(
            //        "erreur 404");
            //    return $response;
           // } else
             //   {
              return $this->render("article.html.twig", ["article" => $articles[$id]]);

        }

    //- créer une nouvelle page, qui va afficher la liste des articles (envoyés après) dans un fichier twig
    //- ajoutez le même header et le même footer que sur l'autre page. Et stylisez l'affichage de vos articles
    // (une grille)


    //EXO :
    //- Dans la liste des articles, créez pour chaque article un lien vers la page qui affiche le détail de l'article. Pour cela utilisez la fonction path('')
    //ps : utilisez le même tableau d'articles que pour l'exo précédent

    //COMMENTAIRE: la route amène par le http vers une page html présentatnt l'ensemble des articles de la (pseudobase
    //base de données).


    /**
     * @Route("/articles", name="articles")
     */







        public function articles()
        {

            $articles = [
        1 =>       [
                    "title" => "Le PHP c'est fantastique",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => false,
                    "id" => 1
                ],
       2 =>         [
                    "title" => "Christian Clavier",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                    "isPublished" => true,
                    "id" => 2
                ],
      3 =>          [
                    "title" => "Thierry Lhermitte",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://upload.wikimedia.org/wikipedia/commons/f/ff/Thierry_Lhermitte_2015.jpg",
                    "isPublished" => true,
                    "id" => 3
                ],
      4 =>          [
                    "title" => "Marie-Anne Chazel",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Marie-Anne_Chazel_-_Monte-Carlo_Television_Festival.JPG/800px-Marie-Anne_Chazel_-_Monte-Carlo_Television_Festival.JPG",
                    "isPublished" => true,
                    "id" => 4
                ],
      5 =>          [
                    "title" => "Gérard Jugnot",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                    "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Paris_-_Salon_du_livre_de_Paris_2017_-_G%C3%A9rard_Jugnot_-_003.jpg/800px-Paris_-_Salon_du_livre_de_Paris_2017_-_G%C3%A9rard_Jugnot_-_003.jpg",
                    "isPublished" => true,
                    "id" => 5
                ]
            ];

            //COMMENTAIRE : le fichier symphony est concaténé en html via le fichier articles.html.twig
            return $this->render("articles.html.twig", ["articles" => $articles]);

        }


}




