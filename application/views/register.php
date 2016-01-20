<?php echo validation_errors(); ?>

<?php echo form_open('register/create') ?>
<section id="register" class="services bg-primary">
    <div class="container">
    	<div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h1><?php echo $title ?></h1>
            </div>
        </div>
    	<form class="form-horizontal" role="form">
            <fieldset>
                <legend>学生基本信息</legend>
               <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">姓名</label>
                  <div class="col-sm-4">
                     <input class="form-control" id="name" name="name" type="text"/>
                  </div>
                  <label class="col-sm-2 control-label" for="phone">联系电话</label>
                  <div class="col-sm-4">
                     <input class="form-control" id="phone" name="phone" type="text"/>
                  </div>
               </div>              
            </fieldset>   
            <br />
            <div class="text-center">
                <button type="submit" class="btn btn-primary">提交</button>
                <button type="cancel" class="btn btn-cancel">取消</button>
            </div>   
                   
        </form>
    </div>
</section>