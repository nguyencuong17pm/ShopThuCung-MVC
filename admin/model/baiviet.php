<?php
class BAIVIET_DB {
	// Field
	private $tablename = 'baiviet';
	private $primarykey = 'mabv';
	public function __construct() {
	}
	public function getAll() {
		return Database::getAll ( $this->tablename );
	}
	public function delete($value_key) {
		return Database::delete ( $this->tablename, $this->primarykey, $value_key );
	}
	public function getRowByID($value_key) {
		return Database::getRowByID ( $this->tablename, $this->primarykey, $value_key );
	}
	public function getDataBymacd($macd) {
		$sql = "SELECT * FROM baiviet INNER JOIN chude ON baiviet.macd = chude.macd WHERE chude.macd = ?";
		$option = array (
				$macd 
		);
		return Database::execute_nonquery ( $sql, $option );
	}
	public function getDataPaging(&$tongsodong, $macd) {
		$start = isset ( $_GET ['start'] ) ? $_GET ['start'] : 0;
		$num = isset ( $_GET ['num'] ) ? $_GET ['num'] : RECORDS_PER_PAGE;
		
		$query = "SELECT * FROM baiviet INNER JOIN chude ON baiviet.macd = chude.macd WHERE chude.macd = ?";
		$option = array (
				$macd 
		);
		
		$tongsodong = count ( Database::execute_nonquery ( $query, $option ) );
		$sql_paging = $query . " LIMIT $start, $num";
		
		return Database::execute_nonquery ( $sql_paging, $option );
	}
	public function getAllDataPaging(&$tongsodong) {
		$start = isset ( $_GET ['start'] ) ? $_GET ['start'] : 0;
		$num = isset ( $_GET ['num'] ) ? $_GET ['num'] : RECORDS_PER_PAGE;
		
		$query = "SELECT * FROM baiviet ORDER BY mabv DESC, quantrong DESC, kichhoat DESC";
		$option = array ();
		
		$tongsodong = count ( Database::execute_nonquery ( $query, $option ) );
		$sql_paging = $query . " LIMIT $start, $num";
		
		return Database::execute_nonquery ( $sql_paging, $option );
	}
	public function laybaiviettheoma($ma){
        $db = DATABASE::taoketnoi();
        try{
            $sql = "SELECT * FROM baiviet WHERE mabv=:ma";
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
	public function add($macd, $tieude, $tomtat, $noidung, $quantrong, $kichhoat, $luotxem, $ngaydang, $mand) {
		$sql = "INSERT INTO $this->tablename(macd, tieude, tomtat, noidung, quantrong, kichhoat, luotxem, ngaydang, mand) 
		VALUES (?,?,?,?,?,?,?,?,?)";
		$option = array (
				$macd,
				$tieude,
				$tomtat,
				$noidung,
				$quantrong,
				$kichhoat,
				$luotxem,
				$ngaydang,
				$mand
		);
		return Database::add ( $sql, $option );
	}
	public function update_kichhoat($kichhoat, $mabv) {
		$sql = "UPDATE $this->tablename SET kichhoat = ? WHERE mabv = ?";
		$option = array (
				$kichhoat,
				$mabv 
		);
		return Database::update ( $sql, $option );
	}
	public function update_quantrong($quantrong, $mabv) {
		$sql = "UPDATE $this->tablename SET quantrong = ? WHERE mabv = ?";
		$option = array (
				$quantrong,
				$mabv 
		);
		return Database::update ( $sql, $option );
	}
	public function update_dinhkem($dinhkem, $mabv) {
		$sql = "UPDATE $this->tablename SET DinhKem = ? WHERE mabv = ?";
		$option = array (
				$dinhkem,
				$mabv 
		);
		return Database::update ( $sql, $option );
	}
	public function getLastID() {
		return Database::lastID ( $this->tablename );
	}
	public function updatebv($mabv,$macd, $tieude, $tomtat, $noidung, $quantrong,$kichhoat){
        $dbcon = DATABASE::taoketnoi();
        try{
            $sql = "UPDATE baiviet SET macd=:macd, tieude=:tieude, tomtat=:tomtat, noidung=:noidung, quantrong=:quantrong, kichhoat=:kichhoat WHERE mabv=:mabv";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":mabv", $mabv);
            $cmd->bindValue(":macd", $macd);
            $cmd->bindValue(":tieude", $tieude);
            $cmd->bindValue(":tomtat", $tomtat);
            $cmd->bindValue(":noidung", $noidung);
            $cmd->bindValue(":quantrong", $quantrong);
            $cmd->bindValue(":kichhoat", $kichhoat);
            $ketqua = $cmd->execute();
            
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include("../view/error.php");
            exit();
        }
    }
}
?>
