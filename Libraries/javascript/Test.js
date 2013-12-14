// JavaScript Document
//Hàm kiểm tra khi đăng ký form
//Ý tưởng: Tạo ra hàm kiểm tra hợp lệ bằng cách dùng vòng for lặp qua từng phần tử input trong form, tạo ra một phần tử để hiển thị thông tin lỗi, trong vòng for kiểm tra sự hợp lệ của từng phần tử nếu có lỗi lưu nội dung lỗi vào phần tử đã tạo ra, cuối vòng for nếu phần tử hiển thị thông tin lỗi có nội dung lỗi thì chèn vào sau phần tử vừa mới kiểm tra. Tạo xong hàm kiểm tra lỗi thì gọi nó bằng cách gán vào sự kiện submit của form hoặc sự kiện click lên nút submit, có thể kết hợp thêm sự kiện onchange để kiểm tra ngay khi vừa thay đổi nội dung phần tử input.
window.onload = function(){
/*------------- valid form register, design by Van Khuong ----------*/
		var inputs = document.forms['dangkytv'].getElementsByTagName('input');
		var run_onchange = false;
		function valid(){
			var errors = false; 
			var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
			for(var i=0; i<inputs.length; i++){
				var value = inputs[i].value;
				var id = inputs[i].getAttribute('id');
				
				// Tạo phần tử span lưu thông tin lỗi
				var span = document.createElement('span');
				// Nếu span đã tồn tại thì remove
				var p = inputs[i].parentNode;
				if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
				
				// Kiểm tra rỗng
				if(value == ''){
					span.innerHTML ='Thông tin được yêu cầu';
				}else{
				// Kiểm tra các trường hợp khác
					if(id == 'email'){
						if(reg_mail.test(value) == false){ span.innerHTML ='Email không hợp lệ (ví dụ: abc@gmail.com)';}
						var email =value;
					}
					//if(id == 'confirm_email' && value != email){span.innerHTML ='Email nhập lại chưa đúng';}
					// Kiểm tra password
					if(id == 'matkhau'){
						if(value.length <6){span.innerHTML ='Password phải từ 6 ký tự';}
						var pass =value;
					}
					// Kiểm tra password nhập lại
					if(id == 're_matkhau' && value != pass){span.innerHTML ='Password nhập lại chưa đúng';}
					// Kiểm tra số điện thoại
					if(id == 'sdt' && isNaN(value) == true){span.innerHTML ='Số điện thoại phải là kiểu số';}
				}
				
				// Nếu có lỗi thì span vào hồ sơ, chạy onchange, submit return false, highlight border
				if(span.innerHTML != ''){
					inputs[i].parentNode.appendChild(span);
					errors = true;
					run_onchange = true;
					inputs[i].style.border = '1px solid #c6807b';
					inputs[i].style.background = '#fffcf9';
				}
			}// end for
			
			if(errors == false){alert('Đăng ký thành công');}
			return !errors;
		}// end valid()
		
		// Chay ham kiem tra
		var register = document.getElementById('submit');
		register.onclick = function(){
			return valid();
		}
		
		// Kiểm tra lỗi với sự kiện onchange -> gọi lại hàm valid()
			for(var i=0; i<inputs.length; i++){
				var id = inputs[i].getAttribute('id');
				inputs[i].onchange = function(){
					if(run_onchange == true){
						this.style.border = '1px solid #999';
						this.style.background = '#fff';
						valid();
					}
				}
			}// end for
}// end onload