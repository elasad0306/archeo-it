# Installer le projet

**1.Pré-requis**
* Disposer d'un serveur local (WAMP ou XAMP ou LAMP)
* Python 3.13.

**2.Procédure d'installation**
- Cloner le projet 
```bash
git clone https://github.com/elasad0306/archeo-it.git
```
ou télécharger le ZIP et après l'extraire

- Mettre le dossier du projet "archeo-it" dans le dossier du serveur
```bash 
#Sur WAMP, le dossier doit être mis dans 
wamp64/www/
#Sur XAMPP, l'emplacement est : 
xampp/htdocs/
#Sur LAMP, l'emplacement est : 
var/www/html/
```
- Générateur de mot de passe : 
```bash
#Créer l'environnement virtuel
python -m venv .venv
#Lancer l'environnement
.venv\Scripts\activate
#Installer les dépendances lister dans requirements.txt 
pip install -r requirements.txt
#Lancer le serveur fastapi : 
fastapi dev password_generator/test.py
```
