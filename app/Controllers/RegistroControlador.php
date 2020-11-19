<?php namespace App\Controllers;

use App\Models\ModeloAnimal;

class RegistroControlador extends BaseController
{
	public function index()
	{
       $animales=array("nombre1"=>"","nombre2"=>"");
                return view('vistaRegistro',$animales);
    }
    public function registrar(){
       
        $nombre=$this->request->getPost("nombreanimal");
        $edad=$this->request->getPost("edadanimal");
        $alimento=$this->request->getPost("alimentoanimal");
         $tipo=$this->request->getPost("tipoanimal");
         $descripcion=$this->request->getPost("descripcion");
         $foto=$this->request->getPost("foto");
         
           
            $datosEnvio=array(

           
                    "nombre"=>$nombre,
                    "edad"=>$edad,
                    "alimento"=>$alimento,
                    "tipo"=>$tipo,
                    "descripcion"=>$descripcion,
                    "foto"=>$foto
                 );
            $modeloAnimal = new ModeloAnimal();
            try{
                    $modeloAnimal->insert($datosEnvio);
                   

			$mensaje="animal registrado con éxito";
			return redirect()->to(base_url("public/animales"))->with('mensaje',$mensaje);


            }catch(\Exception $e){
                    
                echo($e->getMessage());

            }

    }
  public function consultar(){


        $modeloAnimal =new ModeloAnimal();
        try{
                $animalesConsultados=$modeloAnimal->findALL();

                $datosParaVista= array("animales"=>$animalesConsultados);
                
                return view ('vistaListado',$datosParaVista);

        }catch(\Exception $e){
                echo($e->getMessage());

                }
                
        }
        public function eliminar($idEliminar){
                
        
                $modeloAnimal =new ModeloAnimal();
        //2. ejecutar la función delete() del modelo
        try{
                $modeloAnimal->where('id',$idEliminar)->delete();

                echo("El registro se ha eliminado con exito");
        }catch(\Exception $e){
            echo($e->getMessage());
        }

        }
	//--------------------------------------------------------------------


        public function editar($idEditar){
                $nombre=$this->request->getPost("nombreEditar");
               $descripcion=$this->request->getPost("descripEditar");

               $datosEnvio=array(
                "nombre"=>$nombre,
                "descripcion"=>$descripcion
        );
        $modeloAnimal =new ModeloAnimal();
        try{
                $modeloAnimal->update($idEditar,$datosEnvio);
                echo("Animal editado con exito");

        }catch(\Exception $e){
                    
                echo($e->getMessage());

            }
               

        }



}
