<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Come detto a lezione, generare nuovo controller con rotta associata; definire poi classe Movie con titolo e descrizione; definire costruttore con titolo necessario e descrizione opzionale; e metodo getString() che restituisca una stringa riportante tutte le variabili; generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe */



class Movie{

    public $title;
    public $description;

    public function __construct($title, $description = null)
    {
        $this -> title = $title;
        $this -> description= $description;


        if($description == null){
            $this -> description = "This movie's description is not available";
        }else{
            $this -> description= $description;
        }
    }

    public function getString() {
       
        return "Movie: " . $this -> title . " --> " . $this -> description;
    }
}

class TestController extends Controller
{
    

    public function home(){

        /* elenco delle istanze( movies ) */

        $movie1 = new Movie("2001: A Space Odyssey", "The greatest film ever made began with the meeting of two brilliant minds: Stanley Kubrick and sci-fi seer Arthur C. Clarke. “I understand he’s a nut who lives in a tree in India somewhere,” noted Kubrick when Clarke’s name came up—along with those of Isaac Asimov, Robert A. Heinlein and Ray Bradbury—as a possible writer for his planned sci-fi epic. Clarke was actually living in Ceylon (not in India, or a tree), but the pair met, hit it off, and forged a story of technological progress and disaster (hello, HAL) that’s steeped in humanity, in all its brilliance, weakness, courage and mad ambition. An audience of stoners, wowed by its eye-candy Star Gate sequence and pioneering visuals, adopted it as a pet movie. Were it not for them, 2001 might have faded into obscurity, but it’s hard to imagine it would have stayed there. Kubrick’s frighteningly clinical vision of the future—AI and all—still feels prophetic, more than 50 years" );

        $movie2 = new Movie ("The Godfather", "From the wise guys of Goodfellas to The Sopranos, all crime dynasties that came after The Godfather are descendants of the Corleones: Francis Ford Coppola’s magnum opus is the ultimate patriarch of the Mafia genre. A monumental opening line (“I believe in America”) sets the operatic Mario Puzo adaptation in motion, before Coppola’s epic morphs into a chilling dismantling of the American dream. The corruption-soaked story follows a powerful immigrant family grappling with the paradoxical values of reign and religion; those moral contradictions are crystallized in a legendary baptism sequence, superbly edited in parallel to the murdering of four rivaling dons. With countless iconic details—a horse’s severed head, Marlon Brando’s wheezy voice, Nino Rota’s catchy waltz—The Godfather’s authority lives on.");

        $movie3 = new Movie("Citizen Kane", "Back in the headlines thanks to David Fincher’s brilliantly acerbic making-of drama Mank, Citizen Kane always finds a way to renew itself for a new generation of film lovers. For newbies, the journey of its bulldozer of a protagonist – played with inexhaustible force by actor-director-wunderkind Orson Welles – from unloved child to thrusting entrepreneur to press baron to populist feels entirely au courant (in unconnected news, Donald Trump came out as a superfan). You can bathe in the film’s groundbreaking techniques, like Gregg Toland’s deep-focus photography, or the limitless self-confidence of its staging and its investigation of American capitalism. But it’s also just a damn good story that you definitely don’t need to be a hardened cineaste to enjoy.");

        $movie4 = new Movie("Raiders of the Lost Ark");

        $movie5 = new Movie("La Dolce Vita", "Made in the middle of Italy’s boom years, Federico Fellini’s runaway box-office hit came to define heated glamour and celebrity culture for the entire planet. It also made Marcello Mastroianni a star; here, he plays a gossip journalist caught up in the frenzied, freewheeling world of Roman nightlife. Ironically, the movie’s portrayal of this milieu as vapid and soul-corrodingly hedonistic appears to have passed many viewers by. Perhaps that’s because Fellini films everything with so much cinematic verve and wit that it’s often hard not to get caught up in the delirious happenings onscreen. So much of how we view fame still dates back to this film; it even gave us the word paparazzi.");

            $str1 = $movie1 -> getString(); 
            $str2 = $movie2 -> getString(); 
            $str3 = $movie3 -> getString();
            $str4 = $movie4 -> getString();
            $str5 = $movie5 -> getString();

            $movies=[$movie1,$movie2,$movie3,$movie4,$movie5];
            $str='';

            foreach($movies as $film){
                $str .= $film ->getString() . "\n";
            }

            dd($str);


    return view('pages.home');
    } 
}

