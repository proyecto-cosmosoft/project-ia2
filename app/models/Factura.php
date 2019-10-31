<?php
	class Factura extends BaseModel {
		// Atributos
	private $codigo_pedido;
    private $cedula_cliente;
  	private $codigo_factura;
  	private $codigo_producto;
  	private $id_material;
  	private $id_servicio;


		// Métodos
		public function __construct() {
			$this->tableMateriales = "materiales";
			$this->tableMatServicios = "mat_servicios";
			$this->tableServicios = "servicios";
			$this->tableServiPedidos = "servi_pedidos";
			$this->tablePedidos = "pedidos";
			$this->tableProPedidos = "pro_pedidos";
			$this->tableProductos = "productos";
			$this->tableClientes = "clientes";
			$this->tableFacturas = "facturas";
			
			parent::__construct();
		}

		//Getters y Setters de Materiales
		public function getCodigoMaterial(){
	        return $this->codigo_material;
	    }
	    public function setCodigoMaterial($codigo_material){
	        $this->codigo_material = $codigo_material;
	    }
		
		//Getters y Setters de Servicios
		public function getIdServicio(){
	        return $this->id_servicio;
	    }
	    public function setIdServicio($id_servicio){
	        $this->id_servicio = $id_servicio;
	    }
	
		//Getters y Setters de Pedidos
		public function getCodigoPedido(){
	        return $this->codigo_pedido;
	    }
	    public function setCodigoPedido($codigo_pedido){
	        $this->codigo_pedido = $codigo_pedido;
	    }

	    //Getters y Setters de Factura
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



	    	public function getFactura(){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("
		        	SELECT 										
					factura_ventas.codigo_factura, 
		        	factura_ventas.fecha_factura,
		        	factura_ventas.modo_pago_factura,		       
		        	pedidos.codigo_pedido,
		        	pedidos.descripcion_pedido, 
		        	pedidos.status_pedido,
		        	pedidos.fecha_entrega_pedido,
		        	pedidos.fecha_pedido, 
		        	clientes.cedula_cliente,
		        	clientes.tipo_documento_cliente,
		        	clientes.nombre_cliente,
		        	clientes.representante_cliente
		        	FROM pedidos 
		        	INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente 
		        	INNER JOIN factura_ventas on factura_ventas.codigo_pedido = pedidos.codigo_pedido
		        	");

		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }



		    public function getFacturaId($id){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("										
					SELECT 										
					servicios.id_servicio,
		        	factura_ventas.codigo_factura, 
		        	factura_ventas.fecha_factura,
		        	factura_ventas.modo_pago_factura,		       
		        	pedidos.codigo_pedido,
		        	pedidos.descripcion_pedido, 
		        	pedidos.status_pedido,
		        	pedidos.fecha_entrega_pedido,
		        	pedidos.fecha_pedido, 
		        	clientes.cedula_cliente,
		        	clientes.direccion_cliente,
		        	clientes.nombre_cliente,
		        	clientes.representante_cliente
		        	FROM pedidos 
		        	INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente 
		        	INNER JOIN factura_ventas on factura_ventas.codigo_pedido = pedidos.codigo_pedido
		        	INNER JOIN pro_pedidos on pro_pedidos.codigo_pedido = pedidos.codigo_pedido
					INNER JOIN productos on productos.codigo_producto = pro_pedidos.codigo_producto
		        	INNER JOIN servi_pedidos on servi_pedidos.codigo_pedido = pedidos.codigo_pedido
		        	INNER JOIN servicios on servicios.id_servicio = servi_pedidos.id_servicio
		        	WHERE factura_ventas.codigo_factura = '$id'");

		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }

		
		    public function getFacturaProductoById($id){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("									
					SELECT
					productos.codigo_producto,
					productos.nombre_producto,
					productos.descripcion_producto,
					productos.precio_producto,
					pro_pedidos.cant_pro_pedido,
		        	factura_ventas.codigo_factura, 
		        	factura_ventas.fecha_factura,
		        	factura_ventas.modo_pago_factura,		       
		        	pedidos.codigo_pedido,
		        	pedidos.descripcion_pedido, 
		        	pedidos.status_pedido,
		        	pedidos.fecha_entrega_pedido,
		        	pedidos.fecha_pedido, 
		        	clientes.cedula_cliente,
		        	clientes.direccion_cliente,
		        	clientes.nombre_cliente,
		        	clientes.representante_cliente,
		        	productos.precio_producto*pro_pedidos.cant_pro_pedido as total_producto
		        	FROM pedidos 
		        	INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente 
		        	INNER JOIN factura_ventas on factura_ventas.codigo_pedido = pedidos.codigo_pedido
		        	INNER JOIN pro_pedidos on pro_pedidos.codigo_pedido = pedidos.codigo_pedido
					INNER JOIN productos on productos.codigo_producto = pro_pedidos.codigo_producto
		        	WHERE factura_ventas.codigo_factura = '$id'");




		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }	



		    public function getFacturaServicioById($id){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("									
					SELECT 										
					servi_pedidos.id_servi_pedido,
					servi_pedidos.cantidad_prenda,
					servi_pedidos.cantidad_medida,
					servi_pedidos.precio_servi_pedido,
					servicios.id_servicio,
					servicios.nombre_servicio,
					servicios.precio_servicio,
					servicios.descripcion_servicio,
					mat_servicios.cant_mat_servicio,
					materiales.id_material,
					materiales.nombre_material,
					materiales.unidad_material,
					materiales.precio_material,
		        	factura_ventas.codigo_factura, 
		        	factura_ventas.fecha_factura,
		        	factura_ventas.modo_pago_factura,		       
		        	pedidos.codigo_pedido,
		        	pedidos.descripcion_pedido, 
		        	pedidos.status_pedido,
		        	pedidos.fecha_entrega_pedido,
		        	pedidos.fecha_pedido, 
		        	clientes.cedula_cliente,
		        	clientes.direccion_cliente,
		        	clientes.nombre_cliente,
		        	clientes.representante_cliente,
		        	(servi_pedidos.cantidad_prenda * servi_pedidos.cantidad_medida)*servicios.precio_servicio  as total_servicio
		        	FROM pedidos 
		        	INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente 
		        	INNER JOIN factura_ventas on factura_ventas.codigo_pedido = pedidos.codigo_pedido
		        	INNER JOIN servi_pedidos on servi_pedidos.codigo_pedido = pedidos.codigo_pedido
		        	INNER JOIN servicios on servicios.id_servicio = servi_pedidos.id_servicio
		        	INNER JOIN mat_servicios on mat_servicios.id_servicio = servicios.id_servicio
		        	INNER JOIN materiales on materiales.id_material = mat_servicios.id_material
		        	WHERE factura_ventas.codigo_factura = '$id'");




		        if($query->rowCount()>=1){
		            while ($row=$query->fetch(PDO::FETCH_OBJ)){
		                $resulSet[]=$row;
		            }
		        }else{
		            $resulSet=NULL;
		        }

		      
		        return $resulSet;


		    }

		    public function getProductos(){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("SELECT 
		        							codigo_producto, 
		        							nombre_producto,
		        							descripcion_producto,
		        							tipo_producto,
		        							modelo_producto,
		        							stock_producto,
		        							precio_producto
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


		    public function getPedidos(){//para consultar todos lo registros de una tabla
        

		        $query=$this->db()->query("SELECT 
		        							pedidos.codigo_pedido,
		        							pedidos.descripcion_pedido, 
		        							pedidos.status_pedido,
		        							pedidos.fecha_entrega_pedido, 
		        							clientes.cedula_cliente,
		        							clientes.telefono_cliente,
		        							clientes.nombre_cliente,
		        							clientes.representante_cliente
		        							FROM pedidos INNER JOIN clientes on pedidos.cedula_cliente = clientes.cedula_cliente");




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