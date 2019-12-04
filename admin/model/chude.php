<?php
//Tùy chỉnh tên class
class CHUDE_DB
{
	//Cập nhật tên bảng vào khóa chính. Khi cần truy xuất tên bảng $this->tablename, tên khóa chính $this->primarykey
	//--------------------------------------------------------------------------------------------------
	private  	$tablename 	= 'chude'; //Thay đổi tên bảng ở đây
	private 	$primarykey	= 'macd'; //Thay đổi tên khóa chính ở đây
	
	//Không thay đổi phần này
	//--------------------------------------------------------------------------------------------------
	public function __construct() {}
	
	public function getAll() {
		return Database::getAll($this->tablename);
	}
	
	public function delete($value_key) {
		return Database::delete($this->tablename, $this->primarykey, $value_key);
	}
	
	public function getRowByID($value_key) {
		return Database::getRowByID($this->tablename, $this->primarykey, $value_key);
	}
	
	//Hàm dùng để lấy dữ liệu kết bảng chủ đề và nhóm chủ đề.
	//--------------------------------------------------------------------------------------------------
	public function getFullData() {
			
		//Khai báo câu SQL
		$query = "SELECT * from chude";
		$options = array();
		return Database::execute_nonquery ( $query, $options );
	}
	public function laychudetheoma($ma){
        $db = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM chude WHERE macd=:ma";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":ma", $ma);            
            $cmd->execute();
            $ketqua = $cmd->fetch();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }

	//Hàm dùng để lấy dữ liệu vào phân trang. Trong trường hợp cần thêm tham số thì bổ sung thêm tham số.
	//--------------------------------------------------------------------------------------------------
	public function getDataPaging(&$tongsodong) {
		$start = isset ( $_GET ['start'] ) ? $_GET ['start'] : 0;
		$num = isset ( $_GET ['num'] ) ? $_GET ['num'] : RECORDS_PER_PAGE;
		
		//Khai báo câu SQL
		$query = "SELECT * from chude ";
		
		//Khai báo danh sách thứ tự các đối số truyền vào tương ứng vị trí ? trong câu SQL nếu có
		//Ví dụ: $option = array ($manhom);
		//$options = array();
		
		$tongsodong = count ( Database::execute_nonquery ( $query, $options ) );
		$sql_paging = $query . " LIMIT $start, $num";
	
		return Database::execute_nonquery ( $sql_paging, $options );
	}
	//--------------------------------------------------------------------------------------------------
	
	//Hàm thêm dữ liệu. Thay đổi danh sách các đối số
	//--------------------------------------------------------------------------------------------------
	public function add($tenchude) {
		//B1.Viết câu SQL với dấu ? tương ứng với vị trí các tham số
		$sql = "INSERT INTO $this->tablename(tencd) VALUES (?)";
		//B2. Khai báo thứ tự danh sách các đối số với các biến là các phần tử tương ứng trong mảng
		$option = array (
				$tenchude
		);
		return Database::add ( $sql, $option );
	}
	public function update($tenchude, $machude) {
		//B1.Viết câu SQL với dấu ? tương ứng với vị trí các tham số
		$sql = "UPDATE $this->tablename SET tenchude = ?  WHERE machude = ?";
		//B2. Khai báo thứ tự danh sách các đối số với các biến là các phần tử tương ứng trong mảng
		$option = array (
				$tenchude,
				$machude
		);
		return Database::update ( $sql, $option );
	}
	
}
?>
