from flask import Flask, redirect, url_for, render_template, Blueprint

def index():    
    return render_template('index.html')
def login():
    return render_template('inicioDeSesion.php')
def register():
    return render_template('registrarse.php')
def profile():
    return render_template('profile.html')
def register_response():
    return render_template('register_response.html')
def forgot_password():
    return render_template('forgot_password.html')
def tendencias():
    return render_template('tendencias.html')
def egresados():
    return render_template('egresado.php')
def dashboard():
    return render_template('dashBoard.php')
def comun():
    return render_template('Comun.php')
def sobrenosotros():
    return render_template('sobreNosotros.html')
def logout():
    return render_template('logOut.php')
def sobrenosotros():
    return render_template('sobreNosotros.html')
