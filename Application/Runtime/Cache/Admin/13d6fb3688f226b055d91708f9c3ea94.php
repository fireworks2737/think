<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>文件名：</th>
                                <td><input class="common-text" name="pdf_name" size="50" value="" type="text"></td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>上传文件</th>
                                <td><input type="file" name="pdf_src" class="common-textarea required"  size="50" /></td>
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