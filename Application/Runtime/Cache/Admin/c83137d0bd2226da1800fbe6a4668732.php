<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post"  enctype="multipart/form-data">
                    <table class="insert-tab" width="82%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>员工名字</th>
                                <td>
                                    <input class="common-text required"  name="name" size="50"  type="text">
                                </td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>员工简介</th>
                                <td><textarea type="text" name="jianjie" class="common-textarea"  style="width:40%;height:100px"  ></textarea></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>员工图片</th>
                                <td><input name="img"  type="file" /></td>
                            </tr>
                             
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                </td>
                            </tr>
                        </tbody>
					</table>
                </form>
            </div>
        </div>