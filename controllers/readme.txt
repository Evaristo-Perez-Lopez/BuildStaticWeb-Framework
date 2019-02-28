En esta carpeta estarán los archivos que llamaran las vistas.
Heredarán de la clase abstracta AppController. Está en la carpeta /config
Tendrán un constructor.
Tendrán un método público llamado index. Estará vacío

En caso de que tenga algún formulario de contacto que enviará la información directamente al correo,
deberá crear un metodo publico llamado "email"

public function __contruct(){
       parent::__contruct();
     }
     public function index(){
     }
     
     public function email($args){
        //code
     }

Los nombres de los controladores deben comenzar en minúscula y luego la palabra "Controller.php"
