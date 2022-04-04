## Projet POO
# Programation Orienté Object 


## SOUS-THÈME : REFUGE

• Un refuge doit avoir un ou plusieurs soigneurs
• Un refuge doit avoir zéro ou plusieurs animaux
• Un refuge peut adopter des animaux et les placer / vendre
• Un refuge a plusieurs enclos / emplacements
• Un soigneur peut être affecté à zéro ou plusieurs animaux
• Un animal peut avoir un ou plusieurs soigneurs
• Un animal doit être affecté à un enclos
• Une sortie de l’animal (adoption / vente) doit avoir un propriétaire

### OBJECTIF

• Une page listant les employés du refuge (avec les informations importantes comme le nom et prénom, la spécialité, la photo,
le sexe) → Affichage format « Card » recommandé mais format tableau : OK.
• Une page d’informations sur l’employé : Toutes les informations sur l’employé + la liste des animaux affectés
• Une page listant les animaux (avec les informations importants) → Idem que employés pour l’affichage
• Une page d’informations sur l’animal : Toutes les informations sur l’animal + Informations sur le/les propriétaire.s si adoption
(historique des adoptions)
• Une page listant les propriétaires → Idem que les autres pages de listes
• Une page d’informations sur le proprio + liste des animaux adoptés
• Une page listant les adoptions
• Une page d’informations sur l’adoption + informations de base sur l’animal + information de base sur le proprio

### VALIDATION
• Utilisation de la POO
• Utilisation d’un autoload (Celui de composer est recommandé)
• Utilisation des namespace
• Utilisation de l’héritage
• Utilisation des attributs et méthodes static, abstract, trait, final ...
• Utilisation du routage (exemple : « ?page=list_animals » → récupère « list_animals.php »)
• Utilisation du __construct
• Utilisation des filtres (Ressource: https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/presentation-filtre)
• Utilisation du chainage (Ressource: https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-chainage-methode)
• Utilisation des méthodes magiques (Ressource: https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-methode-magique)
• Utilisation de PDO et d’une classe optimisé de liaison avec la BDD ou par gestion de fichiers JSON
• Architecture MVC

Information : Les différentes pages (front) doivent être relié entre elle par des liens cliquable.
Exemple : Sur la page qui liste les animaux, on doit aller sur une page d’un animal