<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post"  enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
						<!--
						<tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="colId" id="catid" class="required">
                                    <option value="">请选择</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                        </tr>
						-->
						<script>
							KindEditor.ready(function(K) {
								window.editor = K.create('#content');
							});

						</script>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td><input type="text" name="content" class="common-textarea" id="content" cols="30" style="width: 80%;" rows="10" /></td>
                            </tr>
                            <tr>
                                <th>作者：</th>
                                <td><input class="common-text" name="author" size="50" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>上传图片：</th>
                                <td><input name="img"  type="file" /></td>
                            </tr>
                             
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>