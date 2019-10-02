<?php
	class Notificacion extends BaseModel {
		// Atributos
	private $codigo_pedido;
    private $cedula_cliente;
  	private $codigo_factura;
  	private $codigo_producto;

		// Métodos
		public function __construct() {
			$this->tablePedidos = "pedidos";
			$this->tableProductos = "productos";
			$this->tableClientes = "clientes";
			$this->tableFacturas = "facturas";
			parent::__construct();
		}

		//Getters y Setters de Pedidos

		public function getCodigoPedido(){
	        return $this->codigo_pedido;
	    }
	    public function setCodigoPedido($codigo_pedido){
	        $this->codigo_pedido = $codigo_pedido;
	    }

	    public function getCodigoFactura(){
	        return $this->codigo_factura;
	    }
	    public function setCodigoFactura($codigo_factura){
	        $this->codigo_factura = $codigo_factura;
	    }
	     //Getters y Setters de Clientes

	    public function getCedulaCliente(){
	        return $this->cedula_cliente;
	    }
	    public function setCedulaCliente($cedula_cliente){
	        $this->cedula_cliente = $cedula_cliente;
	    }

	    //Getters y Setters de Productos

	    public function getCodigoProducto(){
	        return $this->codigo_pedido;
	    }
	    public function setCodigoProducto($codigo_producto){
	        $this->codigo_producto = $codigo_producto;
	    }

	    //Funciones para Pedidos

		 public function getPedido(){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query('SELECT 
		        							factura_ventas.codigo_factura, 
		        							factura_ventas.fecha_factura,  
		        							pedidos.codigo_pedido, 
		        							pedidos.status_pedido,
		        							pedidos.fecha_entrega_pedido, 
		        							clientes.cedula_cliente, 
		        							clientes.nombre_cliente,
		        							clientes.telefono_cliente,
		        							pedidos.fecha_entrega_pedido - CURRENT_DATE as dia_faltante
		        							 FROM pedidos INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente INNER JOIN factura_ventas on factura_ventas.codigo_pedido = pedidos.codigo_pedido');

		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }

		    public function getPedidoById($id){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("



		        	SELECT 
		        							factura_ventas.codigo_factura, 
		        							factura_ventas.fecha_factura,
		        							pedidos.codigo_pedido, 
		        							pedidos.status_pedido, 
		        							pedidos.descripcion_pedido, 
		        							pedidos.fecha_entrega_pedido, 
		        							clientes.cedula_cliente, 
		        							clientes.nombre_cliente, 
		        							clientes.telefono_cliente,
		        							clientes.tipo_documento_cliente,
		        							clientes.representante_cliente,
		        							pedidos.fecha_entrega_pedido - CURRENT_DATE as dia_faltante
		        							FROM pedidos INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente INNER JOIN factura_ventas on factura_ventas.codigo_pedido = pedidos.codigo_pedido WHERE factura_ventas.codigo_factura = '$id'");




		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    } 

    		//Funciones para Productos

    		 public function getProducto(){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("SELECT 
		        							codigo_producto, 
		        							nombre_producto,  
		        							stock_producto, 
		        							stock_min_producto 
		        							FROM productos");

		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }

		    public function getProductoById($id){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("SELECT 
		        							codigo_producto, 
		        							nombre_producto,
		        							descripcion_producto,
		        							tipo_producto,
		        							modelo_producto,
		        							costo_producto,
		        							precio_producto,  
		        							stock_producto, 
		        							stock_min_producto 
		        							FROM productos WHERE codigo_producto = '$id'");




		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }







 		public function getCliente(){//para consultar todos lo registros de una tabla
        	
		        $query=$this->db()->query("SELECT 
		        							pedidos.codigo_pedido,
		        							pedidos.fecha_pedido,
		        							pedidos.status_pedido,
		        							clientes.cedula_cliente, 
		        							clientes.nombre_cliente, 
		        							clientes.telefono_cliente,
		        							clientes.tipo_documento_cliente,
		        							clientes.representante_cliente,
		        							pedidos.fecha_pedido + 5 AS fecha_alerta,
		        							CURRENT_DATE AS fecha_hoy
		        							FROM pedidos INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente WHERE pedidos.status_pedido = 'Consulta' or pedidos.status_pedido = 'consulta'");




		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;
      
    		}


    		public function getClienteById($id){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("SELECT 
		        							pedidos.codigo_pedido,
		        							pedidos.fecha_pedido,
		        							pedidos.status_pedido,
		        							pedidos.descripcion_pedido,
		        							clientes.cedula_cliente, 
		        							clientes.nombre_cliente, 
		        							clientes.telefono_cliente,
		        							clientes.tipo_documento_cliente,
		        							clientes.representante_cliente
		        							FROM pedidos INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente WHERE pedidos.cedula_cliente = '$id'");




		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }


}
    



    
?>



