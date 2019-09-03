<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test3");
?>

<div class="form">
	<div class="form_body">
		<div class="field">
			<input type="text" id="name" data-name="Имя" placeholder="name" value="">
		</div>
		<div class="field">
			<input type="text" id="phone" data-name="Телефон" placeholder="phone" value="">
		</div>
		<div class="field">
			<textarea id="message" data-name="Сообщение" placeholder="textarea">wwww</textarea>
		</div>
		<div class="field">
			
			<label for="radio2">
				политика
				<input type="radio" id="radio2">
			</label>
			<input type="hidden" id="policy" data-name="policy">
		</div>
		<div class="field">
				333
				<input type="checkbox" id="checkbox1" value="три">
				444
				<input type="checkbox" id="checkbox2" value="четыре">
			<input type="hidden" id="checkbox"  data-name="ЧЕК">
		</div>
		<div class="field"><input type="hidden" id="protect" data-name="protect" value=""></div>
		<div class="answer"></div>
		<div class="send">SEND</div>

	</div>
</div>
<script>
$(document).ready(function(){
	$('.send').click(function() {
		var $this = $(this),
			this_form = $(this).closest('.form_body'),
			field = $(this).closest('.form_body').find('.field'),
			f_length = field.length,
			formData = [], key, val, i, mm, name, check_name, check_id, check_val,
			this_field = this_form.find('.field:eq('+i+')'),
			this_input = this_field.find('input,textarea'),
			c_length = this_field.find('input').length;

		for(i=0; i<f_length; i++){
			var this_field = this_form.find('.field:eq('+i+')'),
				this_input = this_field.find('input,textarea'),
				c_length = this_field.find('input').length;
				
				if(this_field.find('input').attr('type')=='checkbox'||this_field.find('input').attr('type')=='radio')
				{
					check_val='';
					for(m=0; m<c_length; m++)
					{
						val = this_field.find('input:eq('+m+')').val();
						if(this_field.find('input:eq('+m+')').is(':checked'))
							check_val += val+' ';
					}
					check_name = this_field.find('input[type=hidden]').attr('data-name');
					check_id = this_field.find('input[type=hidden]').attr('id');
					formData.push({'id':check_id, 'name':check_name, 'val':check_val});
				}
			id = this_input.attr('id');
			name = this_input.attr('data-name');
			val = this_input.val();
			if(id!=undefined&&val!=undefined&&this_input.attr('type')!='checkbox'&&this_input.attr('type')!='radio')
				formData.push({'id':id, 'name':name, 'val':val});
			
		}
			console.log(formData);
		$.ajax({
			type: 'POST',
			url: '/test/config.php',
			data: {'SEND' : formData},
			dataType:'json',
			success: function(data)
			{
				console.log(data.status);
				this_form.find('.answer').html(data.answer);
				this_form.find('input,textarea').removeClass('error');
				$.each(data.errors, function(index, value)
				{
					this_form.find('input[id='+value+'], textarea[id='+value+']').addClass('error');
				});
				if(data.status=='OK')
				{
					$.each(field, function(index, value)
					{
						field.eq(index).find('input, textarea').val('');
					});
				}
				
				
			}
		});
	});
});
</script>






<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>