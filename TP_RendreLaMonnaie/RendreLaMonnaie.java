import java.util.*;     //Utilisation de la méthode Math.round (pour arrondir)

public class RendreLaMonnaie {
    
    public static void main(String[] args) {
        
        //Partie saisie du prix et du montant donné
        Scanner sc = new Scanner(System.in);    //Méthode permettant à l'utilisateur de saisir
        System.out.println("Saisir le prix de l'objet");    
        float prixObjet = sc.nextFloat();       //La valeur entrée par l'utilisateur est stockée dans une variable
        System.out.println("Saisir le montant donne au vendeur");
        float sommeDonnee = sc.nextFloat();
        
        //Calcul du rendu, conversion au centième près (si nombre décimal)
        float rendu = sommeDonnee - prixObjet;
        float renduFinal = (float)(Math.round(rendu*100))/100;      //Le rendu final, arrondi au centième près
        
        int eurosR = Math.round(rendu*100)/100;     //Variable contenant le montant du rendu en euros
        int centimesR = Math.round((rendu-eurosR)*100);     //Variable contenant le montant du rendu en centimes
        
        //Variables permettant de faire la décomposition du rendu
        int billets50 = 0;
        int billets20 = 0;
        int billets10 = 0;
        int billets5 = 0;
        int euros2 = 0;
        int euros1 = 0;
        
        int centimes50 = 0;
        int centimes20 = 0;
        int centimes10 = 0;
        int centimes5 = 0;
        int centimes2 = 0;
        int centimes1 = 0;
        
        //Boucle 'Tant que' pour évaluer le montant en euros puis de réduire selon les valeurs d'€ (50€, 20€, 10€, 5€, 2€, 1€)
        while(eurosR>=50) {
            eurosR = eurosR - 50;
            billets50 = billets50 + 1;
        }
        while(eurosR>=20) {
            eurosR = eurosR - 20;
            billets20 = billets20 + 1;
        }
        while(eurosR>=10) {
            eurosR = eurosR - 10;
            billets10 = billets10 + 1;
        }
        while(eurosR>=5) {
            eurosR = eurosR - 5;
            billets5 = billets5 + 1;
        }
        while(eurosR>=2) {
            eurosR = eurosR - 200;
            euros2 = euros2 + 1;
        }
        while(eurosR>=1) {
            eurosR = eurosR - 1;
            euros1 = euros1 + 1;
        }
        
        //Ici, il s'agit de la même démarche mais cela concerne maintenant les centimes (50c, 20c, 10c, 5c, 2c, 1c)
        while(centimesR>=50) {
            centimesR = centimesR - 50;
            centimes50 = centimes50 + 1;
        }
        while(centimesR>=20) {
            centimesR = centimesR - 20;
            centimes20 = centimes20 + 1;
        }
        while(centimesR>=10) {
            centimesR = centimesR - 10;
            centimes10 = centimes10 + 1;
        }
        while(centimesR>=5) {
            centimesR = centimesR - 5;
            centimes5 = centimes5 + 1;
        }
        while(centimesR>=2) {
            centimesR = centimesR - 2;
            centimes2 = centimes2 + 1;
        }
        while(centimesR>=1) {
            centimesR = centimesR - 1;
            centimes1 = centimes1 + 1;
        }
        
        //Affichage du rendu avec décomposition de ce dernier
        System.out.println("----------Rendu----------" + "\n");
        System.out.println("Rendu final : " + renduFinal + "E" + "\n");
        System.out.println("Billets de 50E : " + billets50);
        System.out.println("Billets de 20E : " + billets20);
        System.out.println("Billets de 10E : " + billets10);
        System.out.println("Billets de 5E : " + billets5);
        System.out.println("Pieces de 2E : " + euros2);
        System.out.println("Pieces de 1E : " + euros1 + "\n");
        
        System.out.println("Pieces de 50c : " + centimes50);
        System.out.println("Pieces de 20c : " + centimes20);
        System.out.println("Pieces de 10c : " + centimes10);
        System.out.println("Pieces de 5c : " + centimes5);
        System.out.println("Pieces de 2c : " + centimes2);
        System.out.println("Pieces de 1c : " + centimes1);
    }
}