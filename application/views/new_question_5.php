 <div class="container">
<?php
$lang=$this->config->item('question_lang');
?>
   
 <h3><?php echo $title;?></h3>
   
 

  <div class="row">
     <form method="post" id="qf" action="<?php echo site_url('qbank/new_question_5/'.$nop.'/'.$para);?>">
	
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
		
		
				<div class="form-group">	 
					<?php echo $this->lang->line('long_answer');?>

			</div>

			
			<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_category');?></label> 
					<select class="form-control" name="cid">
					<?php 
					foreach($category_list as $key => $val){
						?>
						
						<option value="<?php echo $val['cid'];?>"><?php echo $val['category_name'];?></option>
						<?php 
					}
					?>
					</select>
			</div>
			
			
			<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_level');?></label> 
					<select class="form-control" name="lid">
					<?php 
					foreach($level_list as $key => $val){
						?>
						
						<option value="<?php echo $val['lid'];?>"><?php echo $val['level_name'];?></option>
						<?php 
					}
					?>
					</select>
			</div>

			
<?php 
if($para==1){
?>

			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('paragraph');?></label> 
					<input  name="paragraph"  class="form-control"   ><?php
	if(isset($qp)){ echo $qp['paragraph']; } ?></input>
			</div>
			 

<?php
} 
?>			
			

			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('question');?></label> 
					<input  name="question"  class="form-control"   ></input>
			</div>
			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('description');?></label> 
					<input  name="description"  class="form-control"></input>
			</div>
	 

 <input type="hidden" name="parag" id="parag" value="0">
	<button class="btn btn-default" type="submit"><?php echo $this->lang->line('submit');?></button>
 <?php 
if($para==1){
?>	<button class="btn btn-default"  type="button" onClick="javascript:parag();"><?php echo $this->lang->line('submit&add');?></button>
<?php } ?>
 
		</div>
</div>
 
 
 
 
</div>
      </form>
</div>



 



</div>
<script>
function parags(){
$('#parag').val('1');
 $('#qf').submit(); 
}
</script>