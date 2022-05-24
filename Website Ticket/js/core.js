$(document).ready(function() {

    $('#password, #confirmPasswordInput').on('keyup', function(e) {

    	if($('#password').val() != '' && $('#confirmPasswordInput').val() != '' && $('#password').val() != $('#confirmPasswordInput').val())
    	{
    		$('#passwordStrength').removeClass().addClass('alert alert-error').html('Passwords do not match!');

        	return false;
    	}

		// phải chữa chữ in hoa, số và các kí tự gạch dưới
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");

		// Phải chứa ít nhất là chữ in hoa, chữ số và chữ thường
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");

        // Độ dài password phải chứa ít nhất là 6 kí tự
        var okRegex = new RegExp("(?=.{6,}).*", "g");

        if (okRegex.test($(this).val()) === false) {
            // Nếu password ít hơn 6 kí tự thì
        	$('#passwordStrength').removeClass().addClass('alert alert-error').html('Password phải chứa ít nhất 6 kí tự.');

        } else if (strongRegex.test($(this).val())) {
            // Nếu password có độ bảo mật cao nhất (strong password)
            $('#passwordStrength').removeClass().addClass('alert alert-success').html('Good Password!');
        } else if (mediumRegex.test($(this).val())) {
            // Nếu thỏa mãn độ bảo mật trung bình thì
            $('#passwordStrength').removeClass().addClass('alert alert-info').html('Hãy điền thêm các kí tự số, chữ in hoa, hoặc kí tự đặc biệt để password có độ bảo mật tốt hơn !');
        } else {
            // If password is ok
            $('#passwordStrength').removeClass().addClass('alert alert-error').html('Password có độ bảo mật kém, nên thêm các kí tự và số.');
        }
        
        return true;
    });

});