<?php 
	$url = isset($_GET['url']) == true ? $_GET['url']:"/";
	// Kiểm tra xem biến $url đã tồn tại và có giá trị chưa, nếu chưa thì sẽ được khai báo và có giá trị mặc định là "/"

	require_once 'Controller/TicketController.php';
	require_once 'Controller/ContactController.php';

	switch ($url) {
		case '/':
			// require_once 'test/html.html';
			// require_once 'Controller/ChatGptController.php';
			include 'View/viewTrangChu.html';
			break;

		default:
			echo "Xin lỗi, không tồn tại đường dẫn này!";
			break;

		case 'save-ticket':
			$ctr = new TicketController();
			$ctr->saveTicket();
			break;

		case 'save-contact':
			$ctr = new ContactController();
			$ctr->saveContact();
			break;

		case 'chat':
			require_once 'Controller/ChatGptController.php';
			break;
	}
 ?>