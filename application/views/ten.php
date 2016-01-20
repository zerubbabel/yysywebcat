<section id="register" class="services bg-primary">
    <div class="container">
    	<div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h1>网上报名</h1>
            </div>
        </div>

    	<form class="form-horizontal" role="form">
                    <fieldset>
                        <legend>学生基本信息</legend>
                       <div class="form-group">
                          <label class="col-sm-2 control-label" for="ds_name">姓名</label>
                          <div class="col-sm-4">
                             <input class="form-control" id="ds_name" type="text"/>
                          </div>
                          <label class="col-sm-2 control-label" for="ds_phone">联系电话</label>
                          <div class="col-sm-4">
                             <input class="form-control" id="ds_phone" type="text"/>
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-2 control-label" for="ds_username">用户名</label>
                          <div class="col-sm-4">
                             <input class="form-control" id="ds_username" type="text" placeholder="root"/>
                          </div>
                          <label class="col-sm-2 control-label" for="ds_password">密码</label>
                          <div class="col-sm-4">
                             <input class="form-control" id="ds_password" type="password" placeholder="123456"/>
                          </div>
                       </div>
                    </fieldset>     
                    <fieldset>
                         <legend>选择相关表</legend>
                        <div class="form-group">
                           <label for="disabledSelect"  class="col-sm-2 control-label">表名</label>
                           <div class="col-sm-10">
                              <select id="disabledSelect" class="form-control">
                                 <option>禁止选择</option>
                                 <option>禁止选择</option>
                              </select>
                           </div>
                        </div>
                    </fieldset>
                    
                       <fieldset>
                         <legend>字段名</legend>
                        <div class="form-group">
                           <label for="disabledSelect"  class="col-sm-2 control-label">表名</label>
                           <div class="col-sm-10">
                              <select id="disabledSelect" class="form-control">
                                 <option>禁止选择</option>
                                 <option>禁止选择</option>
                              </select>
                           </div>
                        </div>
                    </fieldset>
                    <div class="text-center">
		                <button type="submit" class="btn btn-primary">提交</button>
		                <button type="cancel" class="btn btn-cancel">取消</button>
		            </div>
                    
                </form>
    </div>
</section>