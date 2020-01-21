$("#submit_parameter_item").on('click', function(event){
		event.preventDefault();
		var base_url = $("#baseurl").val();
		var url = base_url + 'accreditation-templates/add-parameter-item';

		var parameter_item = $('#parameter_item').val();
		var description = $('#description').val();
		var document_needed_list = $('#document_needed_list').val();
		var parameter_section_id = $('#parameter_section_id').val();
		var accreditation_template_id = $('#accreditation_template_id').val();
		var template_parameter_id = $('#template_parameter_id').val();
		var parent_parameter_item_id = $('#parent_parameter_item_id').val();
		$.ajax({
			type: "POST",
			url: url,
			dataType : "JSON",
			data : {parameter_item:parameter_item , description:description, document_needed_list:document_needed_list, parameter_section_id:parameter_section_id, accreditation_template_id:accreditation_template_id, template_parameter_id:template_parameter_id, parent_parameter_item_id:parent_parameter_item_id},
			success: function(data)
			{
					alert("success posting feed.");
          console.log('Submission was successful.');
          console.log(data);
      },
			error: function(req, status, err)
			{
				alert('something went wrong', status, err);
				console.log(req);
		  },
		});
		 return false;
	});
