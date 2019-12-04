<?php
// Dùng cho phân trang
define ( "RECORDS_PER_PAGE",	4);
function paging($totalrows, $start, $num, $link, $tabname = "")
{
	
	if($totalrows > $num)
	{
		echo "<ul class='pagination'>";
		if($start > 0)
		{
			echo "<li><a href='" . $link . 0 . $tabname . "'><<</a></li>";
			echo "<li><a href='" . $link . ($start - $num) . $tabname . "'><</a></li>";
		}
		$page = 1;
		for($i = 0; $i < $totalrows; $i = $i + $num)
		{
			if($i == $start) echo "<li class='active'><a href='" . $link . $i . $tabname . "'>{$page}</a></li>";
			else echo "<li><a href='" . $link . $i . $tabname . "'>{$page}</a></li>";
			$page++;
		}
		if($start < $totalrows - $num)
		{
			echo "<li><a href='" . $link . ($start + $num) . $tabname . "'>&nbsp;></a></li>";
			echo "<li><a href='" . $link . ($totalrows - $num) . $tabname . "'>&nbsp;>></a></li>";
		}
		echo "</ul>";
		echo "<p align='right'>Danh sách có ".ceil($totalrows/$num). " trang";
	}
	else
	{
		echo "<div align='right'>Danh sách có 01 trang </div>";
	}
}

function Control_Navigation($tongsodong)
{
	$start = isset($_GET['start']) ? $_GET['start'] : 0;
	$num = isset($_GET['num']) ? $_GET['num'] : RECORDS_PER_PAGE;
	paging($tongsodong, $start, $num, 'index.php?start=');
}

// Dùng chuyển trang
// Hàm bắt buộc chuyển hướng và lưu dữ liệu vào session
function redirect($url)
{
    session_write_close();
    header("Location: " . $url);
    exit();
}

function ShowError($error)
{
    $error_message = $error;
    include '../view/error.php';
}
?>