<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function inscription(Request $request){
        //echo "bonjour";
        //return response("bonjour", 201);

        $utilisateurDonnee = $request -> validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:4|max:30'
            //"isadmin" =>["required","boolean"]
        ]);

        

        $utilisateurs = User::create([
                "name" => $utilisateurDonnee["name"],
                "email" => $utilisateurDonnee["email"],
                "password" => bcrypt($utilisateurDonnee["password"]),
                
                //"name" => $utilisateurDonnee["name"],
                //"email" => $utilisateurDonnee["email"],
                //"password" => bcrypt($utilisateurDonnee["password"]),
               // "isadmin" =>utilisateurDonnee(["isadmin"])

        ]);

        return response($utilisateurs, 201);
    }

    public function connexion(Request $request){
        $utilisateurDonnee = $request -> validate([

            "email" => ["required","email"],
            "password" => ["required","string","min:8","max:30"]
            
        ]);
        $utilisateur = User::where("email",$utilisateurDonnee['email']) ->first();
        if(!$utilisateur) return response(["message" => "Aucun utilisateur de trouvé avec l'email suivante $utilisateurDonnee[email]"],401);
        if(!Hash::check($utilisateurDonnee["password"], $utilisateur->password)) {
            return response (["message" => "Aucun utilisateur de trouvé avec ce mot de passe"],401);
        } 
        $token = $utilisateur ->createToken("CLE_SECRETE")->plainTextToken;
        return response ( 
            [
               "utilisateur" =>$utilisateur, 
               "token" => $token
            ],200
        );
    }
}
