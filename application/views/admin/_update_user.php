
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Update User <small><?=$row[0]->name?></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?=base_url('admin/uyeler/update_table/')?><?=$table_name?>/<?=$row[0]->id?>">

                                    <!-- Just for not losing data if row is being transferred. -->
                                    <input name="date" value="<?=$row[0]->date?>" style="visibility: hidden">
                                    <input name="picture" value="<?=$row[0]->picture?>" style="visibility: hidden">
                                    <!-- Just for not losing data if row is being transferred. -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="first-name" name="name" value="<?=$row[0]->name?>" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email" value="<?=$row[0]->email?>" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="middle-name" value="<?=$row[0]->password?>" class="form-control col-md-7 col-xs-12" required="required" type="text" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nickname <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="birthday" name="nickname" value="<?=$row[0]->nickname?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Authorization</label>
                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                            <select class="form-control" name="authorization">
                                                <option selected="selected"><?=$row[0]->authorization?></option>
                                                <option>user</option>
                                                <option>admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                            <select class="form-control" name="state">
                                                <option selected="selected"><?=$row[0]->state?></option>
                                                <option>active</option>
                                                <option>inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /page content -->

