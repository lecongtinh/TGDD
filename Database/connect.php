<?php
	class database{
		
		private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "dienthoai";
		private $connection;                         
        private $flagconn = false;
        private $query;
        private $result;
		

       public function __construct(){
            
             if (!$this->connection = mysql_connect($this->hostname, $this->username, $this->password)){
                die ("Không thể kết nối với server ");
             }
             else{
                mysql_query("SET NAMES 'utf8'");
                if (!mysql_select_db($this->dbname,$this->connection)){
                    die ("Không thể kết nối với cơ sở dữ liệu ");
                    mysql_close($this->connection);
                }
                else{
                    
                    $this->flagconn = true;
                }
             }
        }
		
		public function executeQuery($query){
			if ($this->flagconn == false){
                $this->__construct();
            }
            $result = mysql_query($query);
            return $result;
        }
		
		public function fetchArray($query){
            if ($this->flagconn == false){
                $this->__construct();
            }
            $result = mysql_query($query);
			while($rows = mysql_fetch_array($result))
            	return $rows;
        }
		public function fetch_json_code($query){
			$result = mysql_query($query);	
			while ( $row = mysql_fetch_array($result))
			{
				$data[] = $row;
			}	
			header("Content-type: application/json");
			echo json_encode( $data );
		}
		/*---------------------------------------------------------
        $date = date("d/m/Y");
		date("d/m/Y",formatdate( $date ));
        -------------------------------------------------------------*/
		public function date_to_int( $date )
		{
			$month = intval(substr($date, 3, 2)); $day = intval(substr($date, 0, 2)); $year = intval(substr($date, -4));
			return mktime(date('H'), date('i'), date('s'),$month, $day, $year);
		
		}
	
		/*---------------------------------------------------------
        Kiểm tra sự tồn tại của cột trong bảng
		isExits("NguoiDung","ND_ID='".$cb->getMaSo()"')
        -------------------------------------------------------------*/
        public function isExits($table="", $where=""){
            
            if (empty($table) || empty($where))
            {
                return FALSE;
            }
            if ($this->flagconn == false){
                $this->__construct();
            } 
            $this->setQuery("select * from $table where $where");                     
            $this->result = mysql_query($this->query);
            return mysql_num_rows($this->result);
        }
        
        /*-------------------------------------------------
        Use:
            $db = new database();
            $db->setQuery("select * from NguoiDung");   
            $result = $db->fetchAll(); 
            while($rows  = mysql_fetch_array($result)){
                echo '<br>' . $rows['maSo'] . ' - ' . $rows['matKhau'];
            }
        -----------------------------------------------------*/                        
        public function fetchAll(){
            if ($this->flagconn == false){
                $this->__construct();
            }
            $this->result = mysql_query($this->query);
            return $this->result;
            
        }
	}
?>