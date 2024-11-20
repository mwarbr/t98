#-----------------------------------------
#   Importações
#-----------------------------------------
from kivy.app import App
from kivy.uix.screenmanager import ScreenManager, Screen
from kivy.clock import Clock # cria delay
from kivy.core.window import Window # janela do app
from kivy.utils import get_color_from_hex #cores hexa
from kivy.core.text import LabelBase # fonte para textos
from kivy.lang import Builder # importa telas do arquivo .kv


#-----------------------------------------
#   Configurações do Aplicativo
#-----------------------------------------

# Carrega o arquivo KV
Builder.load_file('telas.kv')

# Definir o tamanho da tela
Window.size = (338, 600) 

# importando a nova fonte
LabelBase.register(name='MinhaFonte', fn_regular='Poppins-Regular.ttf')

# tempo da SplashScreen
tempoSplash = 0

#-----------------------------------------
#   Acesso ao Banco de Dados mySQL
#-----------------------------------------
def ir_para_login( self, instance ):
    self.manager.current = 'login'
    
def ir_para_cadastro( self, instance ):
    self.manager.current = 'cadastro'
    

#-----------------------------------------
#   Telas da aplicação
#-----------------------------------------

# Tela SplashScreen
class SplashScreen(Screen):
    def on_enter(self): # executa ao abrir a tela
        # Agendar a navegação para a tela de login após 3 segundos
        Clock.schedule_once(self.vai_para_login, tempoSplash )

    def vai_para_login(self, dt):
        # Transição para a tela de login sempre pelo id da tela
        self.manager.current = 'login'
        
# Tela de Login
class LoginScreen(Screen):
    pass

# Tela de Cadastro
class CadastroScreen(Screen):
    pass

#-----------------------------------------
#   Classe principal
#-----------------------------------------
class Testes(App):
    def build(self): # cosntrutor do kivy
        
        # cor de fundo da janela 
        Window.clearcolor = get_color_from_hex('#ffffff') 
        
        # Criação do ScreenManager
        sm = ScreenManager()

        # Adiciona as telas ao ScreenManager
        sm.add_widget(SplashScreen(name='splash'))
        sm.add_widget(LoginScreen(name='login'))
        sm.add_widget(CadastroScreen(name='cadastro'))

        return sm

if __name__ == '__main__':
    Testes().run()