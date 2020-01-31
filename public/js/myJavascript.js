function displayMSI(itemParameter, accreditation_template_id)
{
	event.preventDefault();
	alert('http://localhost/damas/msi/displayItems/' + itemParameter + '/' + accreditation_template_id);
	// alert('parameter_id = '+ itemParameter);
	// alert('accreditation_template_id = '+ accreditation_template_id);
	$.ajax({
		type: "GET",
		url: 'http://localhost/damas/msi/displayItems/' + itemParameter + '/' + accreditation_template_id,
		dataType : "HTML",
		success: function(data)
		{
			// alert(data);
			$('#parameterTable').html(data);
			// $('#indicators-table .tbody').
		},
		error: function(req, status, err)
		{
			alert('Something Went Wrong', status, err);
		},
	});

	return false;
}


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
					alert("Success in Adding Indecator / Parameter Item.");

					$('#parameter_item').val("");
					$('#description').val("");
					$('#document_needed_list').val("");
					$('#parameter_section_id').val("");
					$('#accreditation_template_id').val("");
					$('#template_parameter_id').val("");
					$('#parent_parameter_item_id').val("");
					$('#frmParameterItems').modal('hide');

          console.log(data);
      },
			error: function(req, status, err)
			{
				alert('Something Went Wrong', status, err);
				// console.log(req);
		  },
		});
		 return false;
	});
