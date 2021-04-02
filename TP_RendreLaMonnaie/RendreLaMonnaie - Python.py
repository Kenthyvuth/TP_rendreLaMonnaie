prix = float(input("Saisir le prix de l'objet: "))
don = float(input("Saisir le montant donné au vendeur: "))
rendu = float(don - prix) 
renduFinal = round(rendu,2) #rendu après arrondis au centième près
eurosR = int(rendu) #variable qui contient le montant en euros du rendu
centimesR = round((rendu - int(rendu))*100) #variable qui contient le montant en centimes du rendu
print("\nRendu total : ", renduFinal, "\n")

#L'ensemble des variables qui permettent de faire la décomposition du rendu
b50 = 0
b20 = 0
b10 = 0
b5 = 0
p2 = 0
p1 = 0
c50 = 0
c20 = 0
c10 = 0
c5 = 0
c2 = 0
c1 = 0

#Utilisation de boucles 'Tant que' pour réduire le plus possible le rendu final (renduF), pour chacune des valeurs d'€(billets de 50€, 20€, 10€, 5€, pièces de 2€, 1€)
while (eurosR>=50):
    eurosR = eurosR - 50
    b50 = b50 + 1
while (eurosR>=20):
    eurosR = eurosR - 20
    b20 = b20 + 1
while (eurosR>=10):
    eurosR = eurosR - 10
    b10 = b10 + 1
while (eurosR>=5):
    eurosR = eurosR - 5
    b5 = b5 + 1
while (eurosR>=2):
    eurosR = eurosR - 2
    p2 = p2 + 1
while (eurosR>=1):
    eurosR = eurosR - 1
    p1 = p1 + 1
#Idem que précédemment mais pour les centimes. Ici il ne s'agit plus de euroR mais de centimesR
while (centimesR>=50):
    centimesR = centimesR - 50
    c50 = c50 + 1
while (centimesR>=20):
    centimesR = centimesR - 20
    c20 = c20 + 1
while (centimesR>=10):
    centimesR = centimesR - 10
    c10 = c10 + 1
while (centimesR>=5):
    centimesR = centimesR - 5
    c5 = c5 + 1
while (centimesR>=2):
    centimesR = centimesR - 2
    c2 = c2 + 1
while (centimesR>=1):
    centimesR = centimesR - 1
    c1 = c1 + 1

#Affichage du rendu total, euro(s) et centime(s) compris
print("Billets de 50€ : ", b50)
print("Billets de 20€ : ", b20)
print("Billets de 10€ : ", b10)
print("Billets de 5€ : ", b5)
print("Pièces de 2€ : ", p2)
print("Pièces de 1€ : ", p1, "\n")
print("Pièces de 50c : ", c50)
print("Pièces de 20c : ", c20)
print("Pièces de 10c : ", c10)
print("Pièces de 5c : ", c5)
print("Pièces de 2c : ", c2)
print("Pièces de 1c : ", c1)