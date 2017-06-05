<?php
	if(isset($_GET["id"])){
		$id=$_GET["id"];
		$sql="select title from theme where id='$id'";
		$result=$mysqli->query($sql);
		if($result->num_rows){
			$row=$result->fetch_assoc();
			$themetitle=$row["title"];
		}
	}
?>

<div class="theme-module">
	<div class="tit-type-2">
		 <span class="tit"><?php echo $themetitle;?></span>
	</div>

	
		<form class="theme-form1 form-horizontal">
		  <div class="form-group">
		    <label  class="col-sm-1 control-label">选项1</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="options[]"  placeholder="请输入选项内容">
		    </div>
		    <div class="col-sm-1"><button type="button" class="btn btn-danger btn-item-del">删除</button></div>
		  </div>
		  <div class="form-group">
		    <label  class="col-sm-1 control-label">选项2</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control"  name="options[]"  placeholder="请输入选项内容">
		    </div>
		    <div class="col-sm-1"><button type="button" class="btn btn-danger btn-item-del">删除</button></div>
		  </div>
		  <div class="form-group">
		    <label  class="col-sm-1 control-label">选项3</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="options[]" placeholder="请输入选项内容">
		    </div>
		    <div class="col-sm-1"><button type="button" class="btn btn-danger btn-item-del">删除</button></div>
		  </div>
		  <div class="form-group">
		  		<div class="col-sm-1"></div>
				<div class="col-sm-11">
					<button class="btn btn-primary" type="button" id="J_">添加选项+</button>
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
		

		<script type="text/javascript">
		$(function(){
			$(document).on("click",".btn-item-del",function(e){
				var $this=$(this);
			})
		})

		</script>
	
</div>

