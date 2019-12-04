<?php
class DATABASE{
    private static $username = "root";
    private static $password = "vertrigo";
    private static $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                            );
    private static $dns = "mysql:host=localhost;dbname=qltc1;port=3306";
    private static $dbcon;
    
    private static $db;
    private static $query;
    
        
    
    private function __construct(){} 
    
    public static function taoketnoi(){
        if(!isset(self::$dbcon)){
            try{
                self::$dbcon = new PDO(self::$dns, 
                                    self::$username, 
                                    self::$password, 
                                    self::$options);
            }
            catch(PDOException $e){
                $error_message = $e->getMessage();
                include("../view/error.php");
                exit();
            }
        }
        return self::$dbcon;
    }
    
    public static function dongketnoi(){
        self::$dbcon = null;
    }

    // ============================================================
    // ============== Các phương thức mới bổ sung =================
    /**
     * Lấy một kết nối PDO đến cơ sở dữ liệu
     *
     * @return $db <NULL, PDO>
     */
    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dns, self::$username, self::$password, self::$options);
                // self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
                // self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
                // self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            } catch (PDOException $ex) {
                ShowError($ex);
            }
        }
        return self::$db;
    }

    public static function get_Neo4jDB() {
        if (!isset(self::$db)) {
            try {

            } catch (PDOException $ex) {
                ShowError($ex);
            }
        }
        return self::$db;
    }

    /**
     * Lấy thông tin một dòng dữ liệu trong bảng.
     *
     * @param
     *          Tên bảng $tablename
     * @param
     *          Tên khóa chính $primarykey
     * @param
     *          Giá trị của khóa chính được truyền vào hàm $keyvalue
     * @return Một mảng chỉ có 1 dòng dữ liệu
     */
    public static function getRowByID($tablename, $primarykey, $keyvalue) {
        self::getDB();
        if (self::$db != null) {
            try {
                $query = "SELECT * FROM $tablename WHERE $primarykey = :id";
                $cmd = self::$db->prepare($query);
                $cmd->bindValue(':id', $keyvalue);
                $cmd->execute();
                $ketqua = $cmd->fetch();
                $cmd->closeCursor();
                return $ketqua;
            } catch (PDOException $ex) {
                ShowError($ex);
            }
        } else {
            ShowError($ex);
        }
        self::disconnect();
    }

    /**
     * Lấy tất cả các dòng trong một table
     *
     * @param
     *          Tên bảng $tablename
     * @return Một mảng nhiều dòng:
     */
    public static function getAll($tablename) {
        self::getDB();
        $query = "SELECT * FROM " . $tablename;
        if (self::$db != null) {
            try {
                $cmd = self::$db->prepare($query);
                $cmd->execute();
                $ketqua = $cmd->fetchAll();
                return $ketqua;
            } catch (PDOException $ex) {
                ShowError($ex);
            }
        } else {
            ShowError("Không kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }

    /**
     * Dùng để lấy kết quả của một truy vấn SQL có chứa tham số
     *
     * @param
     *          Câu lệnh SQL dùng để truy vấn. Vị trí tham số được thể hiện bằng ký tự ? $sql
     * @param
     *          Mảng danh sách tham số được lưu thứ tự. option = array($ts1, $ts2...) $option
     * @return Mảng kết quả của truy vấn:
     */
    public static function execute_nonquery($sql, $option = array()) {
        self::getDB();
        if (self::$db != null) {
            try {
                $cmd = self::$db->prepare($sql);
                if (count($option) > 0) {
                    for ($i = 0; $i < count($option); $i++) {
                        $cmd->bindParam($i + 1, $option[$i]);
                    }
                }
                $cmd->execute();
                $ketqua = $cmd->fetchAll();
                return $ketqua;
            } catch (PDOException $ex) {
                ShowError($ex);
            }
        } else {
            ShowError("Không kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }

    /**
     * Dùng để xóa một dòng trong bảng dữ liệu
     *
     * @param
     *          Tên bảng $tablename
     * @param
     *          Tên khóa chính $name_primarykey
     * @param
     *          Giá trị khóa cần xóa $value_key
     * @return Số dòng được xóa number
     */
    public static function delete($tablename, $name_primarykey, $value_key) {
        self::getDB();
        if (self::$db != null) {
            $query = "DELETE FROM $tablename WHERE $name_primarykey = :id";
            try {
                self::$db->beginTransaction();
                $cmd = self::$db->prepare($query);
                $cmd->bindValue(':id', $value_key);
                $cmd->execute();
                $rowDeleted = $cmd->rowCount();
                $cmd->closeCursor();
                self::$db->commit();
                return $rowDeleted;
            } catch (PDOException $ex) {
                self::$db->rollBack();
                ShowError($ex);
            }
        } else {
            ShowError("Không kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }

    /**
     * Dùng để thêm mới một dòng vào cơ sở dữ liệu
     *
     * @param
     *          Câu lệnh SQL dùng để thêm mới $sql: INSERT INTO...
     * @param
     *          Danh sách tham số $option
     * @return string
     */
    public static function add($sql, $option = array()) {
        self::getDB();
        if (self::$db != null) {
            try {
                self::$db->beginTransaction();
                $cmd = self::$db->prepare($sql);
                if ($option) {
                    for ($i = 0; $i < count($option); $i++) {
                        $cmd->bindParam($i + 1, $option[$i]);
                    }
                }
                $cmd->execute();
                $cmd->closeCursor();
                $kq = self::$db->lastInsertId();
                self::$db->commit();
                return $kq;
            } catch (PDOException $ex) {
                self::$db->rollBack();
                ShowError($ex->getMessage());
            }
        } else {
            ShowError("Không kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }

    /**
     * Dùng để cập nhật thông tin của một dòng trong cơ sở dữ liệu
     *
     * @param
     *          Câu lệnh SQL dùng để cập nhật $sql: UPDATE ...
     * @param
     *          Danh sách tham số $option
     * @return string
     */
    public static function update($sql, $option = array()) {
        self::getDB();
        if (self::$db != null) {
            try {
                self::$db->beginTransaction();
                $cmd = self::$db->prepare($sql);
                if ($option) {
                    for ($i = 0; $i < count($option); $i++) {
                        $cmd->bindParam($i + 1, $option[$i]);
                    }
                }
                $cmd->execute();
                $kq = $cmd->rowCount();
                $cmd->closeCursor();
                self::$db->commit();
                return $kq;
            } catch (PDOException $ex) {
                self::$db->rollBack();
                ShowError($ex);
            }
        } else {
            ShowError("Không kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }

    /**
     * Dùng để lấy giá trị khóa chính của dòng cuối cùng trong một bảng
     *
     * @param
     *          Tên bảng $tablename
     * @return string
     */
    public static function lastID($tablename) {
        self::getDB();
        $query = "SELECT * FROM " . $tablename;
        if (self::$db != null) {
            try {
                $cmd = self::$db->prepare($query);
                $cmd->execute();
                $ketqua = $cmd->fetch();
                return $ketqua[0];
            } catch (PDOException $ex) {
                ShowError($ex);
            }
        } else {
            ShowError("Không kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }
    public static function disconnect() {
        self::$db = null;
    }

    /**
     * Hàm lấy kết quả truy vấn dùng để phân trang
     *
     * @param unknown $query
     * @param unknown $option
     * @return Mảng
     */
    public static function execute_query_paging($query, $option = array(), &$tongsodong) {
        $start = isset($_GET['start']) ? $_GET['start'] : 0;
        $num = isset($_GET['num']) ? $_GET['num'] : RECORDS_PER_PAGE;
        $tongsodong = count(self::execute_nonquery($query, $option));
        $sql_paging = $query . " LIMIT $start, $num";
        return Database::execute_nonquery($sql_paging, $option);
    }

    function show_Navigation() {
        $start = isset($_GET['start']) ? $_GET['start'] : 0;
        $num = isset($_GET['num']) ? $_GET['num'] : RECORDS_PER_PAGE;
        paging($tongsodong, $start, $num, 'index.php?start=');
    }
}
?>
