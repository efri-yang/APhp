<?php
	
?>

<div class="theme-module">
	<div class="tit-type-2">
		 <span class="tit">投票主题</span>
	</div>

	
		<form class="theme-form1 form-horizontal" id="J_themeTitleForm" action="theme-titledo.php" method="post">
		  <div class="form-group">
		    <label  class="col-sm-1 control-label">标题</label>
		    <div class="col-sm-11">
		      <input type="text" name="title" class="form-control" placeholder="标题">
		    </div>
		  </div>
		  <div class="form-group">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<button type="submit" style="width: 100%;" class="btn btn-success btn-lg">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
				</div>
				<div class="col-sm-4"></div>
		  </div>
		</form>
		

		<script>
			$(function(){
				$('#J_themeTitleForm').bootstrapValidator({
		            message: '验证未通过',
		            feedbackIcons: {
		                valid: 'glyphicon glyphicon-ok',
		                invalid: 'glyphicon glyphicon-remove',
		                validating: 'glyphicon glyphicon-refresh'
		            },
		            fields: {
		            	title:{
		            		validators: {
		                        notEmpty: { //非空提示
		                            message: '请输入标题！'
		                        },
		                    }
		            	}
		            }
		        }).on('success.form.bv', function (e) { 
		        });       
			})
		</script>
	
</div>

