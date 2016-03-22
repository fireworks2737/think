<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post"  enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
						<script>
							KindEditor.ready(function(K) {
								window.editor = K.create('#content');
							});

						</script>
                            <tr>
                                <th><i class="require-red">*</i>管理员名字：</th>
                                <td><input class="common-text" name="adminname" size="50" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>管理员邮箱：</th>
                                <td>
                                    <input class="common-text required"  name="email" size="50" value="" type="text">
                                </td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>管理员密码：</th>
                                <td><input type="password" name="content" class="common-textarea required"  size="50" /></td>
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