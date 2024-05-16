from flask import Blueprint

import os

ROOT_DIR = os.environ.get('ROOT_DIR')

user_controller_path = os.path.join(ROOT_DIR, 'controllers', 'user_controller.py')
data_controller_path = os.path.join(ROOT_DIR, 'controllers', 'data_controller.py')

from controllers import user_controller as user

from controllers import data_controller as data

web_bp = Blueprint('web', __name__)

# Define las rutas y las funciones de las vistas aquí



@web_bp.route("/main", endpoint="index")
def index_route():
    return user.index()

@web_bp.route("/login", endpoint="login")
def login_route():
    return user.login()

@web_bp.route("/register", endpoint="register")
def register_route():
    return user.register()

@web_bp.route("/profile", endpoint="profile")
def profile_route():
    return user.profile()

@web_bp.route("/register_response", endpoint="register_response")
def register_response_route():
    return user.register_response()

@web_bp.route("/forgot_password", endpoint="forgot_password")
def profile_route():
    return user.forgot_password()

@web_bp.route("/tendencias", endpoint="tendencias")
def profile_route():
    return user.tendencias()

@web_bp.route("/egresados", endpoint="egresados")
def profile_route():
    return user.egresados()

@web_bp.route("/dashboard", endpoint="dashboard")
def profile_route():
    return user.dashboard()

@web_bp.route("/comun", endpoint="comun")
def profile_route():
    return user.comun()

@web_bp.route("/sobrenosotros", endpoint="sobrenosotros")
def profile_route():
    return user.sobrenosotros()

@web_bp.route("/logout", endpoint="logout")
def profile_route():
    return user.logout()
