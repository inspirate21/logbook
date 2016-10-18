<?php
function changebulantonomor($month) {
	switch($month) {
		case "Januari":
        $month = "01";
        break;
    case "Februari":
        $month = "02";
        break;
    case "Maret":
        $month = "03";
        break;
	case "April":
        $month = "04";
        break;
	case "Mei":
        $month = "05";
        break;
	case "Juni":
        $month = "06";
        break;
	case "Juli":
        $month = "07";
        break;
	case "Agustus":
        $month = "08";
        break;
	case "September":
        $month = "09";
        break;
	case "Oktober":
        $month = "10";
        break;
	case "November":
        $month = "11";
        break;
	case "Desember":
        $month = "12";
        break;
	}
	return $month;
}
?>