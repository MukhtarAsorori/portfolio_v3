var App = function(){
	var self = this;
	this.my_spinner = '<i class="fa fa-spinner fa-spin"></i> &nbsp;&nbsp;';
	this.my_options = {
		btn_login : 'Login',
		btn_login_submit : this.my_spinner+'Loging In',
	};

	this.init = function() {
		self.filter_project_type();
	};

	this.filter_project_type = function() {
		$("input[name='filter_project_type']").change(function(){
			var project_type = $("input[name='filter_project_type']:checked").val();
			// console.log(project_type);
			if(project_type){
				$("div[data-project_type]").hide();
				$("div[data-project_type='"+project_type+"']").show();
			}else{
				$("div[data-project_type]").show();
			}
		});
	}

	this.notify = function(message = "", type = ""){
		$.notify({
			// options
			icon: 'fa fa-exclamation-circle',
			message: message 
		},{
			// settings
			type: type,
			placement: {
				from: "top",
				align: "right"
			},
		});
	};

	this.notify_error = function(message = ""){
		this.notify(message, "danger");
	};

	this.notify_success = function(message = ""){
		this.notify(message, "success");
	};

	this.redirect = function(url = "", api_token = ""){
		window.location = url+"?api_token="+api_token;
	};

	this.url = function(url = "", api_token = ""){
		return url+"?api_token="+api_token;
	};

	this.data_table = function(obj = ""){
		data_column = [];
		
		data_table = $(obj.selector).DataTable({
            processing: false,
            responsive: true,
            pageLength: 50,
            ajax: {
                   url: obj.ajax.url,
                   type: 'POST',
                   data: obj.ajax.data,
                   dataSrc: 'data',
                },
            columns: [
		        { data: obj.columns[0] },
		        { data: 'email' },
		        { data: 'phone' },
		        { data: 'department_name' },
		        { data: 'role_name' },
		        { data: 'user_status' },
		        { data: 'created_at' },
		        { data: 'user_id' }
		    ],
            columnDefs: [
                { 
                    "targets": [], //first column / numbering column
                    "orderable": false, //set not orderable
                }
            ]
                 
        });
        return data_table;
	};
}

$(document).ready(function(){
	var app = new App();
	app.init();
})